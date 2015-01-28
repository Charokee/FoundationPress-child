<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title><?php if ( is_category() ) {
			echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
		} elseif ( is_tag() ) {
			echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
		} elseif ( is_archive() ) {
			wp_title(''); echo ' Archive | '; bloginfo( 'name' );
		} elseif ( is_search() ) {
			echo 'Search for &quot;'.esc_html($s).'&quot; | '; bloginfo( 'name' );
		} elseif ( is_home() || is_front_page() ) {
			bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
		}  elseif ( is_404() ) {
			echo 'Error 404 Not Found | '; bloginfo( 'name' );
		} elseif ( is_single() ) {
			wp_title('');
		} else {
			echo wp_title( ' | ', 'false', 'right' ); bloginfo( 'name' );
		} ?></title>
		
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ; ?>/css/app.css" />

		<link rel="icon" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-144x144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-114x114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-72x72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-precomposed.png">
		
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action('foundationPress_after_body'); ?>
	
	<div class="off-canvas-wrap" data-offcanvas>
	<div class="inner-wrap">
	
        <?php do_action('foundationPress_layout_start'); ?>

        <header class="contain-to-grid fixed">
            <div class="row header__background">
                <div class="row" id="logo">
                    <div class="small-12 small-centered columns text-center">
                        <a href="<?php echo home_url(); ?>">
                            <img src="/wp-content/themes/sinnlicht-yoga/assets/img/logo/sinnlicht_logo.png" class="header__logo" width="400" height="106" alt="Sinnlicht Yoga & K&ouml;rperarbeit" />
                        </a>
                    </div>
                </div>
                <nav data-topbar="" class="top-bar">
                    <a target="_blank" href="https://www.facebook.com/Sinnlicht.Yogazentrum">
                        <img width="30" height="30" alt="Facebook" class="right header__socialmedia" src="/wp-content/themes/sinnlicht-yoga/assets/img/social/facebook.png">
                    </a>
                    <a target="_blank" href="http://www.yogatrail.com/studio/sinnlicht-yoga-75227">
                        <img width="30" height="30" alt="Yogatrail" class="right header__socialmedia" src="/wp-content/themes/sinnlicht-yoga/assets/img/social/yogatrail.png">
                    </a>
                    <section class="top-bar-section">
                        <ul class="top-bar-menu left" id="menu-hauptmenue">
                            <li class="divider"></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2408" id="menu-item-2408"><a href="<?php echo home_url(); ?>">&lt;&lt;&lt; Zur&uuml;ck</a></li>
			</ul>
                    </section>
                </nav>
            </div>          
        </header>
            
<section class="container main-content-area__section--offset" role="document">
	<?php do_action('foundationPress_after_header'); ?>

<div class="row main-content-area__section-background main-content-area__section--full-height">
	<div class="small-12 columns" role="main">

	<?php do_action('foundationPress_before_content'); ?>

	<?php while (have_posts()) : the_post(); ?>
            <header>
                    <h1 class="entry-title"><?php the_title(); ?></h1>
            </header>
            <?php do_action('foundationPress_page_before_entry_content'); ?>
            <div class="entry-content">
                    <?php the_content(); ?>
            </div>
	<?php endwhile;?>

	<?php do_action('foundationPress_after_content'); ?>

	</div>
</div>
<?php get_footer(); ?>
