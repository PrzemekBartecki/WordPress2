<?php get_header(); ?>
<section class="container">
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ofertnet.png?>"  alt="oferta_abonamentowa" >
	<article class="abonamentPage" >
		<?php
		$net= new WP_Query([
			'post_type' => 'telefon',
			'tax_query' => array(
				array(
					'taxonomy' => 'oferta',
					'field'    => 'slug',
					'terms'    => 'internet',
				),
			),
		]);
		?>
		<?php if ( $net->have_posts() ) : while ( $net->have_posts() ) :    $net->the_post(); ?>
			<!-- post -->
			<div>
				<h2><?php the_title();?></h2>
				<?php
				if ( has_post_thumbnail() )
					the_post_thumbnail();
				else
					echo '<img class="thePostThum" src="' . trailingslashit( get_stylesheet_directory_uri() ) . 'img/net.jpg' . '" alt="" />';
				?>
				<a href="<?php the_permalink(); ?>">Poznaj szczegóły</a>
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


