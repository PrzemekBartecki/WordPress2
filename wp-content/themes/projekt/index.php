<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) :    the_post(); ?>
  <!-- post -->
<?php endwhile; ?>
  <!-- post navigation -->
<?php else: ?>
	<p>
		PRZEPRASZAM ZA PROBLEM, JEŚLI TO WIDZISZ POINFORMUJ MNIE
			przemyslaw.bartekcki@gmail.com
	</p>
  <!-- no posts found -->
<?php endif; ?>

<?php get_footer(); ?>


