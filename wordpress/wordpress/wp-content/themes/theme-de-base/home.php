<?php
/**
 * Modèle générique au cas où Wordpress ne trouve pas un modèle
 * À utiliser comme fallback seulement.
 */

get_header(); // Affiche header.php
if ( have_posts() ) : 
	// Si oui, bouclons au travers pour tous les afficher
	while ( have_posts() ) : the_post(); 
?>
<main>
        <!------------------------DÉBUT HERO------------------------->
        <section class="hero d-flex flex-column">
            <!--DÉBUT TITRE "LES IMPATIENTS"-->
            <div class="hero__titre d-flex align-items-center">
                <h1>LES</h1>
				<img src="<?php bloginfo('template_url'); ?>/images/fleche.svg" alt="image de fleche">
                <h1>IMPATIENTS</h1>
            </div>
            <!--FIN TITRE "LES IMPATIENTS"-->

            <!--DÉBUT INFO #1-->
            <div class="hero__info01 d-flex align-items-center">
				<img src="<?php bloginfo('template_url'); ?>/images/personnage01.svg" alt="petite image de coté">
                <div class="hero__info01__content">
                    <div class="d-flex">
                        <h2>Une maison</h2>
                        <h2>&nbsp</h2>
                        <h2>pour tous</h2>
                    </div>
                    <p>Les Impatients viennent en aide aux personnes ayant des problèmes de santé mentale par le
                        biais de l’expression artistique.</p>
                </div>

            </div>
            <!--FIN INFO #1-->

            <!--DÉBUT INFO #2-->
            <div class="hero__info02 d-flex align-items-center">
                <div class="hero__info02__content">
                    <div class="d-flex">
                        <h2>Pour plus d’</h2>
                        <h2> informations</h2>
                    </div>
                    <p>Naviguer avec les boutons du caroussel pour obtenir plus d’informations sur la fondation.</p>
                </div>
                <!--Il va potentiellement utiliser swiper pour le caroussel d'image, a voir -->
                <div class="hero__info02__carousel d-flex flex-column justify-content-center align-items-center">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                    <div class="hero__info02__carousel__nav d-flex justify-content-around">
                        <button></button><button></button><button></button>
                    </div>
                </div>
            </div>
            <!--FIN INFO #2-->
            </div>
        </section>
        <!------------------------FIN HERO------------------------->


<?php

endwhile; wp_reset_postdata(); // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;


get_footer(); // Affiche footer.php 
?>