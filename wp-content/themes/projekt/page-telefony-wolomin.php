<?php get_header(); ?>

<article class="container" id="pageMobile">
<?php if ( have_posts() ) : while ( have_posts() ) :    the_post(); ?>
	<!-- post -->
	<article id="fmMobile">
	<?php the_post_thumbnail();?>
</article>
	<?php the_content();?>
	<div class="fb-page" data-href="https://www.facebook.com/telefony.wolomin/" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><blockquote cite="https://www.facebook.com/telefony.wolomin/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/telefony.wolomin/">Telefony.wolomin</a></blockquote></div>
<?php endwhile; ?>
		<!-- post navigation -->
<?php else: ?>

<?php endif; ?>
</article>
<?php get_footer(); ?>


