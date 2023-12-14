<?php 
/**
 * 	Template Name: Histoire
 * 	Identique à page
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

		<?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?>
		<?php endif; ?>
		
		<section class="heroGenerique">
            <div class="heroGenerique__wrapup">
                <div class="heroGenerique__wrapup__titreWrapup">
                    <div class="heroGenerique__wrapup__titreWrapup__filAriane">
                        <p>Les impatients /</p>
                        <p>&nbsp</p>
                        <p class="heroGenerique__wrapup__titreWrapup__filAriane__actuel">
                            HISTORIQUE
                        </p>
                    </div>

                    <div class="heroGenerique__wrapup__titreWrapup__titre">
                        <h1 class="histoire__h1">HISTORIQUE</h1>
                        <div class="histoire__modules">
                            <div class="histoire__1992">
                                <h3>1992</h3>
                                <p>La Fondation des maladies mentales appuie la mise sur pied de la Fondation pour l’art
                                    thérapeutique et l’art brut au Québec, qui prendra plus tard le nom Les Impatients.
                                    L’organisme est fondé par Lorraine B. Palardy, Lina Dessureault, Dr Yves Lamontagne
                                    et Lyette Racicot. Un premier atelier est alors ouvert à Pointe-aux-Trembles.

                                    La naissance de l’organisme fait suite au succès d’un projet pilote d’atelier
                                    d’art-thérapie mené à l’Hôpital Louis-H. Lafontaine (maintenant l’Institut en santé
                                    mentale de Montréal) à partir de 1989. L’expérience est une initiative de la
                                    Fondation des maladies mentales de concert avec l’Association des galeries d’art
                                    contemporain (AGAC), présidée par Lorraine B. Palardy.</p>
                            </div>
                            <div class="histoire__1999">
                                <h3>1999</h3>
                                <p>La Fondation pour l’art thérapeutique et l’art brut au Québec choisit de se faire
                                    connaître sous l’appellation « Les Impatients ». Ce nom confirme que les personnes
                                    qui fréquentent leurs ateliers ne sont pas considérées comme des patient·es, mais
                                    comme des créateurs et créatrices impatient·es de guérir, de développer leur art et
                                    de retrouver un rôle dans la société.

                                    Après un départ modeste dans un sous-sol de Pointe-aux-Trembles, sans subventions et
                                    des projets plein la tête, l’organisme prend de l’envergure. Il offre désormais des
                                    ateliers au Monastère du Bon-Pasteur, lieu culturel au centre-ville de Montréal, y
                                    installe son centre administratif et y ouvre une galerie dédiée à la diffusion des
                                    œuvres produites dans ses ateliers. </p>

                            </div>
                            <div class="histoire__2009">
                                <h3>2009</h3>
                                <p>Une association est créé avec l’Institut universitaire en santé mentale Douglas.
                                    L’Institut fait appel au savoir-faire de l’organisme pour donner des ateliers à sa
                                    clientèle. C’est le premier partenariat entre Les Impatients et un organisme en
                                    santé, mais pas le dernier.</p>

                            </div>
                            <div class="histoire__2011">
                                <h3>2011</h3>
                                <p>Autre première, Les Impatients sortent de Montréal. C’est l’ouverture de l’atelier de
                                    Drummondville qui pave la voie à des ouvertures d’ateliers partout au Québec.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>