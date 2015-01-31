</section>
<footer class="row main-content-area__section-background">
    <?php do_action('foundationPress_before_footer'); ?>
    <div class="small-12 columns">
        <?php get_template_part('parts/footer-menu'); ?>
    </div>
    <?php do_action('foundationPress_after_footer'); ?>
</footer>

<?php do_action('foundationPress_layout_end'); ?>
<?php wp_footer(); ?>
<?php do_action('foundationPress_before_closing_body'); ?>

</body>
</html>
