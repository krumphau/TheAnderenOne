<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package piani_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'piani_theme' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
      <div class="flex-body">
				<div class="flex-column">
				<!-- Collapse button -->
          <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
	           aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span class="white-text"><i
			       class="fas fa-bars fa-1x"></i></span></button>

        </div>
 <!-- Collapsible content -->
				<div class="flex-column">
			<?php
			//the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
      <div>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			</div>
				<?php
			else :
				?>
      <div>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			</div>
		</div>
				<?php
			endif;
			$piani_theme_description = get_bloginfo( 'description', 'display' );
			if ( $piani_theme_description || is_customize_preview() ) :
				?>
				<div><p class="site-description"><?php echo $piani_theme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			  </div>
			</div>
			<div class="flex-row">
				<div style='float: right;'><img style = 'float:right; height:74px;'  src = "http://3.15.13.29:8000/wp-content/uploads/2020/05/logotype_white@2x-1-e1588619045637.png"/></div>
      </div>
			</div><!--.end flex-body-->
			<?php endif; ?>

		<!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'piani_theme' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
