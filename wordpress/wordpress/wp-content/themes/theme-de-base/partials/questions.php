
<?php
					$questions = new WP_Query("post_type=foire-au-question");
                        if ( $questions->have_posts() ) : 
                            while ( $questions->have_posts() ) : $questions->the_post(); ?>
                            
                    <div class="services__wrapup__contenus__wrapupDropdown--sourligner__atelier dropdown">
                        <button class="btn dropdown-toggle" type="button" id="dropdownAtelier" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <?php the_title(); ?>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownAtelier">
                            <p>
                            <?php the_content(); ?>
                            </p>
                        </div>
                    </div>


                    <?php
                            endwhile; 
                            endif;
                            ?>