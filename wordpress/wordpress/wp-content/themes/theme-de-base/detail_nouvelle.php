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
                        <p class="titreNouvelle__wrapup__titreWrapup__description__date">05/04/2022</p>
                        <p class="titreNouvelle__wrapup__titreWrapup__description__type">Évènement</p>
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
            <section class="sectionTexte01">
                <p>
                    Le 30 mars dernier se concluait la 2e édition de la campagne de
                    financement Miroir Miroir. Pour l’occasion, une quarantaine de
                    généreux ambassadeurs et généreuses ambassadrices s’est prêtée au jeu
                    de laisser libre cours à un·e participant·e d’ateliers de revisiter
                    leur portrait, ou celui d’un être cher. Miroir Miroir est une démarche
                    artistique et philanthropique qui rassemble de façon ludique les gens
                    qui fréquentent nos ateliers et le public généreux. L’idée est simple
                    et efficace : voir le regard que porte sur soi une personne qui vit
                    des problèmes de santé mentale. Ainsi, un puissant échange est engagé,
                    en plus de supporter la tenue des ateliers artistiques, le cœur de
                    notre action.
                </p>
                <h2>LE PORTRAIT : UNE CONNEXION À L’AUTRE</h2>
                <p>
                    Mêlant couleurs, sensations, imaginaire et vécu, les participants et
                    participantes d’ateliers ont interprété la photo fournie par les
                    ambassadeurs et ambassadrices en utilisant la technique du pochoir.
                </p>
                <p>
                    Voir son portrait réalisé par la main d’un autre est une rencontre aux
                    multiples facettes. D’abord avec soi-même, nous faisant nous observer
                    sous un nouveau jour; mais aussi avec l’artiste, son style et ses
                    sensibilités. En créant ce portrait se tisse un lien puissant à
                    l’autre, permettant ainsi d’atténuer la distance et les préjugés entre
                    deux humains.
                </p>
            </section>
            <!-------------------------------FIN TEXTE01----------------------------->

            <!-------------------------------sDÉBUT DE LA SECTION IMAGE01----------------------------->
            <section class="sectionImg01">
                <img src="assets/images/img_detailNouvelle_01.png" alt="image 01" />
                <img src="assets/images/img_detailNouvelle_02.png" alt="image 02" />
                <img src="assets/images/img_detailNouvelle_03.png" alt="image 03" />
                <img src="assets/images/img_detailNouvelle_04.png" alt="image 04" />
            </section>
            <!-------------------------------FIN DE LA SECTION IMAGE01----------------------------->

            <!-------------------------------DÉBUT DE LA SECTION TEXT02----------------------------->
            <section class="sectionTexte02">
                <p>
                    Selon <em>Cécile Peschier</em>
                    , artiste responsable du projet en ateliers, la technique du pochoir
                    était une découverte pour la plupart des participants et
                    participantes. Issue de l’art urbain, elle consiste à découper la
                    lumière pour obtenir des formes simples et efficaces. Elle ajoute : «
                    C’est avec beaucoup de curiosité et de détermination que les
                    participants et participantes ont accepté de jouer le jeu et de sortir
                    de leur zone de confort. Chacun·e s’est approprié la technique et l’a
                    interprétée avec son univers personnel. Le résultat nous offre une
                    exposition riche en diversité dans laquelle le pochoir sert à la fois
                    de trame invisible, de technique d’impression et de support
                    d’interprétation des visages créant ainsi un lien sur le papier avec
                    les ambassadeurs et ambassadrices. »
                </p>
            </section>
            <!-------------------------------FIN DE LA SECTION TEXT02----------------------------->

            <!-------------------------------DÉBUT DE LA SECTION IMAGE02----------------------------->
            <section class="sectionImg02">
                <img src="assets/images/img_detailNouvelle_humains.png" alt="">
            </section>
            <!-------------------------------FIN DE LA SECTION IMAGE02----------------------------->

            <!-------------------------------DÉBUT DE LA SECTION TEXTE03----------------------------->
            <section class="sectionTexte03">
                <p class="sectionTexte03__texte">
                    <em>Matteo Esteves</em>, l’un des participants au projet,
                    est monté sur scène afin de remercier les
                    ambassadeurs et les ambassadrices pour leur
                    participation.
                </p>
            </section>
            <!-------------------------------FIN DE LA SECTION TEXTE03----------------------------->


            <!-------------------------------DÉBUT DE LA SECTION TEXTE04----------------------------->
            <section class="sectionTexte04">
                <h2 class="sectionTexte04__titre">Un hommage au Dr Jean-Bernard Trudeau</h2>
                <p class="sectionTexte04__texte">
                    Profitant de la présence de nombreux·ses
                    ami·e·s des Impatients, nous avons souligné
                    l’implication extraordinaire du Dr Jean-Bernard
                    Trudeau au sein de l’organisme. Bien qu’il
                    demeure sur le conseil d’administration, le <em> Dr Trudeau</em>
                    prend sa retraite de la présidence
                    après 13 ans à porter la cause, à sensibiliser, à
                    développer de nouveaux ateliers. Nous
                    souhaitons saluer cet engagement et lui
                    témoigner notre reconnaissance.
                </p>
            </section>
            <!-------------------------------FIN DE LA SECTION TEXTE04----------------------------->


            <!-------------------------------sDÉBUT DE LA SECTION IMAGE03----------------------------->
            <section class="sectionImg03">
                <img src="assets/images/detail_nouvelle_groupe_img02_01.png" alt="image 01" />
                <img src="assets/images/detail_nouvelle_groupe_img02_02.png" alt="image 02" />
                <img src="assets/images/detail_nouvelle_groupe_img02_03.png" alt="image 03" />
                <img src="assets/images/detail_nouvelle_groupe_img02_04.png" alt="image 04" />
            </section>
            <!-------------------------------FIN DE LA SECTION IMAGE03----------------------------->


            <!-------------------------------DÉBUT DE LA SECTION TEXTE04----------------------------->
            <section class="sectionTexte05">
                <p class="sectionTexte04__texte">
                    Le <em>Dr Horacio Arruda</em>, sous-ministre adjoint,
                    Ministère de la Santé et des Services
                    Sociaux, et Lorraine Palardy, présidentefondatrice de l'organisme, ont pris la parole
                    pour rendre hommage au Dr Jean-Bernard
                    Trudeau.
                </p>
            </section>
            <!-------------------------------FIN DE LA SECTION TEXTE04----------------------------->

            <button class="btnAlbum">Voir l'album photo de l'événement sur Facebook</button>

        </div>
    </main>



















		<?php the_content(); // Contenu principal de la page ?>
	</article>
<?php 

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>