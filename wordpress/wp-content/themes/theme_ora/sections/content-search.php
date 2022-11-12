<?php
    global $xs_container_class;
    if(is_active_sidebar( 'xs_search' )):
?>
<section>
    <div class="xs_search_div">
        <div class="<?php echo $xs_container_class; ?>">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 py-md-5 py-4">
                    <div class="xs_search_inner">
                        <?php dynamic_sidebar('xs_search'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
    endif;
?>
