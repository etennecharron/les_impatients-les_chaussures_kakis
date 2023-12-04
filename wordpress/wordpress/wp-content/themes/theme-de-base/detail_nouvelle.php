<?php 
/**
 * 	Template Name: Détail de nouvelle
 *  Template Post Type: nouvelle, page
 * 	Identique à page
 */

get_header(); // Affiche header.php
?>
		
		<main>
        <!-------------------------------DEBUT TITRE DE LA NOUVELLE----------------------------->
        <?php the_post_thumbnail("full", array("class" => "baniere",)); ?>
        <section class="titreNouvelle">
            <div class="titreNouvelle__wrapup">
                <div class="titreNouvelle__wrapup__titreWrapup">
                    <div class="titreNouvelle__wrapup__titreWrapup__filAriane">
                        <p>Les impatients / Nouvelles /</p>
                        <p>&nbsp</p>
                        <p class="titreNouvelle__wrapup__titreWrapup__filAriane__nomNouvelle">
                            <?php the_title(); ?>
                        </p>
                    </div>
                    <div class="titreNouvelle__wrapup__titreWrapup__description">
                        <p class="titreNouvelle__wrapup__titreWrapup__description__date"><?php the_field("date_nouvelle");?></p>
                        <p class="titreNouvelle__wrapup__titreWrapup__description__type"><?php the_field("categorie_de_la_nouvelle");?></p>
                    </div>
                    <div class="titreNouvelle__wrapup__titreWrapup__titre">
                        <h1><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </section>
        <!-------------------------------FIN TITRE DE LA NOUVELLE----------------------------->

        <div class="sectionsWrapup">
            <!-------------------------------DEBUT TEXTE01----------------------------->

            <?php 
                $paragraphe = get_field("paragraphe");
                if($paragraphe["texte_paragraphe"]):
                $titre = $paragraphe["titre_paragraphe"];
                ?>
                <?php
                
                $texte = $paragraphe['texte_paragraphe'];
	            ?>
            <section class="sectionTexte01">
                <?php if($titre): ?>
            <h2><?php echo $titre?></h2>
                <?php endif; ?>
            <p><?php echo $texte?></p>
            </section>
           
            <?php endif; ?>
            <!-------------------------------FIN TEXTE01----------------------------->

         
            <!-------------------------------DÉBUT DE LA SECTION IMAGE02----------------------------->
            <?php 
            $image = get_field("contenus_image");
            $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
            if($image):
            ?>

            <section class="sectionImg02">
              <img src="<?php echo esc_url($image['url']); ?>" alt="">
            </section>

            <?php endif; ?>
            <!-------------------------------FIN DE LA SECTION IMAGE02----------------------------->

        </div>


        <?php get_template_part( 'partials/nouvelles_recente' ); ?>

    </main>
	</article>
<?php 

//get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>