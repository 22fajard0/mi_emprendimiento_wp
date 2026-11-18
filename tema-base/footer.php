</main>

<footer class="sitio-footer">
	<div class="contenedor">
		<div class="footer-grid">
			<!-- Columna 1: Marca y propuesta de valor -->
			<div class="footer-col footer-col-marca">
				<h3 class="footer-titulo">Fajardo Motors V</h3>
				<p class="footer-descripcion">
					Automotora de autos usados seleccionados en la V Región. Compras tranquilo con inspección técnica certificada y respaldo legal garantizado.
				</p>
				<p class="footer-garantia-badge">
					<strong>Garantía Fajardo:</strong> 3 meses de cobertura mecánica.
				</p>
			</div>

			<!-- Columna 2: Enlaces rápidos -->
			<div class="footer-col footer-col-enlaces">
				<h4 class="footer-subtitulo">Navegación</h4>
				<ul class="footer-menu">
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Inicio</a></li>
					<li><a href="<?php echo esc_url( home_url( '/quienes-somos' ) ); ?>">Quiénes somos</a></li>
					<li><a href="<?php echo esc_url( home_url( '/garantia-fajardo' ) ); ?>">Garantía Fajardo</a></li>
					<li><a href="<?php echo esc_url( home_url( '/preguntas-frecuentes' ) ); ?>">Preguntas frecuentes</a></li>
					<li><a href="<?php echo esc_url( home_url( '/contacto' ) ); ?>">Contacto y Cotización</a></li>
				</ul>
			</div>

			<!-- Columna 3: Contacto y redes -->
			<div class="footer-col footer-col-contacto">
				<h4 class="footer-subtitulo">Atención y Contacto</h4>
				<ul class="footer-contacto-info">
					<li><strong>WhatsApp:</strong> <a href="https://wa.me/56912345678" target="_blank" rel="noopener">+56 9 1234 5678</a></li>
					<li><strong>Correo:</strong> <a href="mailto:ignaciofajardo87@gmail.com">ignaciofajardo87@gmail.com</a></li>
					<li><strong>Ubicación:</strong> Viña del Mar / Valparaíso, Chile</li>
					<li><strong>Horario:</strong> Lun a Sáb: 09:30 a 19:00 hrs</li>
				</ul>

				<div class="footer-redes">
					<a href="#" class="red-enlace" aria-label="Instagram">Instagram</a>
					<a href="#" class="red-enlace" aria-label="Facebook">Facebook</a>
					<a href="https://wa.me/56912345678" class="red-enlace" target="_blank" rel="noopener" aria-label="WhatsApp">WhatsApp</a>
				</div>
			</div>
		</div>

		<div class="footer-inferior">
			<p>&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. Todos los derechos reservados.</p>
			<p class="footer-creditos">Compras tranquilo · Autos usados seleccionados</p>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
