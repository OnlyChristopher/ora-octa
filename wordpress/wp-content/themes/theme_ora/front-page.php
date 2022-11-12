<?php
get_header();
global $xs_container_class;

get_template_part( 'sections/content', 'important1' );
get_template_part( 'sections/content', 'featured' );
get_template_part( 'sections/content', 'important1_bg' );
get_template_part( 'sections/content', 'important2' );
get_template_part( 'sections/content', 'important2_bg' );

if ( !is_front_page() ) {
?>
<section class="xs_content_div">
    <div class="<?php echo $xs_container_class;?>">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <h2 class="xs_content_title"><?php the_title(); ?></h2>
            </div>
        </div>
        <div class="row">
            <?php
            $args = array(
            'posts_per_page' => 10
            );
            $entradas = new WP_Query($args);
            while($entradas->have_posts()):
                $entradas->the_post();
            ?>
                <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                    <?php
                    the_post_thumbnail('entradas', array('class'=>'img_full'));
                    ?>
                    <div class="contenido-entrada">
                        <?php
                        the_title('<h3>','</h3>');
                        ?>
                        <span class="post-date"><?php the_time(get_option('date_format'));?></span>
                        <p><?php the_author();?></p>
                        <a href="<?php the_permalink();?>" class="button red"><?php _e( 'Read more...', 'default' ); ?></a>
                    </div>
                </div>
            <?php
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>
<?php
}
get_template_part( 'sections/content', 'news' );
get_template_part( 'sections/content', 'search' );
get_template_part( 'sections/content', 'social_form' );
get_template_part( 'sections/content', 'important3' );
get_template_part( 'sections/content', 'important3_bg' );
get_template_part( 'sections/content', 'important4' );
get_template_part( 'sections/content', 'important4_bg' );
get_footer();
