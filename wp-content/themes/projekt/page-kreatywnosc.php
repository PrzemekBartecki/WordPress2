<?php get_header(); ?>

<section class="container">

	<section id="kreoMenu" >
		<div class="menuKreatywnosc">
			<a href="#"> <i class="fa fa-home " style="font-size:24px;" aria-hidden="true"></i>
			</a>
			<a href="#wstep"> Wstęp </a>
			<a href="#zasady"> Q kreatywnosci </a>
			<a href="#etapy"> Etapy procesu twórczego </a>
		</div>
	</section>
	<div class="space"></div>
	<!--	***************************************************-->
	<!--	================ pętla WP =========================-->
	<!--	***************************************************-->
	<div class="wpisKreatywnosc">
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

	<section class="sizeBlock" id="wstep">
		<p>Tekst wprowadzajcy do rkeatynwsoci</p>
		<article class="readTxt">
			<p>
				Paul Johnson w jednej ze swoich książek pisze, Skoro wszyscy jesteśmy obrazem Boga, każdy z nas ma
				cechy twórcze i cały problem polega na tym, jak je wydobyć. Dla osób które nie wierzą w istnieje
				istoty wyższej mam dobre wieści, moja praktyka ale też i współczesne badania pokazują,
				że kreatywności , podobnie jak każdej umiejętności biznesowej, można się nauczyć.
			</p>
			<p>
				Tak, dobrze rozumiesz. Nie musisz kończyć studiów związanych z twórczością czy kreatywnością( tak, są takie ),
				nie musisz też czytać opasłych książek związanych z tym tematem, wybitność i ponadprzeciętność też nie
				determinuje by być osobą kreatywną. Po prostu musisz ćwiczyć, ćwiczyć i jeszcze raz ćwiczyć.
			</p>
			<p>
				Krzysztof Szmidt, jedno z bardziej uznany nazwisk w temacie twórczości w Polsce, pisze tak, Kreatywność
				to zdolność człowieka do w miarę częstego generowania nowych i wartościowych wytworów
				(rzeczy, idei, metod, itd.). W tym samy dziele znajdziemy również wiele innych definicji kreatywności
				i rozważań na jej temat związanych z twórczością.
			</p>
			<p>
				Chciałbym tu jednak zwrócić uwagę na jeszcze jedną bardzo podobną definicję. Kreatywność to nie tylko
				wymyślanie, lecz wymyślanie nowego i cennego w skali indywidualnej lub powszechnej. Działalność
				polegająca na wymyślaniu zła żadną miarą nie zasługuje na to miano.
			</p>
			<p>
				Powyższa definicja zwraca uwagę, że rzeczy, idee, metody które mają charakter pejoratywny nigdy nie będą
				uznane za przejaw kreatywności, co jeszcze bardziej podkreśla element wartości jako części skandowej
				kreatywności. Jest w niej też bardzo ważny element, który może mieć wpływ na rozwój kreatywności
				zwłaszcza u młodych osób.
			</p>
			<p>
				W skali indywidualnej lub powszechnej. Dotyczy to zwłaszcza osób, które pierwszy raz mają styczność
				z treningiem kreatywności lub ćwiczeniem rozwijającym ją. Pomysły lub rozwiązania w skali jednostki
				mogą być nowe i wartościowe a więc kreatywne. W powszechnej skali mogą być jednak tylko wartościowe
				ale nie nowe. Ważne jest tu odpowiednie pokierowanie grupy, lub w przypadku jednostki, odpowiedź zwrotna.
				Im młodsza osoba, tym bardziej należy zakładać, że dany pomysł czy rozwiązanie jest dla niej nowe.
				Składa się na to, wiedza i doświadczenie. W przypadku dzieci, nie do końca się to sprawdza.
				Ich umysły często są bardzo płodne i pozbawione ograniczeń.
			</p>
			<p>
				Nie trzeba mieć przygotowania teoretycznego by móc być osobą kreatywną. Po prostu praktyka czyni mistrzem.
				Więc po co jest teoria ? Teoria uświadamia praktykę. Rozumiesz czemu coś robisz, tak a nie inaczej.
				Wiedząc jak coś działa, możesz to modyfikować i udoskonalać. Dzięki teorii nie „odkrywasz”
				czegoś co dawno zostało odkryte.
			</p>
			<p>
				Czy po przeczytaniu tej publikacji i wykonaniu ćwiczeń w niej zawartych lub też biorąc udział w pełnym
				warsztacie z tematyki kreatywności, staniesz się osobą, którą dokona epokowych zmian w świecie ?
				Odpowiedź brzmi NIE. Jednak od czegoś trzeba zacząć. Dzieło to jak i wszelkiego rodzaju otwarte
				warsztaty z tej tematyki rozwijają tzw. twórczość potencjalną.
			</p>
			<p>
				Polega na uruchomieniu procesów psychicznych (zwłaszcza poznawczych) oraz wytwarza zachowania, które przypominają procesy i zachowania obserwowane w działalności wybitnych artystów lub wynalazców, jednak nie prowadzą do powstania liczących dzieł.
				Mając wiedzę z pewnego zagadnienia możemy wspomniany potencjał wykorzystać, wówczas mamy jego realne zastosowanie. Porównałbym to do eksperymentu ze szkoły podstawowej z kryształkami soli. Sól rozpuszczona w wodzie to nasza potencjalna twórczość, która w zetknięciu z realnym problemem i naszą wiedzą z danego zakresu (nitki zawieszone w słoiku) krystalizuje się. Im ważniejszy problem, im bardziej przełomowe wytwory, zmiany płynące z niego, wówczas możemy mówić o twórczości dojrzałej i wybitnej.

			</p>
		</article>
	</section>

	<section class="sizeBlock" id="zasady">

		<h2>A tu bedzie o zasadach</h2>
	</section>

	<section class="sizeBlock" id="etapy">
		<h2>Etapy procesu twórczego</h2>
	</section>

</section>
<?php get_footer(); ?>


