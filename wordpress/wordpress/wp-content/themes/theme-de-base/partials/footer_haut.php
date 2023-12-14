<section class="footer__compagnie">
    <div class="footer__compagnie__titre">
        <h2>Nous poursuivons <em>notre action grâce à</em></h2>
    </div>
    <div class="footer__compagnie__logos">
        <?php
					$logos= new WP_Query("post_type=logo");
                        if ( $logos->have_posts() ) : 
                            while ( $logos->have_posts() ) : $logos->the_post(); 
                            ?>

        <a href="<?php the_field("lien"); ?>">
            <?php the_post_thumbnail("medium", array("class" => "card-img-top")); ?>
        </a>
        <?php 
                            endwhile; 
                            endif;
                            ?>
    </div>
</section>