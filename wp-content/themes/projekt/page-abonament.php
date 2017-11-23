<?php get_header(); ?>
<section class="container">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ofertphone.png?>"  alt="oferta_abonamentowa" >
	<article class="abonamentPage" >
	<?php
	$phone= new WP_Query([
		'post_type' => 'telefon',
		'tax_query' => array(
			array(
				'taxonomy' => 'oferta',
				'field'    => 'slug',
				'terms'    => 'abonament',
			),
		),
	]);
	?>
	<?php if ( $phone->have_posts() ) : while ( $phone->have_posts() ) :    $phone->the_post(); ?>
		<!-- post -->
	<div>
		<h2><?php the_title();?></h2>
		<?php
		if ( has_post_thumbnail() )
			the_post_thumbnail();
		else
			echo '<img class="thePostThum" src="' . trailingslashit( get_stylesheet_directory_uri() ) . 'img/fmmobile.jpg' . '" alt="" />';
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


