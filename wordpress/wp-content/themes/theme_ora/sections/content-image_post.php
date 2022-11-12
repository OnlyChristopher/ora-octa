<?php
/*
    $xs_img_destacada_arr = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
    $xs_img_destacada = (!empty($xs_img_destacada_arr[0])) ? $xs_img_destacada_arr[0]: "";
    if( !empty($xs_img_destacada) )
    {
        echo '<div>';
        echo '<img src="'.$xs_img_destacada.'" class="img_full pb-4"/>';
        echo '</div>';
    }
*/

    //https://developer.wordpress.org/reference/functions/the_post_thumbnail/
    //the_post_thumbnail('entradas', array('class'=>'img_full'));
    the_post_thumbnail('full', array('class'=>'pb-4 '));
    //the_date('','<span class="post-date">','</span>');

