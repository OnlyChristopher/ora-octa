<?php
    global $xs_container_class;
    if(is_active_sidebar( 'xs_news' )):
?>
<section>
  <div class="xs_news_div">
    <div class="<?php echo $xs_container_class;?>">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 py-md-5 py-4">
          <?php dynamic_sidebar('xs_news');?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
    endif;
?>
