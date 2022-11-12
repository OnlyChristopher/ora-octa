<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WP_Bootstrap_4
 */

get_header();
include "inc/template-tags.php";
$lang = substr( get_locale(), 0,2);
if($lang == 'es'):
    $geoamazon = "Geoamazonía";
    $cites = "Cites";
	$wp = "Noticias / Páginas";
    $indicadores = "Indicadores";
	$noResults = 'No existen resultados';
	$readmore = 'Leer más';
	$searchResults = 'Resultados de búsqueda para';
elseif($lang == 'en'):
	$geoamazon = "Geoamazon";
	$cites = "Cites";
	$wp = "News / Pages";
	$indicadores = "Indicators";
	$noResults = 'No results';
	$readmore = 'Read more';
	$searchResults = 'Search Results for';
else:
	$geoamazon = "Geoamazonia";
	$cites = "Cites";
	$wp = "Notícias / páginas";
	$indicadores = "Indicadores";
	$noResults = 'Não há resultados';
	$readmore = 'Ler mais';
	$searchResults = 'Resultados da busca por';
endif;
$default_sidebar_position = 'no';
?>

    <div class="container p-5">
    <div class="row">
        <div class="col">
            <ul class="nav nav-tabs pt-5 mt-5" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                       aria-selected="true"><?php echo $wp; ?></a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                       aria-selected="false"><?php echo $cites; ?></a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
                       aria-selected="false"><?php echo $indicadores; ?></a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#geoamazonia" role="tab" aria-controls="geoamazonia"
                       aria-selected="false"><?php echo $geoamazon; ?></a>
                </li>
            </ul>
        </div>
    </div>
        <div class="col">
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    <div class="col-md-12  mb-5 wp-bp-content-width">
            <section id="primary" class="content-area">
                <main id="main" class="site-main">
					<?php
					if ( have_posts() ) : ?>
                        <header class="page-header  mt-5">
                            <h1 class="page-title"><?php
								/* translators: %s: search query. */
								printf( esc_html__( $searchResults.': %s' ), '<span>' . get_search_query() . '</span>' );
								?></h1>
                        </header><!-- .page-header -->

						<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part( 'template-parts/content', 'search' );

						endwhile;

						the_posts_navigation( array(
							'next_text' => esc_html__( 'Newer Posts', 'wp-bootstrap-4' ),
							'prev_text' => esc_html__( 'Older Posts', 'wp-bootstrap-4' ),
						) );

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
					?>
                </main><!-- #main -->
            </section><!-- #primary -->

        </div>
        </div>
        <!-- /.row -->
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="col-md-12 mb-5">
		    <?php
		    if ( ! empty( $_REQUEST['s'] ) ) {
			    include_once 'search-cites.php';
		    }else{
			    echo "<div class='alert alert-warning'>".$noResults."</div>";
		    }
		    ?>
            </div>
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <div class="col-md-12 mb-5">
		        <?php
		        if ( ! empty( $_REQUEST['s'] ) ) {
			        include_once 'search-indicators.php';
		        }else{
			        echo "<div class='alert alert-warning'>".$noResults."</div>";
		        }
		        ?>
            </div>
        </div>
        <div class="tab-pane fade" id="geoamazonia" role="tabpanel" aria-labelledby="geoamazonia-tab">
            <div class="col-md-12 mb-5">
		        <?php
		        if ( ! empty( $_REQUEST['s'] ) ) {
			        include_once 'search-geoamazonia.php';
		        }else{
			        echo "<div class='alert alert-warning'>".$noResults."</div>";
		        }
		        ?>
            </div>
        </div>
    </div>
</div>
</div>
</div>
    <!-- /.container -->

<?php
get_footer();
