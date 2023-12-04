<?php
/**
 * Modèle générique au cas où Wordpress ne trouve pas un modèle
 * À utiliser comme fallback seulement.
 */

get_header(); // Affiche header.php
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

                        <?php
                        $services= new WP_Query("post_type=service");
                        if ( $services->have_posts() ) : 
                            while ( $services->have_posts() ) : $services->the_post(); ?>
                    

                            <div class="services__wrapup__contenus__wrapupDropdown--sourligner__atelier dropdown">
                                <button class="btn dropdown-toggle" type="button" id="dropdownAtelier"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php the_title(); ?>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownAtelier">
                                    <p>

                                        <?php the_content(); ?>
                                    </p>
                                    <button>Voir les ateliers</button>
                                </div>

                            </div>

                            <?php 
                            endwhile; 
                            endif;
                            ?>
                        </div>

                    </div>
                    <img src="<?php bloginfo('template_url'); ?>/images/personnage03.svg" alt="image de coté">
                </div>
            </div>
        </section>
        <!------------------------FIN SERVICES------------------------->

        <!------------------------DÉBUT NOUVELLE------------------------->
        <section class="nouvelles">
            <div class="nouvelles__wrapup">
                <div class="nouvelles__wrapup__titre">
                    <h2>Les dernières </h2>
                    <h2>&nbsp</h2>
                    <h2>nouvelles</h2>
                </div>
                <div class="nouvelles__wrapup__content">

                <?php
            $nouvelles = new WP_Query("post_type=nouvelle");
            if ( $nouvelles->have_posts() ) : 
	        while ( $nouvelles->have_posts() ) : $nouvelles->the_post(); 
            ?>
                

                    <!-- utiliser carte bootstrap-->
                    <div class="nouvelles__wrapup__content__carte card">
                    <?php the_post_thumbnail("medium", array("class" => "card-img-top")); ?>
                        <div class="card-body">
                            <h4 class="card-title"><?php the_title(); ?></h4>
                            <button>En savoir plus</button>
                        </div>
                    </div>

                    <?php 
                            endwhile; 
                            endif;
                            ?>

                </div>
                <button class="nouvelles__wrapup__btn">Pour plus de nouvelles</button>
            </div>
        </section>

        <!------------------------FIN NOUVELLE------------------------->


         <!------------------------DÉBUT TÉMOIGNAGE------------------------->
         <section class="temoignage">
            <div class="temoignage__wrapup">
                <!-- peut etre utiliser display flex pour les mettre l'un a coté de l'autre-->
                <h2>Témoignage</h2>
                <!-- utiliser carte bootstrap-->


                <div class="temoignage__wrapup__content">
                    <div class="card">

                    <img src="<?php bloginfo('template_url'); ?>/images/img_carte_temoignage.png" alt="temoin">
                        
                        <div class="card-body">
                            <div class="identiter">
                                <h4 class="card-title">Jean Sébastien Saint-Amour</h4>
                                <img src="<?php bloginfo('template_url'); ?>/images/ligne_separation.svg" alt="temoin">
                                <h4 class="card-title">Artiste</h4>
                                <img src="<?php bloginfo('template_url'); ?>/images/ligne_separation.svg" alt="temoin">
                                <h4 class="card-title">24 ans</h4>
                            </div>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad.</p>
                        </div>
                    </div>

                    <img class="imgCoter" src="<?php bloginfo('template_url'); ?>/images/personnage04.svg" alt="temoin">
                </div>
            </div>
        </section>


        <!------------------------FIN TÉMOIGNAGE------------------------->

        <!------------------------DÉBUT ESPACE------------------------->

        <section class="espace">
            <div class="espace__wrapup">
                <div class="espace__wrapup__titre">
                    <h2>L'espace</h2>
                    <h2>&nbsp</h2>
                    <h2>Impatients</h2>
                </div>
                <div class="espace__wrapup__contenus">
                    <button class="espace__wrapup__contenus__btn">Pour plus d'articles ></button>
                    <!-- utiliser carte bootstrap-->

                    <?php
            $articles = new WP_Query("post_type=article");
            if ( $articles->have_posts() ) : 
	        while ( $articles->have_posts() ) : $articles->the_post(); 
            ?>
                

                <div class="espace__wrapup__contenus__carte card">
                        <img src="assets/images/img_carte_espace_01.png" class="card-img-top"
                            alt="image de la nouvelle">
                        <div class="card-body">
                            <h4 class="card-title"><?php the_title(); ?></h4>
                            <button>Lire l’article</button>
                        </div>
                    </div>


                    <?php 
                            endwhile; 
                            endif;
                            ?>


                    <!-- utiliser carte bootstrap-->

                    <button class="espace__wrapup__contenus__btn">Lire l’article</button>
                </div>
            </div>
        </section>


        <!------------------------FIN ESPACE------------------------->


<?php

get_footer(); // Affiche footer.php 
?>