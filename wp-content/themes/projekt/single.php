<?php get_header(); ?>
<section class="container ">
		<?php if ( have_posts() ) : while ( have_posts() ) :    the_post(); ?>
			<!-- post -->
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
			<div class="fb-like" data-href="<?php the_permalink() ?>" data-layout="standard" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>

			<section class="navPost">
				<div>
					<strong><?php previous_post_link( '<strong>%link</strong>');?></strong>
				</div>
				<div>
					<strong><?php next_post_link( '<strong>%link</strong>');?></strong>
				</div>

			</section>

		<?php endwhile; ?>
			<!-- post navigation -->
		<?php else: ?>

			<!-- no posts found -->
		<?php endif; ?>
</section>
<?php get_footer(); ?>


