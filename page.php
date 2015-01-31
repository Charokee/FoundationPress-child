<?php get_header(); ?>

<section class="container main-content-area__section-wrapper-background" role="document">
    <?php do_action('foundationPress_after_header'); ?>

    <div class="row">
        <div class="small-12 columns main-content-area__section-background detail-page--full-height" role="main">

            <?php do_action('foundationPress_before_content'); ?>

            <?php while (have_posts()) : the_post(); ?>
                <?php do_action('foundationPress_page_before_entry_content'); ?>
                <div class="entry-content">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                </div>
            <?php endwhile; ?>

            <?php do_action('foundationPress_after_content'); ?>

        </div>
    </div>
    <?php get_footer('detailpage'); ?>
