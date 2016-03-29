<?php
/**
 *
 *
 * @package Sushi_Instagram
 * @version 1.0
 */

/*
Plugin Name: Instagram
Description: Get photos by hashtag - (look att this as an example)
Author:
Version: 1.0
*/

class EP_Instagram {


    static private $endpoint = 'https://api.instagram.com/v1';
    static private $access_token = '1347655137.0a462d5.bb5c8e06082e47e9afcd3b950060652e';
    static private $category_id = 2; // <-- Instagram category ID in WP.
    static private $post_category = "hashtag-helasverigerullar";
    static private $post_type = "instagram";

    private $hashtag = 'helasverigerullar';
    private $hashtags = array('helasverigerullar');

    /*http://sushi.ep/?ep_instagram=fetch*/

    function __construct() {

        $this->hashtags = array('nolimitskate');
        //Action for WP Cron.
        add_action('instagram_refresh', array($this, 'get_hashtag_images'));

        //Use this to avoid the error "Call to undefined function is_user_logged_in()"
        add_action('init', array($this, 'add_post_type'));
        add_action('init', array($this, 'init'));

    }

    public function init() {

        //Schedule wp cron every hour
        if ( ! wp_next_scheduled('instagram_refresh')) {
            wp_schedule_event(time(), 'hourly', 'instagram_refresh');
        }

        //$this->get_account_instagram();
        if ( isset( $_GET['ep_instagram'] ) && $_GET['ep_instagram'] === 'fetch' ) {
            foreach($this->hashtags as $hashtag) {
                $this->get_images_by_hashtag($hashtag);
            }
        }
    }

    public function get_hashtag_images() {
        foreach($this->hashtags as $hashtag) {
            $this->get_images_by_hashtag($hashtag);
        }
    }

    //Add a post type for the instagram pictures
    public function add_post_type(){
        register_post_type( 'instagram',
            array(
                'labels' => array(
                    'name' => __( 'Instagram' ),
                    'singular_name' => __( 'Instagram' )
                ),
                'public' => true,
                'has_archive' => true,

                'exclude_from_search' => true,
                'rewrite' => array('slug' => 'instagram'),
                'supports' => array( 'title', 'editor', 'author', 'custom-fields')
            )
        );
    }

    public function get_account_instagram() {

        $account_ids = $this->get_account_ids();
        if($account_ids) {
            foreach($account_ids as $id ) {
                $this->get_images_by_user($id);
            }
        }
    }

    private function get_account_ids() {

        if($ids = get_option('instagram_accounts')) {
            return explode(',', $ids);
        } else {
            return FALSE;
        }

    }

    public function get_images_by_hashtag($tag = '') {

        global $wpdb;

        $response = $this->get_media_by_hashtag($tag);

        if ($response) {

            foreach ($response->data as $result) {

                if ($result) {

                    $sql = 'SELECT pm.*, p.post_type FROM ' . $wpdb->postmeta . ' AS pm
							INNER JOIN ' . $wpdb->posts . ' AS p ON p.id = pm.post_id
							WHERE pm.meta_key = "instagram_id" AND pm.meta_value = "'.$result->id.'" AND p.post_type = "'. self::$post_type .'"';

                    $rows = $wpdb->query($sql);

                    if (!$rows) {

                        if ($result->type === 'video') { //If video, skip.
                            continue;
                        } else {
                            // check postmeta instagram_id if this exist, else:
                            $instagram_post = array(
                                'post_title'    => '@'.$result->user->username,
                                'post_type' 	=> self::$post_type,
                                'post_content'  => $result->link,
                                'post_name'     => md5(strtotime('now')),
                                'post_status'   => 'publish',
                                'post_author'   => 1,
                                'post_category' => array( self::$post_category ),
                                'tags_input'    => $result->tags,
                            );

                            $post_id = wp_insert_post($instagram_post);

                            if ($post_id) { //Add Custom fields to post

                                update_post_meta( $post_id, 'instagram_media_type', $result->type );
                                update_post_meta( $post_id, 'instagram_standard_resolution', $result->images->standard_resolution->url );
                                update_post_meta( $post_id, 'instagram_low_resolution', $result->images->low_resolution->url );
                                update_post_meta( $post_id, 'instagram_thumbnail', $result->images->thumbnail->url );
                                update_post_meta( $post_id, 'instagram_likes_count', $result->likes->count );
                                update_post_meta( $post_id, 'instagram_lat', ($result->location) ? $result->location->latitude : '' );
                                update_post_meta( $post_id, 'instagram_lon', ($result->location) ? $result->location->longitude : '' );
                                update_post_meta( $post_id, 'instagram_caption', ($result->caption) ? $result->caption->text : '' );
                                update_post_meta( $post_id, 'instagram_username', $result->user->username );
                                update_post_meta( $post_id, 'instagram_url', $result->link );
                                update_post_meta( $post_id, 'instagram_id', $result->id );
                                update_post_meta( $post_id, 'instagram_unix_timestamp', $result->created_time);
                                update_post_meta( $post_id, 'instagram_created_time', date('Y-m-d H:i:s', $result->created_time));

                            }
                        }
                    }
                }
            }
        }
    }


    public function get_images_by_user($user_id = null) {

        global $wpdb;

        $response = $this->get_media_by_user($user_id);

        if($response) {

            foreach($response->data as $result) {

                if($result) {

                    $rows = $wpdb->query('SELECT * FROM wp_postmeta WHERE meta_key = "instagram_id" AND meta_value = "' . $result->id . '"');

                    if(!$rows) {

                        $instagram_post = array(
                            'post_title'    => '@' . $result->caption->from->username,
                            'post_content'  => $result->link,
                            'post_status'   => 'publish',
                            'post_author'   => 1,
                            'post_category' => array(self::$category_id)
                        );

                        $post_id = wp_insert_post($instagram_post);

                        if($post_id) {
                            add_post_meta($post_id, 'instagram_video', $result->videos->standard_resolution->url);
                            add_post_meta($post_id, 'instagram_standard_resolution', $result->images->standard_resolution);
                            add_post_meta($post_id, 'instagram_thumbnail', $result->images->thumbnail);
                            add_post_meta($post_id, 'instagram_url', $result->link);
                            add_post_meta($post_id, 'instagram_id', $result->id);
                        }
                    }
                }
            }
        }
    }

    public function get_media_by_user($user_id = null) {

        $page = self::$endpoint . '/users/' . $user_id . '/media/recent?&access_token=' . self::$access_token;
        $result = @json_decode($this->_curl($page));

        return $result;
    }

    public function get_media_by_hashtag($tag = '') {

        $page = self::$endpoint . '/tags/' . $tag . '/media/recent?access_token=' . self::$access_token;
        $result = @json_decode( $this->_curl( $page ) );

        return $result;
    }

    private function _curl($url = null) {

        if($url) {

            $ch = curl_init();
            $options = array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_CONNECTTIMEOUT => 10,
                CURLOPT_TIMEOUT => 10
            );

            curl_setopt_array($ch, $options);
            $data = curl_exec($ch);
            $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);

            return $data;
        }
    }

    public function garbage_collector() {
        $old_posts = new WP_Query( array(
            'category_name'  => self::$post_category,
            'post_type'		 => 'instagram',
            'offset'    => 5000,
            'posts_per_page' => 100
        ) );
        foreach ( $old_posts->posts as $old_post ) {
            wp_delete_post( $old_post->ID, true );
        }
    }
}

$EP_instagram = new EP_Instagram;
add_action('init', array($EP_instagram, 'init'));