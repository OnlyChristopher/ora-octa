<?php
    global $xs_container_class;
    if(is_active_sidebar( 'xs_important2_bg' )):
?>
<section>
    <div class="xs_important2_bg_div  xs_important_inverse">
        <div class="<?php echo $xs_container_class;?>">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <?php dynamic_sidebar('xs_important2_bg');?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
    endif;
?>