<?php
    global $xs_container_class;
    if(is_active_sidebar( 'xs_social' ) || is_active_sidebar( 'xs_form' )):
?>
<section>
  <div class="<?php echo $xs_container_class;?>">
    <div class="row">
      <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 my-md-5 my-5">
        <div class="xs_social_div">
          <?php dynamic_sidebar('xs_social');?>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 my-md-5 my-2">
        <div class="xs_form_div">
          <?php dynamic_sidebar('xs_form');?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
    endif;
?>
