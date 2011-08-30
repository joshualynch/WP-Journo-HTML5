<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !function_exists(core_mods) ) {
		function core_mods() {
			if ( !is_admin() ) {
				wp_deregister_script('jquery');
				wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"), false);
				wp_enqueue_script('jquery');
			}
		}
		core_mods();
	}

	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
	
	// Add shortcode support for widgets
	
	add_filter('widget_text', 'do_shortcode');
	
	// Allow php in widgets
	
	add_filter('widget_text','execute_php',100);
		function execute_php($html){
			 if(strpos($html,"<"."?php")!==false){
				  ob_start();
				  eval("?".">".$html);
				  $html=ob_get_contents();
				  ob_end_clean();
		}
     return $html;
	}
	
	// Add thumbnail support
	
	add_theme_support( 'post-thumbnails' );
    
	add_action( 'widgets_init', 'my_register_sidebars' );
	
	function my_register_sidebars() {
	
	// Register the primary sidebar
	register_sidebar(
		array(
			'id' => 'primary',
			'name' => __( 'Primary Sidebar' ),
			'description' => __( 'Sidebar for the homepage and other pages' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
			)
		);
	
	// Register the single sidebar
	register_sidebar(
		array(
			'id' => 'single',
			'name' => __( 'Posts Sidebar' ),
			'description' => __( 'Sidebar for posts' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
			)
		);
		
	// Register the sitemap sidebar
	register_sidebar(
		array(
			'id' => 'sitemap',
			'name' => __( 'Sitemap Widgets' ),
			'description' => __( 'Sitemap widgets' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
			)
		);		
	}
	
	// Register the footer sidebar
	register_sidebar(
		array(
			'id' => 'footer-widgets',
			'name' => __( 'Footer Widgets' ),
			'description' => __( 'Footer widgets' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
			)
		);	
	
	// Register menus
	
	add_action( 'init', 'register_my_menu' );

	function register_my_menu() {
		register_nav_menu( 'top-navigation', __( 'Top Navigation' ) );
	}
    
    add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'audio', 'chat', 'video')); // Add 3.1 post format theme support.

	// Clean up default pagination
	function show_posts_nav() {
   	global $wp_query;
   	return ($wp_query->max_num_pages > 1);
	}
	
	// Edit user profile fields
	function extra_contact_info($contactmethods) {
		unset($contactmethods['aim']);
		unset($contactmethods['yim']);
		unset($contactmethods['jabber']);
		$contactmethods['user_google_profile'] = 'Google Profile <span class="description">(for author archives)</span>';
		return $contactmethods;
	}

	add_filter('user_contactmethods', 'extra_contact_info');
	
	// Show tweets with template function
	
	function wp_echoTwitter($username){
    include_once(ABSPATH.WPINC.'/rss.php');
    $tweet = fetch_rss("http://search.twitter.com/search.atom?q=from:" . $username . "&rpp=1");
    echo $tweet->items[0]['atom_content'];
}
?>