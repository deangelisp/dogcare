<header id="main-header" class="banner">
    <div class="media-breakpoint-dogcare">
        <div class="container">
            <nav class="flex align-items-center justify-content-between">
                <a class="brand " href="<?php echo e(home_url('/')); ?>" >
                    <img src="<?php echo get_option('wi_logo'); ?>" id="main-branding" />
                </a>
                <input id="menu-check" name="menu-check" style="display: none" type="checkbox"  />
                <div class="nav-primary col-9 col-md-10 col-lg-10  row align-items-center justify-content-end">

                    <?php
                    $phone = get_option('wi_phone');
                    ?>

                    <?php if(has_nav_menu('primary_navigation')): ?>
                    <?php echo wp_nav_menu( array( 
                    'theme_location' => 'primary_navigation',
                    'container' => 'nav ',
                    'container_class' => 'navigation-menu header',
                    'menu_class' => 'nav primary-navigation justify-content-end',
                    'fallback_cb' => false,
                    ) );; ?>

                    <?php endif; ?>

                    <?php if($phone): ?>
                    <a class="button flex align-items-center" href="tell:<?php echo $phone; ?>"><img src="<?= App\asset_path('images/icon-phone.png'); ?>">Book now</a>
                    <?php endif; ?>
                </div>
                <label class="menu-mobile" for="menu-check">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </label>
            </nav>
        </div>
    </div>
</header>
