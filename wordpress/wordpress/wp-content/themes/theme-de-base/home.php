<?php
/**
 * Modèle générique au cas où Wordpress ne trouve pas un modèle
 * À utiliser comme fallback seulement.
 */

get_header(); // Affiche header.php
?>
<main>


    <!------------------------DÉBUT HERO------------------------->
        <?php get_template_part("partials/hero_accueil");?>
    <!------------------------FIN HERO------------------------->


  


<!------------------------DÉBUT CAMPAGNE------------------------->
<?php get_template_part("partials/campagne_accueil"); ?>
        <!------------------------FIN CAMPAGNE------------------------->


        <!------------------------DÉBUT SERVICES------------------------->
    <?php get_template_part("partials/services_accueil"); ?>
    <!------------------------FIN SERVICES------------------------->


    <?php get_template_part( 'partials/nouvelles_recente' ); ?>

    <!------------------------DÉBUT TÉMOIGNAGE------------------------->
   
    <!------------------------FIN TÉMOIGNAGE------------------------->
  <?php get_template_part("partials/temoignage_accueil"); ?>
    <!------------------------DÉBUT ESPACE------------------------->

    <section class="espace">
        <div class="espace__wrapup">
            <div class="espace__wrapup__titre">
                <h2>L'espace</h2>
                <h2>&nbsp</h2>
                <h2>Impatients</h2>
            </div>
            <div class="espace__wrapup__contenus">
                <div class="espace__wrapup__contenus__carte card">
                    <img src="<?php bloginfo('template_url'); ?>/images/img_carte_espace_01.png" class="card-img-top"
                        alt="image de la nouvelle 1">
                    <div class="card-body">
                        <h4 class="card-title">Diane Frigon à l'espace d'exposition Aimant•é</h4>
                    </div>
                </div>
                <div class="espace__wrapup__contenus__carte card">
                    <img src="<?php bloginfo('template_url'); ?>/images/img_carte_espace_02.png" class="card-img-top"
                        alt="image de la nouvelle 1">
                    <div class="card-body">
                        <h4 class="card-title">Jocelyne Proulx et Annie Letendre À L’ESPACE D’EXPOSITION AIMANT•É
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!------------------------FIN ESPACE------------------------->


    <?php

get_footer(); // Affiche footer.php 
?>