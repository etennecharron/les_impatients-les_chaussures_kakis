<?php 
/**
 * 	Template Name: FAQS
 * 	Identique à page
 */

get_header(); // Affiche header.php
?>
		    <section class="services">
        <div class="services__wrapup">
            <div class="services__wrapup__titre">
                <h2>FAQ</h2>
            </div>
            <div class="services__wrapup__contenus">
                <!-- utiliser le drop down bootstrap-->
                <div class="services__wrapup__contenus__wrapupDropdown">
                    <div class="services__wrapup__contenus__wrapupDropdown__titre">
                        <h2>FAQ</h2>
                    </div>
                    <div>
                        <div class="services__wrapup__contenus__wrapupDropdown--sourligner__atelier dropdown">
                            <button class="btn dropdown-toggle" type="button" id="dropdownAtelier"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Pourquoi est-ce que les Impatients existe-t-il ?
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownAtelier">
                                <p>
                                    Les Impatients viennent en aide aux personnes ayant des problèmes de santé mentale
                                    par le biais de l’expression artistique en offrant des ateliers de création qui
                                    favorisent les échanges avec la communauté par la diffusion des réalisations
                                    produites en atelier.
                                </p>
                            </div>

                        </div>


                        <div class="services__wrapup__contenus__wrapupDropdown--sourligner__collection dropdown">
                            <button class="btn dropdown-toggle" type="button" id="dropdownCollection"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Qu'est-ce qu'est la Collection ?
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownCollection">
                                <p>
                                    Depuis le début de nos activités, nous avons conservé une grande partie des œuvres
                                    produites par nos participants et participantes, ce qui constitue aujourd’hui un
                                    patrimoine riche de 15 000 œuvres d’art. Il s’agit là d’une collection d’une grande
                                    originalité, pionnière au Canada dans son champ de collectionnement.
                                </p>
                                <button>Voir la collection</button>
                            </div>

                        </div>


                        <div class="services__wrapup__contenus__wrapupDropdown--sourligner__evenement dropdown">
                            <button class="btn dropdown-toggle" type="button" id="dropdownEvenement"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Quels sont les évènements ?
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownEvenement">
                                <p>
                                    Nous disposons d’un espace galerie grâce auquel nous faisons connaître à un large
                                    public les œuvres produites dans nos ateliers. À cela s’ajoutent d’autres activités
                                    de diffusion régulièrement mises de l’avant à l’extérieur de notre centre.
                                </p>
                                <button>Voir les évenement</button>
                            </div>

                        </div>


                        <div class="services__wrapup__contenus__wrapupDropdown--sourligner__evenement dropdown">
                            <button class="btn dropdown-toggle" type="button" id="dropdownEvenement"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Quels sont les ateliers ?
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownEvenement">
                                <p>
                                    Notre organisme est à même de transmettre son expertise aux centres et aux groupes
                                    travaillant avec une clientèle en santé mentale. Plusieurs lieux d’ateliers ont été
                                    ouverts au Québec en collaboration avec des établissements du milieu de la santé et
                                    avec des lieux de diffusion impliqués dans leur communauté. Plusieurs ont suivi.
                                    Aujourd’hui, nous avons 21 points de service dans 13 villes au Québec qui
                                    accueillent 900 personnes par semaine.
                                </p>
                                <button>Voir les ateliers</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php 

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>