<?php get_header(); ?>
<section class="container">

	<article class="articlePage" >
		<?php if (have_posts() ) : while ( have_posts() ) :    the_post(); ?>
			<!-- post -->
			<div>
				<h2><?php the_title();?></h2>
				<?php
				if ( has_post_thumbnail() )
					the_post_thumbnail();
				else
					echo '<img class="thePostThum" src="' . trailingslashit( get_stylesheet_directory_uri() ) . 'img/body.jpg' . '" alt="" />';
				?>
				<p><?php the_excerpt();?></p>
				<a href="<?php the_permalink(); ?>">Czytaj więcej</a>
				<?php wp_reset_postdata(); ?>

			</div>
		<?php endwhile; ?>
			<!-- post navigation -->
		<?php else: ?>
			<!-- no posts found -->
		<?php endif; ?>
	</article>

		<div class="pagination">
			<?php post_pagination(); ?>
		</div>

</section>
<?php get_footer(); ?>


