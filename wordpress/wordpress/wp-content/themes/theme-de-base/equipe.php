<?php 
/**
 * 	Template Name: Équipe
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

        <section>
    <div>
    <div class="services__wrapup__titre">
                <h2>Notre équipe</h2>
            </div>
	
    <div class="services__wrapup__contenus__wrapupDropdown__titre text-align-center justify-content-center">
                        <h2 class="equipe">Administration</h2>
                    </div>

		  
			<div class="EquipeAdmin card-group equipe justify-content-center container">
								<?php
  $admin = new WP_Query('post_type=administration');
  while ($admin->have_posts()) : $admin->the_post(); 
?>
				<div data-bs-toggle="modal" data-bs-target="#ModalEquipe" class="card equi">
				  <img class="card-img-top imgEquipe img-fluid" src=<?php the_post_thumbnail_url() ?> alt="Card image cap">
				  <div class="card-body">
					<h3 class="card-title"><?php the_field('nom_de_lemploye')?></h5>
					<h5 class="card-text"><?php the_field('poste_de_lemploye')?></h5>
					<h5 class="card-text"><?php the_field('courriel')?></h5>
				  </div>
				</div>
				<?php   endwhile;
  wp_reset_postdata();
?>
		</div>
	</div>
    <div class="services__wrapup__contenus__wrapupDropdown__titre justify-content-center">
                        <h2>Artistes et art-thérapeutes responsables d'ateliers</h2>
                    </div>			
                    
                    <div class="EquipeArtiste card-group equipe justify-content-center container">
			<?php
  $artiste = new WP_Query('post_type=artiste');
  while ($artiste->have_posts()) : $artiste->the_post(); 
?>
				<div data-bs-toggle="modal" data-bs-target="#ModalEquipe" class="card equi">
				  <img class="card-img-top imgEquipe" src=<?php the_post_thumbnail_url() ?> alt="Card image cap">
				  <div class="card-body">
					<h3 class="card-title"><?php the_field('nom_de_lemploye')?></h3>
				  </div>
				</div>
				<?php   endwhile;
  wp_reset_postdata();
?>

		</div>
	</div>
    <div class="services__wrapup__contenus__wrapupDropdown__titre justify-content-center">
                        <h2>Conseil d'administration</h2>
                    </div>
			<div class="EquipeConseil card-group equipe justify-content-center container">
			<?php
  $conseil = new WP_Query('post_type=conseil-admin');
  while ($conseil->have_posts()) : $conseil->the_post(); 
?>
				<div data-bs-toggle="modal" data-bs-target="#ModalEquipe" class="card equi">
				  <img class="card-img-top imgEquipe" src=<?php the_post_thumbnail_url() ?> alt="Card image cap">
				  <div class="card-body">
					<h3 class="card-title"><?php the_field('nom_de_lemploye')?></h3>
					<h5 class="card-text"><?php the_field('poste_de_lemploye')?></h5>
				  </div>
				</div>
				<?php   endwhile;
  wp_reset_postdata();
?>

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