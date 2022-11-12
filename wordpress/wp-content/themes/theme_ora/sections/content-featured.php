<?php
    global $xs_container_class;
    if(is_active_sidebar( 'xs_featured1' ) || is_active_sidebar( 'xs_featured2' ) || is_active_sidebar( 'xs_featured3' )):
?>
<section>
  <div class="<?php echo $xs_container_class;?>">
    <div class="row">
	  <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 my-md-5 my-2">
        <div class="xs_featured1_div">
          <?php dynamic_sidebar('xs_featured1');?>
        </div>
      </div> 
	  <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 my-md-5 my-1">
        <div class="xs_featured2_div">
          <?php dynamic_sidebar('xs_featured2');?>
        </div>
      </div>          
      <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 my-md-5 my-2">
        <div class="xs_featured3_div">
          <?php dynamic_sidebar('xs_featured3');?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
    endif;
?>
