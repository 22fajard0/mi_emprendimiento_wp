<?php
/**
 * archive.php — Listado de entradas por categoría o etiqueta (Fajardo Motors V)
 */
get_header();
?>

<section class="seccion seccion-archivo">
	<div class="contenedor">
		<header class="archivo-header">
			<?php the_archive_title( '<h1 class="archivo-titulo">', '</h1>' ); ?>
			<?php the_archive_description( '<div class="archivo-descripcion">', '</div>' ); ?>
		</header>

		<?php if ( have_posts() ) : ?>
			<div class="archivo-grid">
				<?php while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'tarjeta-entrada' ); ?>>
						<?php if ( has_post_thumbnail() ) : ?>
							<a href="<?php the_permalink(); ?>" class="tarjeta-imagen" tabindex="-1" aria-hidden="true">
								<?php the_post_thumbnail( 'medium_large' ); ?>
							</a>
						<?php endif; ?>

						<div class="tarjeta-cuerpo">
							<p class="tarjeta-meta">
								<span class="meta-fecha"><?php echo esc_html( get_the_date() ); ?></span>
							</p>

							<h2 class="tarjeta-titulo">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h2>

							<div class="tarjeta-extracto">
								<?php the_excerpt(); ?>
							</div>

							<div class="tarjeta-accion">
								<a href="<?php the_permalink(); ?>" class="enlace-leer-mas">
									Leer artículo &rarr;
								</a>
							</div>
						</div>
					</article>
				<?php endwhile; ?>
			</div>

			<div class="archivo-paginacion">
				<?php
				the_posts_pagination( array(
					'mid_size'  => 2,
					'prev_text' => '← Anterior',
					'next_text' => 'Siguiente →',
				) );
				?>
			</div>
		<?php else : ?>
			<div class="archivo-vacio">
				<h2>No se encontraron publicaciones</h2>
				<p>Actualmente no hay artículos publicados en esta sección de <strong>Fajardo Motors V</strong>.</p>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="boton">Volver al inicio</a>
			</div>
		<?php endif; ?>
	</div>
</section>

<?php get_footer(); ?>
