<?php
/**
 * @package swl
 * @since swl 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'swl' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href="<?php echo bloginfo( 'template_url'); ?>/favicon.ico" rel="icon" type="image/x-icon" />

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->


<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site container">

	<?php do_action( 'before' ); ?>
	
		<header id="masthead" class="site-header" role="banner">
			
			<div class="row">
				<div class="three columns">
			
					<h1 class="site-title">
						<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
							<img src="<?php bloginfo( 'template_url' ); ?>/images/swl-logo5.png" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
						</a>
					</h1>
					
				</div><!--/four columns -->
				
				<div class="nine columns">
		
					<nav role="navigation" class="site-navigation main-navigation clearfix">
					
						<h1 class="assistive-text"><?php _e( 'Menu', 'swl' ); ?></h1>
	
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '','menu_class' => 'menu nav-bar' ) ); ?>
						
					</nav><!-- .site-navigation .main-navigation -->
					
					<ul id="secondary-nav" class="link-list">
						<li class="blog"><a href="<?php echo bloginfo( 'home' ); ?>" title="blog">blog</a></li>
						<?php wp_list_categories('title_li='); ?>
					</ul>					
						
				</div><!-- /eight columns -->
			</div><!--/row -->
			
			<div class="row">
				<div class="twelve columns">
					<hr />
				</div>
			</div>
							
		</header><!-- #masthead .site-header -->
			

		<div id="main" class="site-main clearfix">