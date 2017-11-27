<?php get_header(); ?>

	<div id="mainImg">
		<?php
		$mainPage = new WP_Query([
				'post_type' => 'post',
				'category_name' => 'cytaty',
		]);
		?>


		<?php if ( $mainPage->have_posts() ) : while ( $mainPage->have_posts() ) :    $mainPage->the_post(); ?>
		  <!-- post -->
			<?php the_content(); ?>
			<?php wp_reset_postdata(); ?>
		<?php endwhile; ?>
		  <!-- post navigation -->
		<?php else: ?>
		  <!-- no posts found -->
		<?php endif; ?>

	</div>
<section class="container">
	<article class="frontPage" >
		<?php
			$develop = new WP_Query([
				'post_type' => 'post',
				'posts_per_page' => 3,
				'category_name' => 'rozwoj-osobisty',
			]);
		?>


		<?php if ( $develop->have_posts() ) : while ( $develop->have_posts() ) :    $develop->the_post(); ?>
		 <!-- post -->

		<div >
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
</section>


<?php get_footer(); ?>

<!--<p>-->
<!--	We live in difficult times,<br>so the spark of humanity<br>is very important<br>in our action.-->
<!--</p>-->

