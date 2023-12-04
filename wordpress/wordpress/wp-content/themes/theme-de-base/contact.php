<?php 
/**
 * 	Template Name: Contact
 *  Template Post Type: contact
 * 	Identique à page
 */

get_header(); // Affiche header.php
?>
	  <section class="campagne container-fluid justify-content-center">
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <h1>Les Impatients</h1>
                <p>Les Impatients - Trois Sapins <br> 131A, rue Sherbrooke Est <br> Montréal (Québec) H2X 1C5</p>
                <p>Vous pouvez rejoindre l'équipe <br> administrative par téléphone ou pas couriels.</p>
                <p>Téléphone : 514 824-1043</p>
                <a href="reception@impatients.ca"></a>
                <p>Téléphone Boutique : 438 393-9121</p>
                <button>Infos ateliers</button>

            </div>
            <div class="col-lg-6 col-sm-12">
                <h2> Heures d'ouvertures de la galerie et de la boutique</h1>
                    <p>Lundi</p>
                    <p>Mardi</p>
                    <p>Mercredi</p>
                    <p>Jeudi</p>
                    <p>Vendredi</p>
                    <p>Samedi</p>
                    <p>Dimanche</p>
                    <h2>Renseignements supplémentaires</h2>
                    <div class="renseignements_sup">
                        <p>
                            Nos bureaux et notre boutique du centre-ville sont temporairement fermés dû à l’incendie de
                            la Chapelle historique du Bon-Pasteur.
                        </p>
                        <a href="">Abonnez-vous à notre infolettre</a>
                        <p>afin de connaître nos plus récentes nouvelles.</p>

                    </div>
            </div>
        </div>
    </section>
		<?php the_content(); // Contenu principal de la page ?>
	</article>
<?php 

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>