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
        <div class="row justify-content-center">
    
        
            <div class="col-lg-12 col-md-12 col-sm-12 justify-content-center">
    
            <?php
      $role = new WP_Query('post_type=titre_equipe');
      while ($role->have_posts()) : $role->the_post(); 
    ?>
    
              <h2 class="equipe-role"><?php the_field('titre_role1')?></h2>
    
              <?php   endwhile;
      wp_reset_postdata();
    ?>  
              
                <div class="card-group equipe justify-content-center">
                                    <?php
      $projects = new WP_Query('post_type=equipe');
      while ($projects->have_posts()) : $projects->the_post(); 
    ?>
                    <div data-bs-toggle="modal" data-bs-target="#exampleModal" class="card">
                      <img class="card-img-top img-fluid" src=<?php the_post_thumbnail_url() ?> alt="Card image cap">
                      <div class="card-body">
                        <h3 class="card-title"><?php the_field('nom_de_lemploye')?></h5>
                        <h5 class="card-text"><?php the_field('poste_de_lemploye')?></h5>
                        <h5 class="card-text"><small><?php the_field('courriel')?></small></h5>
                      </div>
                    </div>
                    <?php   endwhile;
      wp_reset_postdata();
    ?>
            </div>
        </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
            <?php
      $role = new WP_Query('post_type=titre_equipe');
      while ($role->have_posts()) : $role->the_post(); 
    ?>
    
              <h2 class="equipe-role"><?php the_field('titre_role2')?></h2>
    
              <?php   endwhile;
      wp_reset_postdata();
    ?>  
                <div class="card-group equipe justify-content-center">
                <?php
      $integration = new WP_Query('post_type=equipe_accueil');
      while ($integration->have_posts()) : $integration->the_post(); 
    ?>
                    <div data-bs-toggle="modal" data-bs-target="#exampleModal" class="card">
                      <img class="card-img-top" src=<?php the_post_thumbnail_url() ?> alt="Card image cap">
                      <div class="card-body">
                        <h3 class="card-title"><?php the_field('nom_de_lemploye')?></h3>
                        <h5 class="card-text"><?php the_field('poste_de_lemploye')?></h5>
                        <h5 class="card-text"><small><?php the_field('courriel')?></small></h5>
                      </div>
                    </div>
                    <?php   endwhile;
      wp_reset_postdata();
    ?>
    
            </div>
        </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
            <?php
      $role = new WP_Query('post_type=titre_equipe');
      while ($role->have_posts()) : $role->the_post(); 
    ?>
    
              <h2 class="equipe-role"><?php the_field('titre_role3')?></h2>
    
              <?php   endwhile;
      wp_reset_postdata();
    ?>  
                <div class="card-group equipe justify-content-center">
                <?php
      $francisation = new WP_Query('post_type=equipe_francisation');
      while ($francisation->have_posts()) : $francisation->the_post(); 
    ?>
                    <div data-bs-toggle="modal" data-bs-target="#exampleModal" class="card">
                      <img class="card-img-top" src=<?php the_post_thumbnail_url() ?> alt="Card image cap">
                      <div class="card-body">
                        <h3 class="card-title"><?php the_field('nom_de_lemploye')?></h3>
                        <h5 class="card-text"><?php the_field('poste_de_lemploye')?></h5>
                        <h5 class="card-text"><small><?php the_field('courriel')?></small></h5>
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