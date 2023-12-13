<?php 
/**
 * 	Template Name: Détail de service
 *  Template Post Type: service
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
		






		<section class="contenus">
			<div class="contenus__wrapup">
				<p><?php the_content() ?></p>
			</div>
		</section>
		


		<section class="autreServices">
			<div class="autreServices__wrapup">
			<div>
			<?php
					$services= new WP_Query("post_type=service");
                        if ( $services->have_posts() ) : 
                            while ( $services->have_posts() ) : $services->the_post(); ?>

							
						<?php the_title(); ?>
                      <?php the_content(); ?>
                    <?php the_permalink() ?>
				  <?php 
                            endwhile; 
                            endif;
                            ?>
			</div>
			</div>
		</section>
			








<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>