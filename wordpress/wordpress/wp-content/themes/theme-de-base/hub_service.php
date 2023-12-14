<?php 
/**
 * 	Template Name: Hub de service
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


		<section class="sectionServices">
            <div class="sectionServices__wrapup">	
				<?php
					$services= new WP_Query("post_type=service");
                        if ( $services->have_posts() ) : 
                            while ( $services->have_posts() ) : $services->the_post(); ?>
                                       
					<div class="card">
                    <div class="card-body">
                      <h5 class="card-title"><?php the_title(); ?></h5>
                      <p class="card-text"><?php the_content(); ?></p>
                      <a href="<?php the_permalink() ?>" class="btn">En savoir plus<img src="<?php bloginfo('template_url'); ?>/images/fleche_orange.svg" alt=""></a>
                    </div>
                  </div>
				  <?php 
                            endwhile; 
                            endif;
                            ?>
            </div>

                <!------------------------FIN SECTION SERVICES------------------------->

        </section>




<?php get_template_part("partials/nouvelles_recente") ?>




		

<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>