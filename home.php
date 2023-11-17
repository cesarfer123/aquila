<?php
/**
 * Main template file.
 * 
 * @package Aquila
 */

 get_header();

?>

<div id="primary">
    <div id="main" class="site-main mt-5" role="main">

        <?php
            if ( have_posts() ) { ?>
            
            <div class="container">
                <?php 
                    if(is_home() && !is_front_page()){   ?>
                    <div class="mb-5">
                        <h1>
                            <?php single_post_title(); ?>
                        </h1>
                    </div>
                <?php

                    }
                ?>


                <?php 
                    while ( have_posts() ) : the_post(); ?>

                    <h2><?php the_title(); ?></h2>    
                    <p><?php the_content(); ?></p>    
                        


                <?php
                    endwhile;
                ?>
            </div>

        <?php
                
            }
        ?>
    </div>
</div>

<?php

get_footer(); 
 
