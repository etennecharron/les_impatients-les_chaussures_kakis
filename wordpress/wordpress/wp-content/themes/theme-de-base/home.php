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


<!------------------------DÉBUT CAMPAGNE------------------------->
<section class="campagne">
            <div class="campagne__wrapup">
                <img src="<?php bloginfo('template_url'); ?>/images/personnage02.svg" alt="image de coté">
                <div class="campagne__wrapup__contenus">
                    <h2>CAMPAGNE DE LEVÉE
                        DE FONDS</h2>
                    <p>Il y a quelques semaines, nous avons fêté nos 30 ans. Pour notre anniversaire, on a soufflé des
                        chandelles…et la maison a brûlé.
                        Aidez-nous à maintenir nos activités et accueillir nos Impatients.</p>
                    <button>Pour donner ></button>
                </div>
            </div>
        </section>
        <!------------------------FIN CAMPAGNE------------------------->


        <!------------------------DÉBUT SERVICES------------------------->
        <section class="services">
            <div class="services__wrapup">
                <div class="services__wrapup__titre">
                    <h2>Services offerts</h2>
                </div>
                <div class="services__wrapup__contenus">
                    <!-- utiliser le drop down bootstrap-->
                    <div class="services__wrapup__contenus__wrapupDropdown">
                        <div class="services__wrapup__contenus__wrapupDropdown__titre">
                            <h2>Services</h2>
                            <h2>&nbsp</h2>
                            <h2>Offerts</h2>
                        </div>
                        <div>
                            <div class="services__wrapup__contenus__wrapupDropdown--sourligner__atelier dropdown">
                                <button class="btn dropdown-toggle" type="button" id="dropdownAtelier"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Ateliers
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownAtelier">
                                    <p>
                                        Notre organisme est à même de transmettre son expertise aux centres et aux
                                        groupes
                                        travaillant avec une clientèle en santé mentale. Plusieurs lieux d’ateliers ont
                                        été
                                        ouverts au Québec en collaboration avec des établissements du milieu de la santé
                                        et
                                        avec des lieux de diffusion impliqués dans leur communauté. Plusieurs ont suivi.
                                        Maintenant, nous avons 21 points de service dans 13 villes au Québec qui
                                        accueillent
                                        900 personnes par semaine.
                                    </p>
                                    <button>Voir les ateliers</button>
                                </div>

                            </div>


                            <div class="services__wrapup__contenus__wrapupDropdown--sourligner__collection dropdown">
                                <button class="btn dropdown-toggle" type="button" id="dropdownCollection"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    La collection
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownCollection">
                                    <p>
                                        Depuis le début de nos activités, nous avons conservé une grande partie des
                                        œuvres
                                        produites par nos participants et participantes, ce qui constitue aujourd’hui un
                                        patrimoine riche de 15 000 œuvres d’art. Il s’agit là d’une collection d’une
                                        grande
                                        originalité, pionnière au Canada dans son champ de collectionnement.
                                    </p>
                                    <button>Voir la collection</button>
                                </div>

                            </div>


                            <div class="services__wrapup__contenus__wrapupDropdown--sourligner__evenement dropdown">
                                <button class="btn dropdown-toggle" type="button" id="dropdownEvenement"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Ateliers
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownEvenement">
                                    <p>
                                        Nous disposons d’un espace galerie grâce auquel nous faisons connaître à un
                                        large
                                        public les œuvres produites dans nos ateliers. À cela s’ajoutent d’autres
                                        activités
                                        de diffusion régulièrement mises de l’avant à l’extérieur de notre centre.
                                    </p>
                                    <button>Voir les évenement</button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <img src="<?php bloginfo('template_url'); ?>/images/personnage03.svg" alt="image de coté">
                </div>
            </div>
        </section>
        <!------------------------FIN SERVICES------------------------->


<?php

endwhile; wp_reset_postdata(); // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;


get_footer(); // Affiche footer.php 
?>