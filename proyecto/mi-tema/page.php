<?php
/**
 * page.php — Plantilla para páginas individuales (Quiénes somos, Contacto, Garantía, etc.)
 * Fajardo Motors V
 */
get_header();
?>

<section class="seccion seccion-pagina">
	<div class="contenedor">
		<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'pagina-individual' ); ?>>
				<header class="pagina-header">
					<h1 class="pagina-titulo"><?php the_title(); ?></h1>
				</header>

				<?php if ( has_post_thumbnail() ) : ?>
					<div class="pagina-imagen-destacada">
						<?php the_post_thumbnail( 'large' ); ?>
					</div>
				<?php endif; ?>

				<div class="pagina-contenido">
					<?php the_content(); ?>
				</div>
			</article>
		<?php endwhile; ?>
	</div>
</section>

<?php get_footer(); ?>
