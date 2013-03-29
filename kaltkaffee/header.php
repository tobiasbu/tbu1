<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>">
	<meta charset="<?php bloginfo('utf-8'); ?>" >
	<meta http-equiv="X-UA-Compatible" content="chrome-1">
	<meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
	
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
	<title>
	<?php if ( function_exists( 'is_tag' ) && is_tag() ) {
		single_tag_title( 'Tag Archive for &quot;' ); echo '&quot; - ';
	} elseif ( is_archive() ) {
		wp_title( '' ); echo 'Archive - ';
	} elseif ( is_search() ) {
		echo 'Search for &quot;'.wp_specialchars($s).'&quot; - ';
	} elseif ( !( is_404() ) && ( is_single() ) || ( is_page() ) ) {
		wp_title( '' ); echo ' - ';
	} elseif ( is_404() ) {
		echo 'Not Found - ';
	}
	if ( is_home() ) {
		bloginfo( 'name' ); echo ' - '; bloginfo( 'description' );
	} else {
		bloginfo( 'name' );
	}
	if ( $paged > 1 ) {
		echo ' - page '. $paged;
	}?>
	</title>

	<link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/images/favicon.ico">
	<link rel="author" href="https://twitter.com/kalt_kaffee">

	<!--[if lt IE 9]>
		<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.1/html5shiv.js"></script>
	<![endif]-->

	<link rel='stylesheet' href='<?php bloginfo('template_directory'); ?>/style/style.css' type='text/css' media='screen'>
	<link rel="stylesheet" media="screen and (max-width: 960px)" href="<?php bloginfo('template_directory'); ?>/style/tablet.css" />
	<link rel="stylesheet" media="screen and (max-width: 780px)" href="<?php bloginfo('template_directory'); ?>/style/pad.css" />
	<link rel="stylesheet" media="screen and (max-width: 524px)" href="<?php bloginfo('template_directory'); ?>/style/phone.css" />
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,400italic,600italic,700italic' rel='stylesheet' type='text/css'/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type='text/javascript'></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.spritely-0.6.1.js" type='text/javascript'></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/script.js" type='text/javascript'></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/labels.js" type='text/javascript'></script>

    <?php wp_head(); ?>
    
</head>

<body <?php body_class(); ?>>

	<header>

		<div class="header-content">

			<div class='menu-panel' id='menu-left'>
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
			</div>

			<div class='menu-panel' id='menu-right'>
				<?php wp_nav_menu( array( 'theme_location' => 'extra-menu') ); ?>
			</div>
	
		<div class='brand'>
			<a href="<?php bloginfo('url'); ?>">
			<div id='brand-smoke'></div>
			<div class='brand-glow'></div>
			<div class='brand-image'></div>
			<h1><?php bloginfo('name'); ?></h1>
		</a>
		</div>

  

	</div>

	</header>

<div class='content-frame'></div>
	<div class='content-frame2'></div>

	<section class="main">