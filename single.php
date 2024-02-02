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
                    <header class="mb-5">
                        <h1 class="page-title screen-reader-text">
                            <?php single_post_title(); ?>
                        </h1>
                    </header>
                <?php

                    }
                ?>


                <?php 
                    while ( have_posts() ) : the_post(); ?>
                        
                        <?php get_template_part('template-parts/content'); ?>

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
 
