<?php
/**
 * 	Template Name: FAQ
 *  Template Post Type: post, page, groupe
 */
?>

<?php
/**
 * Modèle permettant d'afficher un article (Post).
 */

get_header(); // Affiche header.php



?>
 <section class="services">
        <div class="services__wrapup">
            <div class="services__wrapup__titre">
                <h2>FAQ</h2>
            </div>
            <div class="services__wrapup__contenus">
                <!-- utiliser le drop down bootstrap-->
                <div class="services__wrapup__contenus__wrapupDropdown">
                    <div class="services__wrapup__contenus__wrapupDropdown__titre">
                        <h2>FAQ</h2>
                    </div>
                    <div>
                        <div class="services__wrapup__contenus__wrapupDropdown--sourligner__atelier dropdown">
                            <button class="btn dropdown-toggle" type="button" id="dropdownAtelier"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <?php the_content(); ?>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownAtelier">
                                <p>
                                <?php the_content(); ?>
                                </p>
                            </div>

                        </div>


                        <div class="services__wrapup__contenus__wrapupDropdown--sourligner__collection dropdown">
                            <button class="btn dropdown-toggle" type="button" id="dropdownCollection"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <?php the_content(); ?>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownCollection">
                                <p>
                                <?php the_content(); ?>
                                </p>
                                <button>Voir la collection</button>
                            </div>

                        </div>


                        <div class="services__wrapup__contenus__wrapupDropdown--sourligner__evenement dropdown">
                            <button class="btn dropdown-toggle" type="button" id="dropdownEvenement"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Quels sont les évènements ?
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownEvenement">
                                <p>
                                <?php the_content(); ?>
                                </p>
                                <button>Voir les évenement</button>
                            </div>

                        </div>


                        <div class="services__wrapup__contenus__wrapupDropdown--sourligner__evenement dropdown">
                            <button class="btn dropdown-toggle" type="button" id="dropdownEvenement"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Quels sont les ateliers ?
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownEvenement">
                                <p>
                                <?php the_content(); ?>
                                </p>
                                <button>Voir les ateliers</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; // Fermeture de la boucle
		
	get_template_part( 'partials/comments' ); // Affiche partials/comments.php

	else : // Si aucun article n'a été trouvée
		get_template_part( 'partials/404' ); // Affiche partials/404.php
	endif;

	get_footer(); // Affiche footer.php 
?>