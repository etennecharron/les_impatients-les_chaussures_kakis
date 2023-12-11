<?php 
/**
 * 	Template Name: Hub de nouvelles
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
		

        <section class="hubNouvelles">
            <div class="hubNouvelles__wrapup">
                <select class="menuDeroulantOrdre">
                    <option value="recent">Plus récent</option>
                    <option value="anciens">Plus anciens</option>
                  </select>
                <div class="hubNouvelles__wrapup__cardWrapup">

                    <div class="card">
                        <img src="assets/images/img_carte_nouvelles_01.png" class="card-img-top"
                            alt="image de la nouvelle 1">
                        <div class="card-body">
                            <h4 class="card-title">360 000 $ POUR LA 24E ÉDITION</h4>
                            <button>En savoir plus</button>
                        </div>
                    </div>

                    <div class="card">
                        <img src="assets/images/img_carte_nouvelles_01.png" class="card-img-top"
                            alt="image de la nouvelle 1">
                        <div class="card-body">
                            <h4 class="card-title">360 000 $ POUR LA 24E ÉDITION</h4>
                            <button>En savoir plus</button>
                        </div>
                    </div>

                    <div class="card">
                        <img src="assets/images/img_carte_nouvelles_01.png" class="card-img-top"
                            alt="image de la nouvelle 1">
                        <div class="card-body">
                            <h4 class="card-title">360 000 $ POUR LA 24E ÉDITION</h4>
                            <button>En savoir plus</button>
                        </div>
                    </div>

                    <div class="card">
                        <img src="assets/images/img_carte_nouvelles_01.png" class="card-img-top"
                            alt="image de la nouvelle 1">
                        <div class="card-body">
                            <h4 class="card-title">360 000 $ POUR LA 24E ÉDITION</h4>
                            <button>En savoir plus</button>
                        </div>
                    </div>

                    <div class="card">
                        <img src="assets/images/img_carte_nouvelles_01.png" class="card-img-top"
                            alt="image de la nouvelle 1">
                        <div class="card-body">
                            <h4 class="card-title">360 000 $ POUR LA 24E ÉDITION</h4>
                            <button>En savoir plus</button>
                        </div>
                    </div>

                    <div class="card">
                        <img src="assets/images/img_carte_nouvelles_01.png" class="card-img-top"
                            alt="image de la nouvelle 1">
                        <div class="card-body">
                            <h4 class="card-title">360 000 $ POUR LA 24E ÉDITION</h4>
                            <button>En savoir plus</button>
                        </div>
                    </div>

                </div>

                <button class="btnPlusNouvelle">Voir plus de nouvelles</button>
            </div>
        </section>



<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>