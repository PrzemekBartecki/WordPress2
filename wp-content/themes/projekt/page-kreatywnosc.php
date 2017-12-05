<?php get_header(); ?>

<section class="container">

	<section id="kreoMenu" >
		<div class="menuKreatywnosc">
			<a href="#"> Up </a>
			<a href="#wstep"> Wstęp </a>
			<a href="#zasady"> Q kreatywnosci </a>
			<a href="#etapy"> Etapy procesu twórczego </a>
		</div>
	</section>
	<div class="space"></div>
	<!--	***************************************************-->
	<!--	================ pętla WP =========================-->
	<!--	***************************************************-->
	<div class="about">
		<?php if ( have_posts() ) : while ( have_posts() ) :    the_post(); ?>
			<!-- post -->
			<?php the_post_thumbnail();?>
			<?php the_content();?>

		<?php endwhile; ?>
			<!-- post navigation -->
		<?php else: ?>

			<!-- no posts found -->
		<?php endif; ?>
	</div>

	<section class="sizeContent" id="wstep">
		<p>Tekst wprowadzajcy do rkeatynwsoci</p>


	</section>
	<section class="sizeContent" id="zasady">

		<h2>A tu bedzie o zasadach</h2>
	</section>

	<section class="sizeContent" id="etapy">
		<h2>Etapy procesu twórczego</h2>
	</section>


</section>
<?php get_footer(); ?>


