<?php
get_header();
global $xs_container_class;

get_template_part( 'sections/content', 'important1' );
get_template_part( 'sections/content', 'featured' );
get_template_part( 'sections/content', 'important1_bg' );
get_template_part( 'sections/content', 'important2' );
get_template_part( 'sections/content', 'important2_bg' );

if ( have_posts() ) :
?>
<section class="xs_content_div">
<div class="xs_content_inner">
  <div class="<?php echo $xs_container_class;?>">
    <div class="row">

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
