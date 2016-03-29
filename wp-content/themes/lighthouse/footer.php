
        <div class="footer-content">
            <div class="container">
                <div class="row">

                    <div>
                        <?php if ( dynamic_sidebar( 'footer-widget-sidebar-1' ) ) : else : endif; ?>
                    </div>

                    <div class="footer-widgetarea-4 col-md-3">
                        <?php if ( dynamic_sidebar( 'footer-widget-sidebar-2' ) ) : else : endif; ?>
                    </div>

                </div>
            </div>
        </div>

        <?php wp_footer(); ?>

    </body>
</html>