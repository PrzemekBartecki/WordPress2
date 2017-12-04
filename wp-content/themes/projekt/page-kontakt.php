<?php get_header(); ?>


<div class="kontakt">

<?php if ( have_posts() ) : while ( have_posts() ) :    the_post(); ?>
	<!-- post -->
	<?php the_content(); ?>
	<div class="g-recaptcha" data-sitekey="6LcFoDsUAAAAALB_OJtH0m336t_-Az6YH_WlLIau"></div>
<?php endwhile; ?>
	<!-- post navigation -->
<?php else: ?>

	<!-- no posts found -->
<?php endif; ?>

</div>
<?php get_footer(); ?>


