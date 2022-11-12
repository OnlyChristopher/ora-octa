<?php
/**
 * Theme para el proyecto OTCA - ORA 
 *
 * Theme desarrollado para  OTCA - ORA, Octubre 2022
 *
 *
 * @package theme_ora
 */

get_header();
global $xs_container_class;
global $xs_img_destacada;
get_template_part( 'sections/content', 'important1' );
get_template_part( 'sections/content', 'featured' );
get_template_part( 'sections/content', 'important1_bg' );
get_template_part( 'sections/content', 'important2' );
get_template_part( 'sections/content', 'important2_bg' );

if ( have_posts() ) :
?>
<section class="xs_content_div">
    <div class="<?php echo $xs_container_class;?>">
        <div class="row">
            <?php if ( is_active_sidebar( 'right' ) ): ?>
                <div class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <?php if ( !empty( get_the_content() ) ): ?>
                            <div class="xs_content_inner">
                        <?php endif; ?>
                                <h2 class="xs_content_title"><?php the_title(); ?></h2>
                                <?php get_template_part( 'sections/content', 'image_post' ); ?>
                                <?php the_content(); ?>
                        <?php if ( !empty( get_the_content() ) ): ?>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; endif; ?>
                </div>
                <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                    <?php get_sidebar('right'); //sidebar-right.php?>
                </div>
            <?php else: ?>
                <!-- div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12" -->
                <?php 
                    if ( have_posts() ) : 
                        while ( have_posts() ) : 
                            the_post(); 
                ?>
                    <?php if ( !empty( get_the_excerpt() ) ): ?>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4 mb-5">
                    <?php endif; ?>

                                    <h4 class="xs_content_title"><?php the_title(); ?></h4>
                                    <?php get_template_part( 'sections/content', 'image_post' ); ?>
                                    <?php the_excerpt(); ?>
                                    <a href="<?php the_permalink();?>" class="btn btn-primary"><?php _e( 'Read more...', 'default' ); ?></a>

                    <?php if ( !empty( get_the_excerpt() ) ): ?>
                        </div>
                    <?php endif; ?>
                <?php   endwhile; 
                    endif; 
                ?>
                <!-- </div> -->
            <?php endif; ?>
        </div>
    </div>
</section>
<?php
endif;
get_template_part( 'sections/content', 'news' );
get_template_part( 'sections/content', 'search' );
get_template_part( 'sections/content', 'social_form' );
get_template_part( 'sections/content', 'important3' );
get_template_part( 'sections/content', 'important3_bg' );
get_template_part( 'sections/content', 'important4' );
get_template_part( 'sections/content', 'important4_bg' );
get_footer();
