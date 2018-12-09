<?php 
	/*
		register menu support
	*/
	function ecomMenu()
	{
		if (function_exists('register_nav_menu'))
		{
			register_nav_menu( "main_menu", __("Main menu","ecom") );
			register_nav_menu( "top_menu", __("Top menu","ecom") );
		}
	}
	add_action('init','ecomMenu');

	/*
		Images support
	*/
	add_theme_support("post-thumbnails",array("post","page"));
	set_post_thumbnail_size( 300, 200, true );
	add_image_size( "myFeatureImage", 800, 500, true );


	/*
		widget
	*/
	function ecom_widgets()
	{
		register_sidebar( array(
			'name' 			=> esc_html__('Footer Widget one','ecom'),
			'description'   => esc_html__('This is description are for footer widget','ecom'),
			'id'			=> 'footer_widget_one',
			'before_widget' => '<div class="col-xs-12 col-sm-6 col-md-3">',
			'after_widget'  => '</h4></div>',
			'before_title'  => '<div class="module-heading"><h4 class="module-title">',
			'after_title'   => '</div>'
		));

		register_sidebar( array(
			'name' 			=> esc_html__('Footer Widget two','ecom'),
			'description'   => esc_html__('This is description are for footer widget','ecom'),
			'id'			=> 'footer_widget_two',
			'before_widget' => '<div class="col-xs-12 col-sm-6 col-md-3">',
			'after_widget'  => '</h4></div>',
			'before_title'  => '<div class="module-heading"><h4 class="module-title">',
			'after_title'   => '</div>'
		));
	}
	add_action('widgets_init','ecom_widgets');

	//wp enqueue script

	function ecom_scripts()
	{
		//enqueue style
		wp_enqueue_style( 'bootstrap_css', get_theme_file_uri('/assets/css/bootstrap.min.css'),array(), 'v3.2.0');
		wp_enqueue_style( 'owl.carousel_css', get_theme_file_uri('/assets/css/owl.carousel.css'),array(), 'v1.3.3');
		wp_enqueue_style( 'owl.transitions_css', get_theme_file_uri('/assets/css/owl.transitions.css'),array(), 'v1.3.2');
		wp_enqueue_style( 'animate_css', get_theme_file_uri('/assets/css/animate.min.css'),array(), 'v1.2.0');
		wp_enqueue_style( 'rateit_css', get_theme_file_uri('/assets/css/rateit.css'),array(), 'v3.2.0');
		wp_enqueue_style( 'bootstrap-select_css', get_theme_file_uri('/assets/css/bootstrap-select.min.css'),array(), 'v1.6.2');
		wp_enqueue_style( 'blue_css', get_theme_file_uri('/assets/css/blue.css'),array(), 'v1.0.0');
		wp_enqueue_style( 'main_css', get_theme_file_uri('/assets/css/main.css'),array(), 'v1.0.0');
		wp_enqueue_style( 'font-awesome', get_theme_file_uri('/assets/css/font-awesome.css'),array(), '4.6.2');
		wp_enqueue_style( 'styléheet_css', get_stylesheet_uri(), array(), 'v1.0.0');

		//enqueue script
		wp_enqueue_script('main_js', get_theme_file_uri('/assets/js/jquery-1.11.1.min.js'), array(), 'v1.11.1',true);
		wp_enqueue_script('bootstrap', get_theme_file_uri('/assets/js/bootstrap.min.js'), array(), 'v3.2.0',true);
		wp_enqueue_script('bootstrap-hover-dropdown', get_theme_file_uri('/assets/js/bootstrap-hover-dropdown.min.js'), array(), 'v2.0.11',true);
		wp_enqueue_script('owl.carousel', get_theme_file_uri('/assets/js/owl.carousel.min.js'), array(), 'v1.11.1',true);
		wp_enqueue_script('echo', get_theme_file_uri('/assets/js/echo.min.js'), array(), 'v1.6.0',true);
		wp_enqueue_script('jquery.easing', get_theme_file_uri('/assets/js/jquery.easing-1.3.min.js'), array(), 'v1.3',true);
		wp_enqueue_script('bootstrap-slider', get_theme_file_uri('/assets/js/bootstrap-slider.min.js'), array(), 'v4.0.5',true);
		wp_enqueue_script('jquery.rateit', get_theme_file_uri('/assets/js/jquery.rateit.min.js'), array(), 'v1.0.21',true);
		wp_enqueue_script('lightbox', get_theme_file_uri('/assets/js/lightbox.min.js'), array(), 'v2.7.1',true);
		wp_enqueue_script('bootstrap-select', get_theme_file_uri('/assets/js/bootstrap-select.min.js'), array(), 'v1.6.2',true);
		wp_enqueue_script('wow', get_theme_file_uri('/assets/js/wow.min.js'), array(), 'v0.1.12',true);
		wp_enqueue_script('scripts', get_theme_file_uri('/assets/js/scripts.js'), array(), 'v1.0.0',true);

	}
	add_action('wp_enqueue_scripts','ecom_scripts');
 ?>