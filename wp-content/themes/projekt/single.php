<?php get_header(); ?>
<article class="container">
<?php if ( have_posts() ) : while ( have_posts() ) :    the_post(); ?>
	<!-- post -->
	<?php the_title();?>
	<?php the_content(); ?>

<?php endwhile; ?>
	<!-- post navigation -->
<?php else: ?>

	<!-- no posts found -->
<?php endif; ?>
</article>
<?php get_footer(); ?>


