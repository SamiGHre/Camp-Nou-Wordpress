<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sparctheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> style="margin:0 auto !important; overflow-x:hidden !important;">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:image" content="http://sparcthemefacilities.com/wp-content/uploads/2020/05/sparctheme-fb.png"/>

	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>  style="overflow-x:hidden;">
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'sparctheme' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container-fluid">
			<div class="row">
				<div class="site-branding col-12 col-xs-10 col-md-3">
					<?php
					the_custom_logo();
                    ?>
                   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
					</button>
                      <?php  
					if ( is_front_page() && is_home() ) :
						?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
					else :
						?>
						<span class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
						<?php
					endif;
					$sparctheme_description = get_bloginfo( 'description', 'display' );
					if ( $sparctheme_description || is_customize_preview() ) :
						?>
						<span class="site-description"><?php echo $sparctheme_description; /* WPCS: xss ok. */ ?></span>
					<?php endif; ?>
				</div><!-- .site-branding -->

				<nav class="navbar navbar-expand-md navbar-dark col-xs-2 col-md-9" role="navigation">
					<!-- Brand and toggle get grouped for better mobile display -->
					
					<a class="navbar-brand" href="#"></a>
						<?php
						wp_nav_menu( array(
							'theme_location'    => 'menu-1',
							'depth'             => 2,
							'container'         => 'div',
							'container_class'   => 'collapse navbar-collapse',
							'container_id'      => 'bs-example-navbar-collapse-1',
							'menu_class'        => 'nav navbar-nav',
							'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
							'walker'            => new WP_Bootstrap_Navwalker(),
						) );
						?>
				</nav>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
