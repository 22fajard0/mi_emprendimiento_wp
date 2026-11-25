<?php
/**
 * front-page.php — el HOME del sitio (Fajardo Motors V).
 * Se muestra si en Ajustes > Lectura eliges "Una página estática" como página de inicio.
 */
get_header();
?>

<!-- SECCIÓN 1: Portada Hero (promesa de marca, llamada a la acción e imagen) -->
<section class="seccion seccion-hero">
	<div class="contenedor">
		<div class="hero-grid">
			<div class="hero-contenido">
				<span class="hero-badge">Automotora en la V Región · Autos Usados Garantizados</span>
				<h1 class="hero-titulo">Compras tranquilo: autos usados seleccionados y garantizados</h1>
				<p class="hero-subtitulo">
					En <strong>Fajardo Motors V</strong> cada vehículo pasa por una inspección técnica rigurosa en más de 100 puntos. Llévate tu auto con 3 meses de garantía, documentación al día y opciones de financiamiento.
				</p>
				<div class="hero-botones">
					<a class="boton boton-principal" href="#destacados">Ver autos en stock</a>
					<a class="boton boton-whatsapp" href="https://wa.me/56912345678" target="_blank" rel="noopener">Cotizar por WhatsApp</a>
				</div>
				<div class="hero-puntos">
					<span>✓ Inspección de 100+ puntos</span>
					<span>✓ 3 meses de garantía</span>
					<span>✓ Transferencia inmediata</span>
				</div>
			</div>

			<div class="hero-media">
				<?php if ( file_exists( get_template_directory() . '/assets/img/hero-auto.png' ) ) : ?>
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/hero-auto.png" alt="Autos usados seleccionados en Fajardo Motors V" class="hero-img">
				<?php elseif ( file_exists( get_template_directory() . '/assets/img/hero-auto.jpg' ) ) : ?>
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/hero-auto.jpg" alt="Autos usados seleccionados en Fajardo Motors V" class="hero-img">
				<?php else : ?>
					<div class="hero-placeholder">
						<?php if ( file_exists( get_template_directory() . '/assets/img/logo.png' ) ) : ?>
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo.png" alt="Fajardo Motors V" class="hero-logo-img">
						<?php else : ?>
							<div class="placeholder-icono">🚘</div>
						<?php endif; ?>
						<h3>Fajardo Motors V</h3>
						<p>Autos usados con garantía y certificación mecánica</p>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<!-- SECCIÓN 2: Destacados (Autos destacados en stock) -->
<section id="destacados" class="seccion seccion-destacada">
	<div class="contenedor">
		<div class="seccion-encabezado">
			<span class="seccion-tagline">Selección semanal</span>
			<h2 class="seccion-titulo">Autos usados destacados</h2>
			<p class="seccion-subtitulo">
				Unidades 100% inspeccionadas, con historial verificado y listas para entrega con la <strong>Garantía Fajardo</strong> de 3 meses.
			</p>
		</div>

		<div class="autos-grid">
			<!-- Auto 1 -->
			<div class="auto-tarjeta">
				<div class="auto-imagen-contenedor">
					<span class="auto-badge-estado">Garantizado</span>
					<div class="auto-imagen-placeholder">
						<span class="auto-icono">🚙</span>
					</div>
				</div>
				<div class="auto-info">
					<span class="auto-categoria">SUV Familiar</span>
					<h3 class="auto-titulo">Toyota RAV4 2.0 4x2</h3>
					<div class="auto-detalles">
						<span>2021</span>
						<span>·</span>
						<span>48.000 km</span>
						<span>·</span>
						<span>Automático</span>
					</div>
					<div class="auto-precio-caja">
						<span class="auto-precio-etiqueta">Precio al contado</span>
						<p class="auto-precio">$16.990.000</p>
					</div>
					<a href="<?php echo esc_url( home_url( '/contacto' ) ); ?>" class="boton boton-auto">Cotizar este auto</a>
				</div>
			</div>

			<!-- Auto 2 -->
			<div class="auto-tarjeta">
				<div class="auto-imagen-contenedor">
					<span class="auto-badge-estado">Único dueño</span>
					<div class="auto-imagen-placeholder">
						<span class="auto-icono">🚗</span>
					</div>
				</div>
				<div class="auto-info">
					<span class="auto-categoria">Sedán</span>
					<h3 class="auto-titulo">Mazda 3 2.0 V High</h3>
					<div class="auto-detalles">
						<span>2022</span>
						<span>·</span>
						<span>34.000 km</span>
						<span>·</span>
						<span>Mecánico</span>
					</div>
					<div class="auto-precio-caja">
						<span class="auto-precio-etiqueta">Precio al contado</span>
						<p class="auto-precio">$14.490.000</p>
					</div>
					<a href="<?php echo esc_url( home_url( '/contacto' ) ); ?>" class="boton boton-auto">Cotizar este auto</a>
				</div>
			</div>

			<!-- Auto 3 -->
			<div class="auto-tarjeta">
				<div class="auto-imagen-contenedor">
					<span class="auto-badge-estado">Bajo consumo</span>
					<div class="auto-imagen-placeholder">
						<span class="auto-icono">🚘</span>
					</div>
				</div>
				<div class="auto-info">
					<span class="auto-categoria">Hatchback Urbano</span>
					<h3 class="auto-titulo">Suzuki Swift 1.2 GLX</h3>
					<div class="auto-detalles">
						<span>2023</span>
						<span>·</span>
						<span>19.500 km</span>
						<span>·</span>
						<span>Mecánico</span>
					</div>
					<div class="auto-precio-caja">
						<span class="auto-precio-etiqueta">Precio al contado</span>
						<p class="auto-precio">$10.890.000</p>
					</div>
					<a href="<?php echo esc_url( home_url( '/contacto' ) ); ?>" class="boton boton-auto">Cotizar este auto</a>
				</div>
			</div>
		</div>

		<div class="seccion-cta-final">
			<p>¿Buscas una marca o modelo en particular?</p>
			<a href="<?php echo esc_url( home_url( '/contacto' ) ); ?>" class="boton boton-secundario">Solicitar asesoría o cotizar tu vehículo</a>
		</div>
	</div>
</section>

<!-- SECCIÓN 3: Últimas entradas del blog y consejos -->
<section class="seccion seccion-blog-home">
	<div class="contenedor">
		<div class="seccion-encabezado">
			<span class="seccion-tagline">Blog y Guías</span>
			<h2 class="seccion-titulo">Consejos para comprar tu auto usado</h2>
			<p class="seccion-subtitulo">
				Revisa nuestras guías para elegir seguro, entender la inspección mecánica y transferir tu vehículo sin complicaciones.
			</p>
		</div>

		<?php
		$ultimas = new WP_Query( array(
			'posts_per_page'      => 3,
			'ignore_sticky_posts' => 1,
		) );
		?>

		<?php if ( $ultimas->have_posts() ) : ?>
			<div class="blog-home-grid">
				<?php
				while ( $ultimas->have_posts() ) :
					$ultimas->the_post();
					?>
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'tarjeta-blog-home' ); ?>>
						<?php if ( has_post_thumbnail() ) : ?>
							<a href="<?php the_permalink(); ?>" class="tarjeta-blog-img" tabindex="-1" aria-hidden="true">
								<?php the_post_thumbnail( 'medium_large' ); ?>
							</a>
						<?php else : ?>
							<a href="<?php the_permalink(); ?>" class="tarjeta-blog-img tarjeta-blog-placeholder" tabindex="-1" aria-hidden="true">
								<span>📰</span>
							</a>
						<?php endif; ?>

						<div class="tarjeta-blog-cuerpo">
							<p class="tarjeta-blog-meta">
								<span class="meta-fecha"><?php echo esc_html( get_the_date() ); ?></span>
								<span class="meta-separador">·</span>
								<span class="meta-cat"><?php the_category( ', ' ); ?></span>
							</p>

							<h3 class="tarjeta-blog-titulo">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h3>

							<div class="tarjeta-blog-extracto">
								<?php the_excerpt(); ?>
							</div>

							<div class="tarjeta-blog-accion">
								<a href="<?php the_permalink(); ?>" class="enlace-leer-mas">
									Leer artículo &rarr;
								</a>
							</div>
						</div>
					</article>
				<?php endwhile; wp_reset_postdata(); ?>
			</div>
		<?php else : ?>
			<div class="archivo-vacio">
				<h3>Próximamente nuevas guías</h3>
				<p>Estamos redactando consejos y artículos para ayudarte a comprar tu próximo auto con tranquilidad.</p>
			</div>
		<?php endif; ?>

		<div class="seccion-cta-final">
			<a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="boton boton-secundario">Ver todos los artículos del blog</a>
		</div>
	</div>
</section>

<?php get_footer(); ?>
