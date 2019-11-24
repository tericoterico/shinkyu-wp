<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shinkyu
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="p-site">
	<?php /*
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'shinkyu' ); ?></a>
	*/ ?>
	<header id="masthead" class="site-header">
		<div class="p-logo">
			<div class="p-logo-main">
				<a href="/">
					<img src="<?php echo get_template_directory_uri() . "/img/logo-rsd.svg" ?>" alt="">
				</a>
			</div>
			<div class="p-logo-sub">
				東大阪 河内花園<br>
				鍼灸院
			</div>
		</div>


		<nav class="p-nav">
			<div><svg xmlns="http://www.w3.org/2000/svg" width="864" height="36" viewBox="0 0 864 36"><path d="M576 0v10.381l-576 8.119 576 8.118v9.382h288v-36z"/></svg></div>
			<div><svg xmlns="http://www.w3.org/2000/svg" width="864" height="36" viewBox="0 0 864 36"><path d="M288 36v-10.381l576-8.119-576-8.118v-9.382h-288v36h288z"/></svg></div>
		</nav>
		<div class="p-menu">
			<div class="p-menu_layer"></div>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</div>
<?php /*
		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'shinkyu' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
*/ ?>
		</header><!-- #masthead -->

	<div id="content" class="site-content">
