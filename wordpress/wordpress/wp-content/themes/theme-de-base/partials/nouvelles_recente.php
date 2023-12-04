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
                                <a href="<?php the_permalink() ?>">
                                    <button>En savoir plus</button>
                                </a>
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