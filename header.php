<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<head id="wpjourno" data-template-set="wpjourno-html5-wordpress-theme">

	<!-- Load Google Fonts -->

	<link href='http://fonts.googleapis.com/css?family=Droid+Sans:regular,bold&v1' rel='stylesheet' type='text/css'>
    
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:regular,italic,bold,bolditalic&v1' rel='stylesheet' type='text/css'>
    
    <link href='http://fonts.googleapis.com/css?family=Monofett&subset=latin&v2&text=WPJourno' rel='stylesheet' type='text/css'>

	<link rel="profile" href="http://gmpg.org/xfn/11" /> 

	<meta charset="<?php bloginfo('charset'); ?>">
	
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<!-- For WordPress SEO plugin-->
	<title><?php wp_title(''); ?></title>

	<meta name="description" content="<?php bloginfo('description'); ?>">
	
	<meta name="author" content="Joshua Lynch">
	<meta name="Copyright" content="Copyright Joshua Lynch 2011. All Rights Reserved.">

	<!-- Dublin Core Metadata : http://dublincore.org/ -->
	<meta name="DC.title" content="WP Journo">
	<meta name="DC.subject" content="About WordPress, journalism and publishers using WP as a CMS">
	<meta name="DC.creator" content="Joshua Lynch">
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	
	<!-- Modernizr -->
	<script src="<?php bloginfo('template_directory'); ?>/js/modernizr-1.7.min.js"></script>
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
        
        <nav id="access" role="navigation">
            
            <?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'top-navigation' ) ); ?>
		
        </nav>
           
        <hgroup id="header" role="banner">
            
			<h1><a href="<?php echo get_option('home'); ?>/" rel="home"><?php bloginfo('name'); ?></a></h1>
                
            <h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
            
        </hgroup>    
        
       	<div id="page-wrap" class="group">