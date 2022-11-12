<?php
/*
*Template name: Entrada Single limpia
*/
get_header();
global $xs_container_class;

get_template_part( 'sections/content', 'important1' );
get_template_part( 'sections/content', 'featured' );
get_template_part( 'sections/content', 'important1_bg' );
get_template_part( 'sections/content', 'important2' );
get_template_part( 'sections/content', 'important2_bg' );

if ( have_posts() ) :
?>
<section class="xs_content_div ccc">
  <div class="<?php echo $xs_container_class;?> yyy">
    <div class="row">
      <div class="col-12 col-sm-8 col-md-8 col-lg-8">
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
      <div class="col-12 col-sm-4 col-md-4 col-lg-4">
        <?php get_sidebar("right");?>
      </div>
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

