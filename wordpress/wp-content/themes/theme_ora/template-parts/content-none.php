<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WP_Bootstrap_4
 */
$lang = substr( get_locale(), 0,2);
if($lang == 'es'):
	$notfound = 'Lo siento, pero nada coincide con los términos de búsqueda. Vuelva a intentarlo con algunas palabras clave diferentes.';
	$noResults = 'No existen resultados';
elseif($lang == 'en'):
	$noResults = 'No results';
	$notfound= 'Sorry, but nothing matched your search terms. Please try again with some different keywords.';
else:
	$noResults = 'Não há resultados';
	$notfound = 'Desculpe, mas nada corresponde aos seus termos de pesquisa. Por favor, tente novamente com algumas palavras-chave diferentes.';
endif;

?>

<section class="no-results not-found card mt-3r">
	<div class="card-body">
		<header class="page-header">
			<h1 class="page-title"><?php esc_html_e( $noResults ); ?></h1>
		</header><!-- .page-header -->

		<div class="page-content">
			<?php
			if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

				<p><?php
					printf(
						wp_kses(
							/* translators: 1: link to WP admin new post page. */
							__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'wp-bootstrap-4' ),
							array(
								'a' => array(
									'href' => array(),
								),
							)
						),
						esc_url( admin_url( 'post-new.php' ) )
					);
				?></p>

			<?php elseif ( is_search() ) : ?>

				<p><?php esc_html_e(
						$notfound
                    ); ?></p>
				<?php
					get_search_form();

			else : ?>

				<p><?php esc_html_e( $notfound ); ?></p>
				<?php
					get_search_form();

			endif; ?>

		</div><!-- .page-content -->
	</div>
	<!-- /.card-body -->
</section><!-- .no-results -->
