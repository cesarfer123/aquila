<?php
/**
 * Template for entry footer
 * 
 * To be used inside of wordpress the loop
 * @package Aquila
 */
    $the_post_id=get_the_ID();
    $article_terms=wp_get_post_terms($the_post_id,['category','post_tags']);
 ?>

 <div class="entry-footer mt-4">
    <?php

    ?>
 </div>