<?php get_header(); ?>

<?php // Loop starts
	if(have_posts()): while(have_posts()): the_post(); ?>

<?php // Get meta and assign to variables
    $thumbnail 	= wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'banner' ); ?>

<?php // If there is a featured image display it. Otherwise don't.
	if($thumbnail) : ?>
	<section role="hero" class="center" style="background-image: url(<?php echo $thumbnail[0]; ?>);">
        <header>
            <h2 class="headline reverse--text text__shadow animated fadeInDown"><?php echo the_title(); ?></h2>
        </header>
    </section>
<?php endif ?>

<main>
  	<article class="center">
        <h3><?php echo the_title(); ?></h3>
        <?php the_content(); ?>
  	</article>
</main>

<?php // Loop ends
	endwhile; endif;  ?>

<?php get_footer(); ?>