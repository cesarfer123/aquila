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

                <div class="row">
                    <?php 
                    $index=0;
                    $no_of_columns=3;
                    // comienza el recorrido
                    while ( have_posts() ) : the_post(); 
                
                        if(0===$index%$no_of_columns){
                        
                    ?>
                        <div class="col-lg-4 col-md-6 col-sm-12">

                        <?php
                    }
                    
                        get_template_part('template-parts/content');

                    
                    $index++;

                    if(0!==$index && 0===$index%$no_of_columns){  ?>
                        </div>


                    <?php
                    }
                        endwhile;
                    ?>
                </div>

                <!-- <div class="row">
                    <?php
                    while(have_posts()): the_post(); ?>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div>
                            <h3><?php the_title(); ?></h3>    
                            <div class="content"><?php the_content(); ?></div>   
                        </div>
                    </div>
                
                <?php
                    endwhile;
                    ?>
                </div> -->
            </div>

        <?php
                
            }else {
                get_template_part('template-parts/content-none');

            }

            get_template_part('template-parts/content-none');
        ?>

    </div>
</div>

<?php

get_footer(); 
 
