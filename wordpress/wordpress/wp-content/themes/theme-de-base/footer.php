<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche le pied de page (Footer) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/

// Fermeture de la zone de contenu principale ?>

<footer>
    <section class="footer__compagnie">
        <div class="footer__compagnie__titre">
            <h2>Nous poursuivons <em>notre action grâce à</em></h2>
        </div>
        <div class="footer__compagnie__logos">
        <?php
					$logos= new WP_Query("post_type=logo");
                        if ( $logos->have_posts() ) : 
                            while ( $logos->have_posts() ) : $logos->the_post(); ?>

                            <a href="<?php get_field("lien") ?>">
                            <?php the_post_thumbnail("medium", array("class" => "card-img-top")); ?>
                            </a>
				  <?php 
                            endwhile; 
                            endif;
                            ?>
        </div>
    </section>

    <section class="footer__bas">
        <div class="footer__bas__wrapup">
            <div class="footer__bas__wrapup__wrapupSection">
                <div class="footer__bas__wrapup__wrapupSection__impliquer">
                    <h4>S'impliquer</h4>
                    <span class="footer__bas__wrapup__wrapupSection__impliquer__barre"></span>
                    <a href="">Offres d'emploi</a>
                    <a href="">Devenir bénévole</a>
                    <a href="">Nos partenaires</a>
                    <a href="<?php echo esc_url( home_url( '/' ) );?>">
                        <img class="footer__bas__wrapup__wrapupSection__impliquer__logo01"
                            src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="logo">
                    </a>
                </div>
                <div class="footer__bas__wrapup__wrapupSection__connaitre">
                    <h4>Nous connaître</h4>
                    <span class="footer__bas__wrapup__wrapupSection__connaitre__barre"></span>

                    <?php
                         wp_nav_menu(array(
                        'theme_location' => 'main-menu',
                             ));
                                    ?>
                </div>
                <div class="footer__bas__wrapup__wrapupSection__inscription">
                    <h4>Inscrivez-vous à l'infolettre</h4>
                    <span class="footer__bas__wrapup__wrapupSection__impliquer__barre"></span>
                    <div class="bar_recherche footer__bas__wrapup__wrapupSection__inscription__recherche">
                        Rechercher <i class="w-25 h-25 bi bi-search"></i></div>
                    <span class="footer__bas__wrapup__wrapupSection__inscription__barre"></span>

                    <div class="footer__bas__wrapup__wrapupSection__inscription__recherche"></div>

                    <div class="footer__bas__wrapup__wrapupSection__inscription__icons">
                        <a href="https://www.instagram.com/lesimpatients/"><img
                                src="<?php bloginfo('template_url'); ?>/images/instagram_logo.svg"
                                alt="instagram icon"></a>
                        <a href="https://www.facebook.com/organisme.les.impatients/"><img
                                src="<?php bloginfo('template_url'); ?>/images/facebook_logo.svg"
                                alt="facebook icon"></a>
                        <a href="https://www.youtube.com/user/LesImpatients"><img
                                src="<?php bloginfo('template_url'); ?>/images/youtube_logo.svg" alt="youtube icon"></a>
                    </div>
                    <div class="footer__bas__wrapup__wrapupSection__inscription__contact">
                        <p href="">Organisme de bienfaisance enregistré</p>
                        <p href="">13484-5213-RR0001</p>
                        <p href="">Téléphone</p>
                        <p href="">514 842-1043</p>
                        <p>© lesimpatientsleschaussureskakis</p>
                    </div>
                    <button class="footer__bas__wrapup__wrapupSection__inscription__btn">Pour donner -></button>
                </div>
            </div>
            <a href="<?php echo esc_url( home_url( '/' ) );?>">
                <img class="footer__bas__logo02" src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="logo">
            </a>
        </div>
    </section>
</footer>
<?php wp_footer(); 
/* Espace où WordPress peut insérer des fichiers .js et autres. Par exemple pour des extensions (plugins). 
	 Si vous enlevez cette fonction, vous désactiverez du même coup toutes vos extensions (plugins) 🤷. 
	 Vous pouvez la déplacer si désiré, mais garder là. */
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/Observer.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/MotionPathPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/EasePack.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>

</body>

</html>