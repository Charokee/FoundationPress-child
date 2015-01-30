<?php get_header(); ?>

<?php do_action('foundationPress_before_content'); ?>

<?php
$captionPageId = 31;
$slider_1_caption = get_post_meta($captionPageId, 'slider_1_caption', true);
$slider_2_caption = get_post_meta($captionPageId, 'slider_2_caption', true);
$slider_3_caption = get_post_meta($captionPageId, 'slider_3_caption', true);
$slider_4_caption = get_post_meta($captionPageId, 'slider_4_caption', true);
$slider_5_caption = get_post_meta($captionPageId, 'slider_5_caption', true);
?>

<div class="main-content-area__section-wrapper-background">
    <section class="row main-content-area__section-background">
        <div class="main-content-area__section-mood-image" style="margin-bottom: 0px;">
            <ul class="example-orbit" data-orbit data-options="slide_number: false;">
                <li>
                    <img src="/wp-content/themes/sinnlicht-yoga/assets/img/slider/slider_1.jpg" width="1000" height="365" alt="Sinnlicht Eingang" />                  
                    <?php
                    if (!empty($slider_1_caption)) {
                        echo '<div class="orbit-caption">' . $slider_1_caption . '</div>';                         
                    } else {
                        echo '';                    
                    }
                    ?>
                </li>
                <li class="active">
                    <img src="/wp-content/themes/sinnlicht-yoga/assets/img/slider/slider_2.jpg" width="1000" height="365" alt="Sinnlicht K&uuml;che" />
                    <?php
                    if (!empty($slider_2_caption)) {
                        echo '<div class="orbit-caption">' . $slider_2_caption . '</div>';                         
                    } else {
                        echo '';                    
                    }
                    ?>
                </li>
                <li>
                    <img src="/wp-content/themes/sinnlicht-yoga/assets/img/slider/slider_3.jpg" width="1000" height="365" alt="Sinnlicht St&uuml;hle" />
                    <?php
                    if (!empty($slider_3_caption)) {
                        echo '<div class="orbit-caption">' . $slider_3_caption . '</div>';                         
                    } else {
                        echo '';                    
                    }
                    ?>
                </li>
                <li class="active">
                    <img src="/wp-content/themes/sinnlicht-yoga/assets/img/slider/slider_4.jpg" width="1000" height="365" alt="Sinnlicht Yogi" />
                    <?php
                    if (!empty($slider_4_caption)) {
                        echo '<div class="orbit-caption">' . $slider_4_caption . '</div>';                         
                    } else {
                        echo '';                    
                    }
                    ?>
                </li>
                <li class="active">
                    <img src="/wp-content/themes/sinnlicht-yoga/assets/img/slider/slider_5.jpg" width="1000" height="365" alt="Sinnlicht Aufkleber" />
                    <?php
                    if (!empty($slider_5_caption)) {
                        echo '<div class="orbit-caption">' . $slider_5_caption . '</div>';                         
                    } else {
                        echo '';                    
                    }
                    ?>
                </li>
            </ul>
            <div class="main-content-area__section-mood-image-label">
                <span class="main-content-area__section-mood-image-font">&Uuml;ber uns</span>
            </div>
        </div>
        <div class="small-12 columns">
            <a href="#" name="ueberuns"></a>
            <?php
            $query = new WP_Query('pagename=ueber-uns');
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    the_content();
                }
            }
            wp_reset_postdata();
            ?>
        </div>
    </section>
</div>


<section class="row main-content-area__section-background">
    <div class="main-content-area__section-mood-image">
        <img src="/wp-content/themes/sinnlicht-yoga/assets/img/mood/sinnlicht_pinnwand.jpg" width="1000" height="365" alt="Sinnlicht Pinnwand" />
        <div class="main-content-area__section-mood-image-label">
            <span class="main-content-area__section-mood-image-font">Aktuelles</span>
        </div>
    </div>
    <div class="small-12 columns">
        <a href="#" name="aktuelles"></a>
        <?php
        $query = new WP_Query('pagename=aktuelles');
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                the_content();
            }
        }
        wp_reset_postdata();
        ?>
    </div>
</section>

<div class="main-content-area__section-wrapper-background">
    <section class="row main-content-area__section-background">
        <div class="main-content-area__section-mood-image">
            <img src="./wp-content/themes/sinnlicht-yoga/assets/img/mood/sinnlicht_kueche.jpg" width="1000" height="365" alt="Sinnlicht K&uuml;che" />
            <div class="main-content-area__section-mood-image-label">
                <span class="main-content-area__section-mood-image-font">Stundenplan</span>
            </div>
        </div>
        <div class="small-12 columns">
            <a href="#" name="stundenplan"></a>
            <?php echo do_shortcode("[tt_timetable event_category='grosser-raum' filter_style='tabs' filter_kind='event_category' filter_label='' time_format='H:i' hide_hours_column='1' show_end_hour='1' event_layout='3' box_bg_color='B61E23' box_hover_bg_color='801619' filter_color='B61E23' hide_empty='1' disable_event_url='1' row_height='50' id='bigRoom' font_custom='Open Sans' font_size='11']"); ?>
        </div>
        <div class="small-12 columns">
            <?php echo do_shortcode("[tt_timetable event_category='kleiner-raum' filter_style='tabs' filter_kind='event_category' filter_label='' time_format='H:i' hide_hours_column='1' show_end_hour='1' event_layout='3' box_bg_color='B61E23' box_hover_bg_color='801619' filter_color='B61E23' hide_empty='1' disable_event_url='1' row_height='50' id='smallRoom' font_custom='Open Sans' font_size='11']"); ?>
        </div>
    </section>
</div>

<section class="row main-content-area__section-background">
    <div class="main-content-area__section-mood-image">
        <img src="./wp-content/themes/sinnlicht-yoga/assets/img/mood/sinnlicht_stuehle.jpg" width="1000" height="365" alt="Sinnlicht St&uuml;hle" />
        <div class="main-content-area__section-mood-image-label">
            <span class="main-content-area__section-mood-image-font">Team</span>
        </div>
    </div>
    <div class="small-12 columns">
        <a href="#" name="team"></a>
        <h1>Yoga</h1>
        <?php echo build_tshowcase('none', '0', '0', 'yoga', 'active', 'grid', 'img-square,text-center,img-above,4-columns,retro-box-theme', 'photo,name', 'false', '', 'true'); ?>
    </div>
    <div class="small-12 columns">
        <h1>K&ouml;rperarbeit</h1>
        <?php echo build_tshowcase('none', '0', '0', 'koerperarbeit', 'active', 'grid', 'img-square,text-center,img-above,4-columns,retro-box-theme', 'photo,name', 'false', '', 'true'); ?>
    </div>
</section>

<div class="main-content-area__section-wrapper-background">
    <section class="row main-content-area__section-background">
        <div class="main-content-area__section-mood-image">
            <img src="./wp-content/themes/sinnlicht-yoga/assets/img/mood/sinnlicht_yogi.jpg" width="1000" height="365" alt="Sinnlicht Yogi" />
            <div class="main-content-area__section-mood-image-label">
                <span class="main-content-area__section-mood-image-font">Preise</span>
            </div>
        </div>
        <div class="small-12 columns">
            <a href="#" name="preise"></a>
            <?php
            $query = new WP_Query('pagename=preise');
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    the_content();
                }
            }
            wp_reset_postdata();
            ?>
        </div>
    </section>
</div>

<section class="row main-content-area__section-background">
    <div class="main-content-area__section-mood-image">
        <img src="./wp-content/themes/sinnlicht-yoga/assets/img/mood/sinnlicht_aufkleber.jpg" width="1000" height="365" alt="Sinnlicht Aufkleber" />
        <div class="main-content-area__section-mood-image-label">
            <span class="main-content-area__section-mood-image-font">Kontakt</span>
        </div>
    </div>
    <form>
        <div class="medium-6 columns">
            <a href="#" name="kontakt"></a>
            <label>Vorname:
                <input type="text" />
            </label>
        </div>
        <div class="medium-6 columns">
            <label>Nachname:
                <input type="text" />
            </label>
        </div>
        <div class="medium-12 columns">
            <label>E-Mail:
                <input type="text" />
            </label>
        </div>
        <div class="small-12 columns">
            <label>Nachricht:
                <textarea rows="7"></textarea>
            </label>
        </div>
        <div class="medium-12 columns">
            <label>Newsletter abonnieren:</label>
            <input id="newsletter" type="checkbox" checked="checked" />
            <label for="newsletter">Ja</label>
        </div>
        <div class="medium-12 columns">
            <input type="submit" value="Absenden" class="button" />
        </div>
        <div class="small-12 columns">
            <p>Sinnlicht Yogazentrum<br/>Stahlheimer Strasse 4<br/>10439 Berlin<br/>Am Humannplatz<br/>Telefon: +49 17 34 72 38 41<br/><br/>Anfahrt:<ul><li>S-/U-Bahnhof Schönhauser-Allee</li><li>Tram 12 (Station Humannplatz)</li><br/></p>
        </div>
</section>

<?php do_action('foundationPress_after_content'); ?>

<?php get_footer(); ?>