<?php
/**
 * single.php — Entrada individual de blog con barra lateral (Fajardo Motors V)
 */
get_header();
?>

<section class="seccion seccion-entrada">
	<div class="contenedor">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="con-lateral">
				<div class="columna-principal">
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'entrada-individual' ); ?>>
						<header class="entrada-header">
							<h1 class="entrada-titulo"><?php the_title(); ?></h1>
							<p class="entrada-meta">
								<span class="meta-fecha"><?php echo esc_html( get_the_date() ); ?></span>
								<span class="meta-separador">·</span>
								<span class="meta-categoria"><?php the_category( ', ' ); ?></span>
							</p>
						</header>

						<?php if ( has_post_thumbnail() ) : ?>
							<div class="entrada-imagen-destacada">
								<?php the_post_thumbnail( 'large' ); ?>
							</div>
						<?php endif; ?>

						<div class="entrada-contenido">
							<?php the_content(); ?>
						</div>

						<footer class="entrada-footer">
							<div class="entrada-cta-fajardo">
								<h3>¿Te interesa este modelo o buscas tu próximo auto?</h3>
								<p>En <strong>Fajardo Motors V</strong> cada auto usado pasa por una rigurosa inspección mecánica y cuenta con garantía. ¡Ven a conocer nuestro stock o cotiza con nuestros asesores!</p>
								<a href="<?php echo esc_url( home_url( '/contacto' ) ); ?>" class="boton">Cotizar o agendar visita</a>
							</div>
						</footer>
					</article>

					<!-- Comentarios (aquí actúa Akismet) -->
					<?php
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
					?>
				</div>

				<aside class="lateral">
					<div class="widget widget-buscar">
						<h2 class="widget-titulo">Buscar</h2>
						<?php get_search_form(); ?>
					</div>

					<div class="widget widget-categorias">
						<h2 class="widget-titulo">Categorías</h2>
						<ul>
							<?php wp_list_categories( array( 'title_li' => '' ) ); ?>
						</ul>
					</div>

					<div class="widget widget-recientes">
						<h2 class="widget-titulo">Entradas recientes</h2>
						<ul>
							<?php
							$recientes = new WP_Query( array( 'posts_per_page' => 5 ) );
							while ( $recientes->have_posts() ) :
								$recientes->the_post();
								?>
								<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
							<?php endwhile; wp_reset_postdata(); ?>
						</ul>
					</div>
				</aside>
			</div>
		<?php endwhile; ?>
	</div>
</section>

<?php get_footer(); ?>
