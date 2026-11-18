<?php
/**
 * single.php — Entrada individual de blog (Fajardo Motors V)
 */
get_header();
?>

<section class="seccion seccion-entrada">
	<div class="contenedor">
		<?php while ( have_posts() ) : the_post(); ?>
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
		<?php endwhile; ?>
	</div>
</section>

<?php get_footer(); ?>
