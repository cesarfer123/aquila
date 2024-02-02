<?php 
/**
 * 
 * Template for entry content.
 * 
 * to be used inside wordpress the loop
 * 
 * @package Aquila
 */
?>

<div class="entry-content"> 

    <?php 
        if(is_single()){
            the_content(
                sprintf(
                    wp_kses(
                        __('Continue reading %s <span class="meta-nav">&rarr;</span>','aquila'),
                        [
                            'span'=>[
                                'class'=>[]
                            ]
                        ]
                    ),the_title('<span clas="screen-reader-text">"','"</span>',false)
                ),
            );

            wp_link_pages(
                [
                    'before'=>'<div class="page-links">'. esc_html__('Pages:','aquila'),
                    'after'=>'</div>'
                ]
            );
            
        }else{
            aquila_the_excerpt(20);
            echo '<br>' . aquila_excerpt_more();
        }

        
    ?>
</div>