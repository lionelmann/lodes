<?php 
/**
* Template Name: Staff
* @author Lionel Mann
* Dependency: custom-post-staff.php
* This template grabs all the posts from the
* staff custom post type. 
*/
get_header();?>

<?php // Get meta and assign to variables
    $thumbnail  = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'banner' ); ?>

<section role="hero" class="center" style="background-image: url(<?php echo $thumbnail[0]; ?>);">
    <header>
        <h2 class="headline reverse--text text__shadow animated fadeInDown"><?php the_title(); ?></h2>
    </header>
</section>

<main>
<article class="center">
    <?php // Loop starts
        if(have_posts()): while(have_posts()): the_post(); ?>
    <?php the_content(); ?>
    <?php // Loop ends
            endwhile; endif; ?>
</article>

<?php
    $args = array(
        'post_type' => 'staff',
        'posts_per_page' =>20,
        'orderby' => 'title', 
        'order' => 'ASC'
); 
$loop = new WP_Query($args); ?>

<?php // Loop starts
    if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); 
    $job_title          = get_post_meta($post->ID,'_staff_title',true);
    $email              = get_post_meta($post->ID,'_staff_email',true);
    $direct             = get_post_meta($post->ID,'_staff_phone',true);
    $extension          = get_post_meta($post->ID,'_staff_extension',true);
    $bio                = wpautop(get_post_meta($post->ID,'_staff_bio',true));
    $staff_image_id     = get_post_meta($post->ID,'_staff_image', true);
    $staff_image_url    = wp_get_attachment_image_src($staff_image_id,'medium', true); ?>

<section class="wide center staff">

    <div class="columns-2-offset">
        <ul>
            <?php if ($staff_image_id) : ?>
                <li><img class="avatar" src="<?php echo $staff_image_url[0];?>"></li>
            <?php endif ?>
            <?php if ($job_title): 
                echo '<li>' . $job_title . '</li>';
            endif ?>
            <?php if ($email): 
                echo '<li>' . $email . '</li>';
            endif ?>
            <?php if ($direct): 
                echo '<li>' . $direct . '</li>';
            endif ?>
        </ul>
    </div>
    <div class="columns-2-offset">
        <ul>
        <li><h4><?php the_title(); ?></h4></li>
            <?php if ($bio): 
                echo '<li>' . $bio . '</li>';
            endif ?>
        </ul>
    </div>
 </section>

    <?php // Loop ends
        endwhile; endif; ?>

</main>

<?php get_footer(); ?>