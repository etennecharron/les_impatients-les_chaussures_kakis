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

                $nouvellesParDates = array(
                    'post_type' => "nouvelle",
                    'meta_key' => 'nouvelles_recentes',
                    'orderby' => 'date',
                    'order' => 'DESC',
                );
            $nouvelles = new WP_Query($nouvellesParDates);
            if ( $nouvelles->have_posts()) : 
	        while ( $nouvelles->have_posts() ) : $nouvelles->the_post(); 
            ?>
                

                <?php if(get_field('nouvelles_recentes') == true){?>
                    <!-- utiliser carte bootstrap-->
                    <div class="nouvelles__wrapup__content__carte card">
                    <?php the_post_thumbnail("medium", array("class" => "card-img-top")); ?>
                            <div class="card-body">
                                <h4 class="card-title"><?php the_title(); ?></h4>
                                <a href="<?php the_permalink() ?>">
                                    <button>En savoir plus</button>
                                </a>
                            </div>
                    </div>


                    <?php 
                            }
                            endwhile; 
                            endif;
                            ?>

                </div>
                <!--A changer quand on va mettre le site en ligne parce c'est un lien absolue ; - ;  (j'ai pas réussis a crée un lien php full cool epik ; - ; -; - ; -; -; -; -; -; ;- ;)-->
                <a href="http://localhost/les_impatients-les_chaussures_kakis/wordpress/wordpress/hub-de-nouvelles/">
                <button class="nouvelles__wrapup__btn">Pour plus de nouvelles</button>
                </a>
            </div>
        </section>

        <!------------------------FIN NOUVELLE------------------------->