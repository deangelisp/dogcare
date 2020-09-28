<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-6 col-sm-12 col-md-6 sm-none">
            <?php if(has_nav_menu('primary_navigation')): ?>
                <?php echo wp_nav_menu( array( 
                'theme_location' => 'primary_navigation',
                'container' => 'nav ',
                'container_class' => 'navigation-menu footer',
                'menu_class' => 'nav primary-navigation',
                'fallback_cb' => false,
                ) );; ?>

            <?php endif; ?>
            </div>
            <div class="col-6 col-md-6 col-sm-12 flex">
                <div class="col-7 flex p-0">
                    <div class="col-6 p-0 flex">
                        <p>
                            <?php echo nl2br(get_option('wi_address')) ?>
                        </p>
                    </div>
                    <div class="col-6 p-0 flex">
                        <p>
                            <b>To Book Phone</b><br />
                            <a href="tell:<?php echo get_option('wi_phone') ?>"><?php echo get_option('wi_phone') ?></a>
                        </p>
                    </div>
                </div>
                <div class="col-5 p-0  text-right social-media">
                    <a href="<?php echo get_option('wi_facebook') ?>"><b>Facebook</b></a>
                    <a href="<?php echo get_option('wi_instagram') ?>"><b>Instagram</b></a>
                </div>
            </div>
        </div>
        <p class="copyright">© <?php echo bloginfo('site_name'); ?> 2020</p>
    </div>
</footer>
