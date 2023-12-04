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
				<img class='image-compagnie-01' src="<?php bloginfo('template_url'); ?>/images/logo_01.png" alt="image de coté">
				<img class='image-compagnie-02' src="<?php bloginfo('template_url'); ?>/images/logo_02.png" alt="image de coté">
				<img class='image-compagnie-03' src="<?php bloginfo('template_url'); ?>/images/logo_03.png" alt="image de coté">
				<img class='image-compagnie-04' src="<?php bloginfo('template_url'); ?>/images/logo_04.png" alt="image de coté">
				<img class='image-compagnie-05' src="<?php bloginfo('template_url'); ?>/images/logo_05.png" alt="image de coté">
				<img class='image-compagnie-06' src="<?php bloginfo('template_url'); ?>/images/logo_06.png" alt="image de coté">
				<img class='image-compagnie-07' src="<?php bloginfo('template_url'); ?>/images/logo_07.png" alt="image de coté">
				<img class='image-compagnie-08' src="<?php bloginfo('template_url'); ?>/images/logo_08.png" alt="image de coté">
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
								<img class="footer__bas__wrapup__wrapupSection__impliquer__logo01" src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="logo">
                        </div>
                        <div class="footer__bas__wrapup__wrapupSection__connaitre">
                            <h4>Nous connaître</h4>
                            <span class="footer__bas__wrapup__wrapupSection__connaitre__barre"></span>
                            <a href="">À propos</a>
                            <a href="">Mission</a>
                            <a href="">Historique</a>
                            <a href="">Presse</a>
                            <a href="">Équipe</a>
                            <a href="">CA</a>
                        </div>
                        <div class="footer__bas__wrapup__wrapupSection__inscription">
                            <h4>Inscrivez-vous à l'infolettre</h4>
                            <span class="footer__bas__wrapup__wrapupSection__impliquer__barre"></span>
                            <div class="bar_recherche footer__bas__wrapup__wrapupSection__inscription__recherche">
                                Rechercher <i class="w-25 h-25 bi bi-search"></i></div>
                            <span class="footer__bas__wrapup__wrapupSection__inscription__barre"></span>

                            <div class="footer__bas__wrapup__wrapupSection__inscription__recherche"></div>

                            <div class="footer__bas__wrapup__wrapupSection__inscription__icons">
							<a href="https://www.instagram.com/lesimpatients/"><img src="<?php bloginfo('template_url'); ?>/images/instagram_logo.svg" alt="instagram icon"></a>
							<a href="https://www.facebook.com/organisme.les.impatients/"><img src="<?php bloginfo('template_url'); ?>/images/facebook_logo.svg" alt="facebook icon"></a>
							<a href="https://www.youtube.com/user/LesImpatients"><img src="<?php bloginfo('template_url'); ?>/images/youtube_logo.svg" alt="youtube icon"></a>
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
					<img class="footer__bas__logo02" src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="logo">

                </div>
            </section>
        </footer>
<?php wp_footer(); 
/* Espace où WordPress peut insérer des fichiers .js et autres. Par exemple pour des extensions (plugins). 
	 Si vous enlevez cette fonction, vous désactiverez du même coup toutes vos extensions (plugins) 🤷. 
	 Vous pouvez la déplacer si désiré, mais garder là. */
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
