<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche l'entête (Header) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <title>
        <?php bloginfo('name'); // Affiche le nom du blog ?> |
        <?php is_front_page() ? bloginfo('description') : wp_title(''); // si nous sommes sur la page d'accueil, affichez la description à partir des paramètres du site - sinon, affichez le titre du post ou de la page. ?>
    </title>
    <?php 
	// Tous les .css et .js sont chargés dans le fichier functions.php
?>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,400&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <?php wp_head(); 
/* Cette fonction permet à WordPress et aux extensions d'instancier des fichier CSS et js dans le <head>
	 Supprimer cette fonction briserait vos extensions et diverses fonctionnalités WordPress. 
	 Vous pouvez la déplacer si désiré, mais garder là. */
?>
</head>

<body <?php body_class(); 
	/* Applique une classe contextuel sur le body
		 ex: sur la page d'accueil vous aurez la classe "home"
		 sur un article, "single postid-{ID}"
		 etc. */
	?>>

    <header>
        <!--  CODE DE BASE, JE L'AI MIT EN COMMENTAIRE POUR POTENTIELLEMENT LE RÉETULISER DANS NOTRE CODE PLUS TARD :D
	<h1>
		<a href="<?php echo esc_url( home_url( '/' ) ); // Lien vers la page d'accueil ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); // Title it with the blog name ?>" rel="home"><?php bloginfo( 'name' ); // Affiche le nom du site ?></a>
	</h1>

	<nav>
		<?php 
			// Affiche un menu si dans le tableau de bord un menu a été défini dans cet emplacement
			
		?>
	</nav>

	<?php 
		// Affiche la description de site se trouvant dans "General Settings" dans l'admin WordPress
		bloginfo( 'description' ); 
	?>
	-->
        <!-- Début de l'alerte-->
        <div class="alert alert-dismissible fade show desactiver" role="alert">
            <div class="alert__wrapup">
                <p>Ce site est développé par des étudiants</p>
                <img src="<?php bloginfo('template_url'); ?>/images/ligne_separation.svg" class="ligne_separation"
                    alt="">
                <a href="https://impatients.ca/">Site web original</a>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
        <!-- Fin de l'alerte-->
        <nav class="navbar navbar-light navbar-expand-md">
            <div class="container-fluid">

                <!--DÉBUT LOGO-->
                <a href="<?php echo esc_url( home_url( '/' ) );?>" class="navbar-brand">
                    <img class="logo" src="<?php bloginfo('template_url'); ?>/images/logo.png">
                </a>
                <!--FIN LOGO-->

                <!--DÉBUT BTN HAMBURGER-->
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mainNav"
                    aria-controls="mainNav" aria-expanded="false" aria-label="Affichage/masquage de la navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!--FIN BTN HAMBURGER-->

                <!--DÉBUT CONTENUS NAV-->
                <div id="mainNav" class="collapse navbar-collapse">
                    <?php 
wp_nav_menu([
    'theme_location'=> 'main-menu',
    'menu_class'    => 'navbar-nav align-items-center',
    'list_item_class'  => 'nav-item',
    'link_item_class'     => 'nav-lien',
  ]);
?>
                       <a href="https://impatients.ca/faire-un-don/" class="navDon">DON</a> 
                    <!--FIN CONTENUS NAV-->
                </div>
            </div>
        </nav>





    </header>
    <!-- Débute le contenu principal de notre site -->