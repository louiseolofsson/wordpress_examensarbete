<li class="archive-article">

        <div class="archive-text">

            <a href="<?php esc_url( the_permalink() ); ?>" class="article-link">

                <h4><?php the_title(); ?></h4>

            </a>

            <?php the_excerpt(); ?> <!-- förkortningen av inlägget, om långt inlägg kapas texten av -->

            <ul class="archive-template-ul">
                <li>
                    <i class="glyphicon glyphicon-time"></i>
                    <?php the_date(); ?> <!-- går att formatera hur datumet ska skrivas ut tex the_date( 'y-m-d' ); -->
                </li>
                <li>
                    <i class="glyphicon glyphicon-comment"></i>
                    <?php comments_number( '0', '1', '%' ) ?> <!-- % hämtar antalet kommentarer och det skrivs ut -->
                </li>
            </ul>

        </div>

</li>