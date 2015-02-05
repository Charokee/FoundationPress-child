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

        <script>

            var gaProperty = 'UA-59325692-1';
            var disableStr = 'ga-disable-' + gaProperty;
            if (document.cookie.indexOf(disableStr + '=true') > -1) {
                window[disableStr] = true;
            }
            function gaOptout() {
                document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
                window[disableStr] = true;
            }

        </script>

        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-59325692-1', 'auto');
            ga('set', 'anonymizeIp', true);
            ga('send', 'pageview');

        </script>

        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

        <?php wp_head(); ?>
    </head>
    <body onload="initializeGoogleMaps();"<?php body_class(); ?>>
        <?php do_action('foundationPress_after_body'); ?>

        <?php do_action('foundationPress_layout_start'); ?>

        <header class="contain-to-grid">
            <div class="row header__background">
                <div class="row show-for-medium-up" id="logo">
                    <div class="small-12 small-centered columns text-center">
                        <a href="<?php echo home_url(); ?>">
                            <img src="/wp-content/themes/sinnlicht-yoga/assets/img/logo/sinnlicht_logo_medium.png" class="header__logo" width="400" height="106" alt="Sinnlicht Yoga & K&ouml;rperarbeit" />
                        </a>
                    </div>
                </div>

                <div class="show-for-small-only">
                    <nav class="top-bar" data-topbar role="navigation">
                        <ul class="title-area">
                            <li class="name">
                                <h1><a href="<?php echo home_url(); ?>"><img src="/wp-content/themes/sinnlicht-yoga/assets/img/logo/sinnlicht_logo_small.png" width="151" height="40" alt="Sinnlicht Yoga & K&ouml;rperarbeit" /></a></h1>
                            </li>
                            <li class="toggle-topbar menu-icon"><a href="#"><span>Men&uuml;</span></a></li>
                        </ul>
                        <section class="top-bar-section">                           
                            <ul class="top-bar-menu left" id="menu-hauptmenu-medium">
                                <li class="divider"></li><li class="menu-item"><a href="<?php echo home_url(); ?>#ueberuns">&Uuml;ber uns</a></li>
                                <li class="divider"></li><li class="menu-item"><a href="<?php echo home_url(); ?>#aktuelles">Aktuelles</a></li>
                                <li class="divider"></li><li class="menu-item"><a href="<?php echo home_url(); ?>#stundenplan">Stundenplan</a></li>
                                <li class="divider"></li><li class="menu-item"><a href="<?php echo home_url(); ?>#team">Team</a></li>
                                <li class="divider"></li><li class="menu-item"><a href="<?php echo home_url(); ?>#preise">Preise</a></li>
                                <li class="divider"></li><li class="menu-item"><a href="<?php echo home_url(); ?>#kontakt">Kontakt</a></li>
                            </ul>
                        </section>
                    </nav>
                </div>

                <div class="show-for-medium-up">
                    <nav class="top-bar" data-topbar role="navigation">
                        <section class="top-bar-section">
                            <ul class="top-bar-menu left" id="menu-hauptmenu-small">
                                <li class="divider"></li><li class="menu-item"><a href="<?php echo home_url(); ?>#ueberuns">&Uuml;ber uns</a></li>
                                <li class="divider"></li><li class="menu-item"><a href="<?php echo home_url(); ?>#aktuelles">Aktuelles</a></li>
                                <li class="divider"></li><li class="menu-item"><a href="<?php echo home_url(); ?>#stundenplan">Stundenplan</a></li>
                                <li class="divider"></li><li class="menu-item"><a href="<?php echo home_url(); ?>#team">Team</a></li>
                                <li class="divider"></li><li class="menu-item"><a href="<?php echo home_url(); ?>#preise">Preise</a></li>
                                <li class="divider"></li><li class="menu-item"><a href="<?php echo home_url(); ?>#kontakt">Kontakt</a></li>
                            </ul>
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