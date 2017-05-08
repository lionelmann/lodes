<?php get_header(); ?>

<?php // Loop starts
    if(have_posts()): while(have_posts()): the_post(); ?>

<?php // Get meta and assign to variables
    //$thumbnail  = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'banner' ); 
    $bio                = wpautop(get_post_meta($post->ID,'_staff_bio',true));
    $staff_image_id     = get_post_meta($post->ID,'_staff_image', true);
    $staff_image_url    = wp_get_attachment_image_src($staff_image_id,'banner', true);  
    $job_title          = get_post_meta($post->ID,'_staff_title',true);?>

<?php // If there is a featured image display it. Otherwise don't.
    if($staff_image_id) : ?>
    <section role="hero" class="center" style="background-image: url(<?php echo $staff_image_url[0];?>);">
        <header>
            <h2 class="headline reverse--text text__shadow animated fadeInDown"><?php echo the_title(); ?></h2>
            <h5 class="subheadline reverse--text text__shadow animated fadeInDown"><?php echo $job_title; ?></h5>
        </header>
    </section>
<?php endif ?>

<main>
    <article class="center">
        
        <?php echo $bio; ?>
    </article>
</main>

<?php // Loop ends
    endwhile; endif;  ?>

<?php get_footer(); ?>