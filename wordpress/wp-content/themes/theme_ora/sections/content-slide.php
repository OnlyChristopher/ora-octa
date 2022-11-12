<?php
    global $xs_container_class;
    //global $xs_img_destacada;

    //$bg_front = "";
    //if ( is_front_page() ) {
    //$bg_front = 'background-image: url('.$xs_img_destacada.');';
    //}

    if(is_active_sidebar( 'xs_slide' )):
?>
<section>
          <?php dynamic_sidebar('xs_slide');?>
</section>
<?php
    endif;
