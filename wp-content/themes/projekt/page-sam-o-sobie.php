<?php get_header(); ?>

<article class="container about">
	<?php if ( have_posts() ) : while ( have_posts() ) :    the_post(); ?>
		<!-- post -->
		<?php the_post_thumbnail();?>
		<?php the_content();?>
		<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="standard" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
	<?php endwhile; ?>
		<!-- post navigation -->
	<?php else: ?>

		<!-- no posts found -->
	<?php endif; ?>

<!--	<div class="videoWrapper">-->
<!---->
<!--		<iframe  src="https://www.youtube.com/embed/aSuODuxT4V0" frameborder="0" allowfullscreen></iframe>-->
<!--	</div>-->



</article>
<?php get_footer(); ?>


