<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="sitio-header">
	<div class="contenedor">
		<a class="sitio-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<?php if ( file_exists( get_template_directory() . '/assets/img/logo.png' ) ) : ?>
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo.png" alt="Fajardo Motors V" class="logo-img">
			<?php endif; ?>
			<span class="sitio-titulo">Fajardo Motors V</span>
		</a>

		<nav aria-label="Menú principal">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'principal',
				'menu_class'     => 'menu-principal',
				'container'      => false,
				'fallback_cb'    => false,
			) );
			?>
		</nav>
	</div>
</header>

<main>
