</section>
<div class="main-content-area__section-wrapper-background">
    <footer class="row main-content-area__section-background">
        <?php do_action('foundationPress_before_footer'); ?>
        <div class="small-12 columns">
            <ul class="inline-list">
                <li>
                    <a href="<?php echo home_url() . '/raumvermietung'; ?>">Raumvermietung</a>
                </li>
                <li>
                    <a href="<?php echo home_url() . '/freunde'; ?>">Freunde</a>
                </li>
                <li>
                    <a href="<?php echo home_url() . '/impressum'; ?>">Impressum</a>
                </li>
                <li>
                    <a href="<?php echo home_url() . '/agb'; ?>">ABG</a>
                </li>
            </ul>
        </div>
        <?php dynamic_sidebar("footer-widgets"); ?>
            <?php do_action('foundationPress_after_footer'); ?>
    </footer>
</div>
<a class="exit-off-canvas"></a>

	<?php do_action('foundationPress_layout_end'); ?>
	</div>
</div>
<?php wp_footer(); ?>
<?php do_action('foundationPress_before_closing_body'); ?>
</body>
</html>
