<?php 
/**
 * 	Template Name: FAQ
 * Template Post Type: foire-au-question
 * 	Identique à page
 */

get_header(); // Affiche header.php
get_template_part("partials/hero_generique")
?>


<section class="services">
    <div class="services__wrapup">
        <div class="services__wrapup__contenus">
            <!-- utiliser le drop down bootstrap-->
            <div class="services__wrapup__contenus__wrapupDropdown">
                <?php get_template_part("partials/questions"); ?>
            </div>
        </div>
    </div>
</section>

<?php get_template_part("partials/nouvelles_recente"); ?>

<?php 
get_footer(); // Affiche footer.php 
?>