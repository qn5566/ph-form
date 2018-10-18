<?php
/**
 * List block part for displaying header content in page.php
 *
 * @package CoverNews
 */

?>
<?php
if ((has_nav_menu('aft-top-nav')) || (has_nav_menu('aft-social-nav'))):
    ?>
    <div class="top-masthead">

        <div class="container">
            <div class="row">
                <?php
                $show_date = covernews_get_option('show_date_section');

                if (has_nav_menu('aft-top-nav') || ($show_date == true)): ?>
                    <div class="col-xs-12 col-sm-12 device-center">
                        <?php
                        if ($show_date == true): ?>
                            <span class="topbar-date">
                                        <?php
                                        echo date_i18n('D. M jS, Y ', strtotime(date("Y-m-d")));
                                        ?>
                                    </span>

                        <?php endif; ?>

                        <?php if (has_nav_menu('aft-top-nav')) {

                            wp_nav_menu(array(
                                'theme_location' => 'aft-top-nav',
                                'menu_id' => 'top-menu',
                                'depth' => 1,
                                'container' => 'div',
                                'container_class' => 'top-navigation'
                            ));
                        }

                        ?>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div> <!--    Topbar Ends-->
<?php

endif;


?>
<header id="masthead" class="site-header">
    <?php
    $class = '';
    $background = '';
    if (has_header_image()) {
        $class = 'data-bg';
        $background = get_header_image();
    }

    ?>
    <div class="masthead-banner <?php echo esc_attr($class); ?>" data-background="<?php echo esc_attr($background); ?>">
        <div class="container">
            <div class="row">
                <div class="col-md-1" style="margin: 20px auto;">
                    <?php
                    the_custom_logo();
                    ?>
                </div>
                <div class="col-md-4">
                    <div class="site-branding" style="margin: 40px auto;">
                        <?php
                        if (is_front_page() || is_home()) : ?>
                            <h1 class="site-title font-family-1">
                                <a href="<?php echo esc_url(home_url('/')); ?>"
                                   rel="home"><?php bloginfo('name'); ?></a>
                            </h1>
                        <?php else : ?>
                            <p class="site-title font-family-1">
                                <a href="<?php echo esc_url(home_url('/')); ?>"
                                   rel="home"><?php bloginfo('name'); ?></a>
                            </p>
                        <?php endif; ?>

                        <?php
                        $description = get_bloginfo('description', 'display');
                        if ($description || is_customize_preview()) : ?>
                            <p class="site-description" style="margin: 5px auto;"><?php echo esc_html($description); ?></p>
                        <?php
                        endif; ?>
                    </div>
                </div>
                <div class="col-md-7">
                    <?php
                    $advertisement_scope = covernews_get_option('banner_advertisement_scope');
                    if ($advertisement_scope == 'site-wide') {

                        do_action('covernews_action_banner_advertisement');
                    } else {

                            if (is_front_page() || is_home()) {
                                do_action('covernews_action_banner_advertisement');
                            }


                    }
                    ?>
                </div>
            </div>
        </div>




<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-md-2" style="margin: 0 auto;">-->
<!---->
<!--                    <img width="120" height="50" src="http://tworkerph.com/wp-content/uploads/2018/09/banner-003.jpg"-->
<!--                         class="custom-logo jetpack-lazy-image--handled" alt="菲熊論壇" itemprop="logo"-->
<!--                         data-attachment-id="1329" data-permalink="http://tworkerph.com/panda-2/"-->
<!--                         data-orig-file="http://tworkerph.com/wp-content/uploads/2018/09/banner-003.jpg?fit=120%2C120"-->
<!--                         data-orig-size="120,120" data-comments-opened="1"-->
<!--                         data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;-->
<!--                         camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;-->
<!--                         created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;-->
<!--                         focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;-->
<!--                         shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;-->
<!--                         orientation&quot;:&quot;0&quot;}" data-image-title="panda" data-image-description=""-->
<!--                         data-medium-file="http://tworkerph.com/wp-content/uploads/2018/09/banner-003.jpg?fit=120%2C120"-->
<!--                         data-large-file="http://tworkerph.com/wp-content/uploads/2018/09/banner-003.jpg?fit=120%2C120"-->
<!--                         data-lazy-loaded="1" srcset="http://tworkerph.com/wp-content/uploads/2018/09/banner-003.jpg?w=120 120w,-->
<!--                         http://tworkerph.com/wp-content/uploads/2018/09/banner-003.jpg?resize=100%2C100 100w" sizes="(max-width: 120px) 100vw, 120px"-->
<!--                         style="display:block; margin:auto;">-->
<!---->
<!---->
<!--                </div>-->
<!---->
<!--                <div class="col-md-2" style="margin: 0 auto;">-->
<!---->
<!--                    <img width="120" height="50" src="http://tworkerph.com/wp-content/uploads/2018/09/banner-003.jpg"-->
<!--                         class="custom-logo jetpack-lazy-image--handled" alt="菲熊論壇" itemprop="logo"-->
<!--                         data-attachment-id="1329" data-permalink="http://tworkerph.com/panda-2/"-->
<!--                         data-orig-file="http://tworkerph.com/wp-content/uploads/2018/09/banner-003.jpg?fit=120%2C120"-->
<!--                         data-orig-size="120,120" data-comments-opened="1"-->
<!--                         data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;-->
<!--                         camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;-->
<!--                         created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;-->
<!--                         focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;-->
<!--                         shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;-->
<!--                         orientation&quot;:&quot;0&quot;}" data-image-title="panda" data-image-description=""-->
<!--                         data-medium-file="http://tworkerph.com/wp-content/uploads/2018/09/banner-003.jpg?fit=120%2C120"-->
<!--                         data-large-file="http://tworkerph.com/wp-content/uploads/2018/09/banner-003.jpg?fit=120%2C120"-->
<!--                         data-lazy-loaded="1" srcset="http://tworkerph.com/wp-content/uploads/2018/09/banner-003.jpg?w=120 120w,-->
<!--                         http://tworkerph.com/wp-content/uploads/2018/09/banner-003.jpg?resize=100%2C100 100w" sizes="(max-width: 120px) 100vw, 120px"-->
<!--                         style="display:block; margin:auto;">-->
<!---->
<!---->
<!--                </div>-->
<!---->
<!--                <div class="col-md-2" style="margin: 0 auto;">-->
<!---->
<!--                    <img width="120" height="50" src="http://tworkerph.com/wp-content/uploads/2018/09/banner-003.jpg"-->
<!--                         class="custom-logo jetpack-lazy-image--handled" alt="菲熊論壇" itemprop="logo"-->
<!--                         data-attachment-id="1329" data-permalink="http://tworkerph.com/panda-2/"-->
<!--                         data-orig-file="http://tworkerph.com/wp-content/uploads/2018/09/banner-003.jpg?fit=120%2C120"-->
<!--                         data-orig-size="120,120" data-comments-opened="1"-->
<!--                         data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;-->
<!--                         camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;-->
<!--                         created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;-->
<!--                         focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;-->
<!--                         shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;-->
<!--                         orientation&quot;:&quot;0&quot;}" data-image-title="panda" data-image-description=""-->
<!--                         data-medium-file="http://tworkerph.com/wp-content/uploads/2018/09/banner-003.jpg?fit=120%2C120"-->
<!--                         data-large-file="http://tworkerph.com/wp-content/uploads/2018/09/banner-003.jpg?fit=120%2C120"-->
<!--                         data-lazy-loaded="1" srcset="http://tworkerph.com/wp-content/uploads/2018/09/banner-003.jpg?w=120 120w,-->
<!--                         http://tworkerph.com/wp-content/uploads/2018/09/banner-003.jpg?resize=100%2C100 100w" sizes="(max-width: 120px) 100vw, 120px"-->
<!--                         style="display:block; margin:auto;">-->
<!---->
<!---->
<!--                </div>-->
<!---->
<!--                <div class="col-md-2" style="margin: 0 auto;">-->
<!---->
<!--                    <img width="120" height="50" src="http://tworkerph.com/wp-content/uploads/2018/09/banner-003.jpg"-->
<!--                         class="custom-logo jetpack-lazy-image--handled" alt="菲熊論壇" itemprop="logo"-->
<!--                         data-attachment-id="1329" data-permalink="http://tworkerph.com/panda-2/"-->
<!--                         data-orig-file="http://tworkerph.com/wp-content/uploads/2018/09/banner-003.jpg?fit=120%2C120"-->
<!--                         data-orig-size="120,120" data-comments-opened="1"-->
<!--                         data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;-->
<!--                         camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;-->
<!--                         created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;-->
<!--                         focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;-->
<!--                         shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;-->
<!--                         orientation&quot;:&quot;0&quot;}" data-image-title="panda" data-image-description=""-->
<!--                         data-medium-file="http://tworkerph.com/wp-content/uploads/2018/09/banner-003.jpg?fit=120%2C120"-->
<!--                         data-large-file="http://tworkerph.com/wp-content/uploads/2018/09/banner-003.jpg?fit=120%2C120"-->
<!--                         data-lazy-loaded="1" srcset="http://tworkerph.com/wp-content/uploads/2018/09/banner-003.jpg?w=120 120w,-->
<!--                         http://tworkerph.com/wp-content/uploads/2018/09/banner-003.jpg?resize=100%2C100 100w" sizes="(max-width: 120px) 100vw, 120px"-->
<!--                         style="display:block; margin:auto;">-->
<!---->
<!---->
<!--                </div>-->
<!---->
<!--                <div class="col-md-2" style="margin: 0 auto;">-->
<!---->
<!--                    <img width="120" height="50" src="http://tworkerph.com/wp-content/uploads/2018/09/banner-003.jpg"-->
<!--                         class="custom-logo jetpack-lazy-image--handled" alt="菲熊論壇" itemprop="logo"-->
<!--                         data-attachment-id="1329" data-permalink="http://tworkerph.com/panda-2/"-->
<!--                         data-orig-file="http://tworkerph.com/wp-content/uploads/2018/09/banner-003.jpg?fit=120%2C120"-->
<!--                         data-orig-size="120,120" data-comments-opened="1"-->
<!--                         data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;-->
<!--                         camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;-->
<!--                         created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;-->
<!--                         focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;-->
<!--                         shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;-->
<!--                         orientation&quot;:&quot;0&quot;}" data-image-title="panda" data-image-description=""-->
<!--                         data-medium-file="http://tworkerph.com/wp-content/uploads/2018/09/banner-003.jpg?fit=120%2C120"-->
<!--                         data-large-file="http://tworkerph.com/wp-content/uploads/2018/09/banner-003.jpg?fit=120%2C120"-->
<!--                         data-lazy-loaded="1" srcset="http://tworkerph.com/wp-content/uploads/2018/09/banner-003.jpg?w=120 120w,-->
<!--                         http://tworkerph.com/wp-content/uploads/2018/09/banner-003.jpg?resize=100%2C100 100w" sizes="(max-width: 120px) 100vw, 120px"-->
<!--                         style="display:block; margin:auto;">-->
<!---->
<!---->
<!--                </div>-->
<!---->
<!--                <div class="col-md-2" style="margin: 0 auto;">-->
<!---->
<!--                    <img width="120" height="50" src="http://tworkerph.com/wp-content/uploads/2018/09/banner-003.jpg"-->
<!--                         class="custom-logo jetpack-lazy-image--handled" alt="菲熊論壇" itemprop="logo"-->
<!--                         data-attachment-id="1329" data-permalink="http://tworkerph.com/panda-2/"-->
<!--                         data-orig-file="http://tworkerph.com/wp-content/uploads/2018/09/banner-003.jpg?fit=120%2C120"-->
<!--                         data-orig-size="120,120" data-comments-opened="1"-->
<!--                         data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;-->
<!--                         camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;-->
<!--                         created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;-->
<!--                         focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;-->
<!--                         shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;-->
<!--                         orientation&quot;:&quot;0&quot;}" data-image-title="panda" data-image-description=""-->
<!--                         data-medium-file="http://tworkerph.com/wp-content/uploads/2018/09/banner-003.jpg?fit=120%2C120"-->
<!--                         data-large-file="http://tworkerph.com/wp-content/uploads/2018/09/banner-003.jpg?fit=120%2C120"-->
<!--                         data-lazy-loaded="1" srcset="http://tworkerph.com/wp-content/uploads/2018/09/banner-003.jpg?w=120 120w,-->
<!--                         http://tworkerph.com/wp-content/uploads/2018/09/banner-003.jpg?resize=100%2C100 100w" sizes="(max-width: 120px) 100vw, 120px"-->
<!--                         style="display:block; margin:auto;">-->
<!---->
<!---->
<!--                </div>-->
<!---->
<!--                <div class="col-md-2" style="margin: 0 auto;">-->
<!---->
<!--                    <img width="120" height="50" src="http://tworkerph.com/wp-content/uploads/2018/09/banner-003.jpg"-->
<!--                         class="custom-logo jetpack-lazy-image--handled" alt="菲熊論壇" itemprop="logo"-->
<!--                         data-attachment-id="1329" data-permalink="http://tworkerph.com/panda-2/"-->
<!--                         data-orig-file="http://tworkerph.com/wp-content/uploads/2018/09/banner-003.jpg?fit=120%2C120"-->
<!--                         data-orig-size="120,120" data-comments-opened="1"-->
<!--                         data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;-->
<!--                         camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;-->
<!--                         created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;-->
<!--                         focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;-->
<!--                         shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;-->
<!--                         orientation&quot;:&quot;0&quot;}" data-image-title="panda" data-image-description=""-->
<!--                         data-medium-file="http://tworkerph.com/wp-content/uploads/2018/09/banner-003.jpg?fit=120%2C120"-->
<!--                         data-large-file="http://tworkerph.com/wp-content/uploads/2018/09/banner-003.jpg?fit=120%2C120"-->
<!--                         data-lazy-loaded="1" srcset="http://tworkerph.com/wp-content/uploads/2018/09/banner-003.jpg?w=120 120w,-->
<!--                         http://tworkerph.com/wp-content/uploads/2018/09/banner-003.jpg?resize=100%2C100 100w" sizes="(max-width: 120px) 100vw, 120px"-->
<!--                         style="display:block; margin:auto;">-->
<!---->
<!---->
<!--                </div>-->
<!---->
<!--                <div class="col-md-2" style="margin: 0 auto;">-->
<!---->
<!--                    <img width="120" height="50" src="http://tworkerph.com/wp-content/uploads/2018/09/banner-003.jpg"-->
<!--                         class="custom-logo jetpack-lazy-image--handled" alt="菲熊論壇" itemprop="logo"-->
<!--                         data-attachment-id="1329" data-permalink="http://tworkerph.com/panda-2/"-->
<!--                         data-orig-file="http://tworkerph.com/wp-content/uploads/2018/09/banner-003.jpg?fit=120%2C120"-->
<!--                         data-orig-size="120,120" data-comments-opened="1"-->
<!--                         data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;-->
<!--                         camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;-->
<!--                         created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;-->
<!--                         focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;-->
<!--                         shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;-->
<!--                         orientation&quot;:&quot;0&quot;}" data-image-title="panda" data-image-description=""-->
<!--                         data-medium-file="http://tworkerph.com/wp-content/uploads/2018/09/banner-003.jpg?fit=120%2C120"-->
<!--                         data-large-file="http://tworkerph.com/wp-content/uploads/2018/09/banner-003.jpg?fit=120%2C120"-->
<!--                         data-lazy-loaded="1" srcset="http://tworkerph.com/wp-content/uploads/2018/09/banner-003.jpg?w=120 120w,-->
<!--                         http://tworkerph.com/wp-content/uploads/2018/09/banner-003.jpg?resize=100%2C100 100w" sizes="(max-width: 120px) 100vw, 120px"-->
<!--                         style="display:block; margin:auto;">-->
<!---->
<!---->
<!--                </div>-->
<!---->
<!---->
<!--            </div>-->
<!--        </div>-->




    </div>
    <nav id="site-navigation" class="main-navigation">
        <div class="container">
            <div class="row">
                <div class="kol-12">
                    <div class="navigation-container">


                        <div class="cart-search">

                            <span class="af-search-click icon-search">
                                    <i class="fa fa-search"></i>
                            </span>
                        </div>


                        <span class="toggle-menu" aria-controls="primary-menu" aria-expanded="false">
                                <span class="screen-reader-text"><?php esc_html_e('Primary Menu', 'covernews'); ?></span>
                                 <i class="ham"></i>
                        </span>
                        <span class="af-mobile-site-title-wrap">
                            <?php the_custom_logo(); ?>
                            <p class="site-title font-family-1">
                                <a href="<?php echo esc_url(home_url('/')); ?>"
                                   rel="home"><?php bloginfo('name'); ?></a>
                            </p>
                        </span>
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'aft-primary-nav',
                            'menu_id' => 'primary-menu',
                            'container' => 'div',
                            'container_class' => 'menu main-menu'
                        ));
                        ?>


                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<div id="af-search-wrap">
    <div class="af-search-box table-block">
        <div class="table-block-child v-center text-center">
            <?php get_search_form(); ?>
        </div>
    </div>
    <div class="af-search-close af-search-click">
        <span></span>
        <span></span>
    </div>
</div>

<?php do_action('covernews_action_front_page_main_section');
