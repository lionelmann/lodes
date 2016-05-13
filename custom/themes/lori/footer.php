<footer>
	<div class="inner">
        <div class="columns-2">
            <h4>Address</h4>
            <?php if ( is_active_sidebar( 'address' ) ) : ?>
                <?php dynamic_sidebar( 'address' ); ?>
            <?php endif; ?>
        </div>
        <div class="columns-2">
            <h4>Contact</h4>
            <?php if ( is_active_sidebar( 'contact' ) ) : ?>
                <?php dynamic_sidebar( 'contact' ); ?>
            <?php endif; ?>
        </div>
    </div>
</footer>

<div id="map"></div>

<footer class="copyright reverse--text">
    <div class="inner">
        <small>&#169; Copyright | <a href="<?php bloginfo('url'); ?>/privacy-policy">Privacy Policy</a></small>
        <small>Made by Lionel Mann</a></small>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>