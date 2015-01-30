<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?php
            if (is_category()) {
                echo 'Category Archive for &quot;';
                single_cat_title();
                echo '&quot; | ';
                bloginfo('name');
            } elseif (is_tag()) {
                echo 'Tag Archive for &quot;';
                single_tag_title();
                echo '&quot; | ';
                bloginfo('name');
            } elseif (is_archive()) {
                wp_title('');
                echo ' Archive | ';
                bloginfo('name');
            } elseif (is_search()) {
                echo 'Search for &quot;' . esc_html($s) . '&quot; | ';
                bloginfo('name');
            } elseif (is_home() || is_front_page()) {
                bloginfo('name');
                echo ' | ';
                bloginfo('description');
            } elseif (is_404()) {
                echo 'Error 404 Not Found | ';
                bloginfo('name');
            } elseif (is_single()) {
                wp_title('');
            } else {
                echo wp_title(' | ', 'false', 'right');
                bloginfo('name');
            }
            ?></title>

        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/app.css" />

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <?php do_action('foundationPress_after_body'); ?>

        <?php do_action('foundationPress_layout_start'); ?>

        <header class="contain-to-grid">
            <div class="row header__background">
                <div class="row show-for-medium-up" id="logo">
                    <div class="small-12 small-centered columns text-center">
                        <a href="<?php echo home_url(); ?>">
                            <img src="/wp-content/themes/sinnlicht-yoga/assets/img/logo/sinnlicht_logo.png" class="header__logo" width="400" height="106" alt="Sinnlicht Yoga & K&ouml;rperarbeit" />
                        </a>
                    </div>
                </div>

                <div class="show-for-small-only">
                    <nav class="top-bar" data-topbar role="navigation">
                        <ul class="title-area">
                            <li class="name">
                                <h1><a href="#">Sinnlicht Yoga</a></h1>
                            </li>
                            <li class="toggle-topbar menu-icon"><a href="#">Men&uuml;</a></li>
                        </ul>
                        <section class="top-bar-section">                           
                            <?php foundationPress_top_bar_l(); ?>
                        </section>
                    </nav>
                </div>

                <div class="show-for-medium-up">
                    <nav class="top-bar" data-topbar role="navigation">
                        <section class="top-bar-section">
                            <?php foundationPress_top_bar_l(); ?>
                        </section>
                        <a href="https://www.facebook.com/Sinnlicht.Yogazentrum" target="_blank">
                            <img src="/wp-content/themes/sinnlicht-yoga/assets/img/social/facebook.png" class="right header__socialmedia" width="30" height="30" alt="Facebook" />
                        </a>
                        <a href="http://www.yogatrail.com/studio/sinnlicht-yoga-75227" target="_blank">
                            <img src="/wp-content/themes/sinnlicht-yoga/assets/img/social/yogatrail.png" class="right header__socialmedia" width="30" height="30" alt="Yogatrail" />
                        </a>
                    </nav>
                </div>

            </div>
        </header>

        <section class="container" role="document">
            <?php do_action('foundationPress_after_header'); ?>