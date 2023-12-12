<?php 
/**
 * 	Template Name: À propos
 * 	Identique à page
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>
 <?php get_template_part( "partials/hero_generique"); ?>

		<?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?>
		<?php endif; ?>
		
		<main>

<!------------------------DÉBUT HERO GÉNÉRIQUE------------------------->
<section class="heroGenerique">
	<div class="heroGenerique__wrapup">
		<div class="heroGenerique__wrapup__titreWrapup">
			<div class="heroGenerique__wrapup__titreWrapup__filAriane">
				<p>Les impatients /</p>
				<p>&nbsp</p>
				<p class="heroGenerique__wrapup__titreWrapup__filAriane__actuel">
					À propos
				</p>
			</div>

			<div class="heroGenerique__wrapup__titreWrapup__titre">
				<h1>À propos</h1>
			</div>
		</div>
	</div>
</section>
<!-----------------------FIN HERO GÉNÉRIQUE------------------------->


<!------------------------DÉBUT MISSION------------------------->
<div class="sectionWrapup">
	<section class="mission">
		<div class="mission__wrapup">
			<h2>Mission</h2>
			<p>Les Impatients viennent en aide aux personnes ayant des problèmes de santé mentale par le biais
				de
				l’expression artistique en offrant des ateliers de création qui favorisent les échanges avec la
				communauté par la diffusion des réalisations produites en atelier.</p>
		</div>
	</section>
	<!------------------------FIN MISSION------------------------->

	<!------------------------DÉBUT VALEURS------------------------->
	<section class="valeur">
		<div class="valeur__wrapup">
			<h2>Valeur­</h2>
			<ul>
				<li>La liberté dans la création</li>
				<li>Le courage dans l’action</li>
				<li>La passion à travers l’art</li>
				<li>Le respect de la dignité des personnes</li>
			</ul>
		</div>
	</section>
	<!------------------------FIN VALEURS------------------------->

	<!------------------------DÉBUT ATELIER------------------------->
	<section class="atelier">
		<div class="atelier__wrapup">
			<h2>Atelier­</h2>
			<p>Notre organisme est à même de transmettre son expertise aux centres et aux groupes travaillant
				avec
				une clientèle en santé mentale. Plusieurs lieux d’ateliers ont été ouverts au Québec en
				collaboration avec des établissements du milieu de la santé et avec des lieux de diffusion
				impliqués
				dans leur communauté. Plusieurs ont suivi. Aujourd’hui, nous avons 21 points de service dans 13
				villes au Québec qui accueillent 900 personnes par semaine.</p>
			<button>Voir les ateliers</button>
		</div>
	</section>
	<!------------------------FIN ATELIER------------------------->

	<!------------------------DÉBUT COLLECTION------------------------->
	<section class="collection">
		<div class="collection__wrapup">
			<h2>collection­</h2>
			<p>
				Depuis le début de nos activités, nous avons conservé une grande partie des œuvres produites par
				nos participants et participantes, ce qui constitue aujourd’hui un patrimoine riche de 15 000
				œuvres d’art. Il s’agit là d’une collection d’une grande originalité, pionnière au Canada dans
				son champ de collectionnement.
			</p>
			<button>Voir la collection</button>
		</div>
	</section>
	<!------------------------ FIN COLLECTION------------------------->


	<!------------------------DÉBUT EVENEMENT>------------------------->
	<section class="evenements">
		<div class="evenements__wrapup">
			<h2>Evenements­</h2>
			<p>
				Depuis le début de nos activités, nous avons conservé une grande partie des œuvres produites par
				nos participants et participantes, ce qui constitue aujourd’hui un patrimoine riche de 15 000
				œuvres d’art. Il s’agit là d’une collection d’une grande originalité, pionnière au Canada dans
				son champ de collectionnement.
			</p>
			<button>Voir les évenements</button>
		</div>
	</section>
	<!------------------------ FIN EVENEMENT------------------------->



</div>

</main>



<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>