<?php get_header(); ?>
<section class="container">
	test test test test pisany na stronei php
		<?php if ( have_posts() ) : while ( have_posts() ) :    the_post(); ?>
		  <!-- post -->
			<?php the_content();?>
		<?php endwhile; ?>
		  <!-- post navigation -->
		<?php else: ?>
		  <!-- no posts found -->
		<?php endif; ?>



</section>
<?php get_footer(); ?>


