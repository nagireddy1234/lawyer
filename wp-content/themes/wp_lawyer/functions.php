<?

add_theme_support('post-thumbnails');

// uploading styles and scripts
if( !is_admin() ){

		wp_enqueue_style( "bootstrap", get_stylesheet_directory_uri() . "/css/bootstrap.min.css" );
		wp_enqueue_style( "style", get_stylesheet_directory_uri() . "/style.css" );

		

	


	wp_enqueue_script( "bootstrap-bundle", get_stylesheet_directory_uri() . "/js/bootstrap.bundle.js" );
	wp_enqueue_script( "bootstrap", get_stylesheet_directory_uri() . "/js/bootstrap.js" );
	wp_enqueue_script( "jquery", get_stylesheet_directory_uri() . "/js/jquery.js" );
	wp_enqueue_script( "jquery-slim", get_stylesheet_directory_uri() . "/js/jquery.slim.min.js" );
wp_enqueue_script( "bootstrap-bundle", get_stylesheet_directory_uri() . "/js/bootstrap.bundle.min.js" );
	wp_enqueue_script( "bootstrap", get_stylesheet_directory_uri() . "/js/bootstrap.min.js" );
	wp_enqueue_script( "jquery", get_stylesheet_directory_uri() . "/js/jquery.min.js" );
	wp_enqueue_script( "jquery-slim", get_stylesheet_directory_uri() . "/js/jquery.slim.min.js" );
	wp_enqueue_script( "bootstrap-bundle", get_stylesheet_directory_uri() . "/js/slider.js" );

	
}

?>