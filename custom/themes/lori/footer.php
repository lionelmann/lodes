<?php if (is_page( 'Contact' )) : ?>
    <div id="map"></div>
<?php endif; ?>

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
    
    
    <div class="footer__copyright">
        <div class="inner">
            <small>&#169; Copyright | <a href="<?php bloginfo('url'); ?>/privacy-policy">Privacy Policy</a></small>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>