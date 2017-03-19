<?php get_header(); ?>

<?php // Loop starts
$args = array(
    'post_type' => 'home_setup',
    );

query_posts($args);

if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php // Get meta values and assign to variables
    $headline       = get_post_meta($post->ID, '_banner_headline', true);
    $banner_id      = get_post_meta($post->ID, '_banner_image', true);
    $banner_url     = wp_get_attachment_image_src($banner_id,'banner', true);
    $banner_excerpt = get_post_meta($post->ID, '_banner_text', true);
    $content        = wpautop(get_post_meta($post->ID, '_content_content', true));
    $cta_label      = get_post_meta($post->ID, '_action_button', true);
    $cta_url       	= get_post_meta($post->ID, '_action_url', true);
    $testimonial    = get_post_meta($post->ID, '_testimonial', true);
?>

<section role="hero" style="background-image: url(<?php echo $banner_url[0]; ?>);">
    <header>
        <h2 class="headline reverse--text text__shadow animated fadeInDown"><?php echo $headline; ?></h2>
        <?php if($banner_excerpt) : ?>
            <p class="reverse--text"><?php echo $banner_excerpt; ?></p>
        <?php endif ?> 
        <?php if($cta_label) : ?>
            <a href="<?php echo $cta_url ?>" class="ghost ghost__text"><?php echo $cta_label ?></a>
        <?php endif ?> 
    </header>
</section>

<main>
    <article class="center">
        <?php echo $content; ?>
    </article>
    <article class="center">
    <?php if($testimonial) :
            shuffle($testimonial);
            $i = 0;
            foreach($testimonial as $testimonials) {
            if($i==1) break;
            $s_testimonial  = $testimonials['_text']; ?> 
            <blockquote style="text-align: left;"><p style="font-size: 1.3em;"><?php echo $s_testimonial; ?></p></blockquote> 
            <?php $i++; ?>
        <?php } endif ?>
</article>
</main>

<?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>