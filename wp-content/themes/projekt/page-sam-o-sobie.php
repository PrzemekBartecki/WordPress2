<?php get_header(); ?>

<article class="container">
	<div class="about">
	<?php if ( have_posts() ) : while ( have_posts() ) :    the_post(); ?>
		<!-- post -->
		<?php the_post_thumbnail();?>
		<p><?php the_content();?></p>
		<div class="fb-like" data-href="http://165.227.148.90/sam-o-sobie/" data-layout="button" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
	<?php endwhile; ?>
		<!-- post navigation -->
	<?php else: ?>

		<!-- no posts found -->
	<?php endif; ?>
	</div>
</article>
<?php get_footer(); ?>


