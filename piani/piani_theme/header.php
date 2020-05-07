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


	<header id="masthead" class="site-header">
		<div class="container" >
		<div class="site-branding row">

				<div class="col-5" >
			<?php
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title" style="margin-bottom:8px;"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<h1 class="site-title" style="margin-bottom:8px;"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

				<?php
			endif;
			$piani_theme_description = get_bloginfo( 'description', 'display' );
			if ( $piani_theme_description || is_customize_preview() ) :
				?>

				<p class="site-description"><?php echo $piani_theme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>

			</div>
			<div class="col-5">
				<div class = "align-self-center"><img style = 'float: right; padding-top:30px; height:74px;'  src = "http://3.15.13.29:8000/wp-content/uploads/2020/05/logotype_white@2x-1-e1588619045637.png"/></div>
      </div>

			</div><!--.end flex-body-->
			<?php endif; ?>

		<!-- .site-branding -->
	</div>
	</header><!-- #masthead -->
