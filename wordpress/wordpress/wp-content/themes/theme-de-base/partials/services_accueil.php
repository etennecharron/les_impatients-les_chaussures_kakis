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