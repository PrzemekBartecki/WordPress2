<?php get_header(); ?>
<section class="container">
	test test test test pisany na stronei php
		<?php if ( have_posts() ) : while ( have_posts() ) :    the_post(); ?>
		  <!-- post -->
			<?php the_content();?>
	<div class="videoWrapper">
		<iframe width="640" height="480" src="https://www.youtube.com/embed/TA6ykF-WVc4?rel=0&autoplay=1" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
	</div>
		<?php endwhile; ?>
		  <!-- post navigation -->
		<?php else: ?>
		  <!-- no posts found -->
		<?php endif; ?>



</section>
<?php get_footer(); ?>


