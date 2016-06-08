<?php if (is_page( 'Contact' )) : ?>
    <div id="map"></div>
<?php endif; ?>

<footer>
    <div class="inner">
    <article class='center'>
        <div class="columns-2">
            <a href="http://www.brainfx.com/" target="_blank"><img src="<?php bloginfo('template_url' ); ?>/dist/images/brainseal_admin.png"></a>
        </div>
        <div class="columns-2">
            <a href="http://www.cogmed.com/" target="_blank"><img src="<?php bloginfo('template_url' ); ?>/dist/images/cogmed-shield.png"></a>
        </div>
        </article>
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