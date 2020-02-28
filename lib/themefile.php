<?php 
// Register Theme Scripts
function theme_enqueue_script(){
	// Register Theme Style
	wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap/bootstrap.min.css');
	wp_register_style('plugin', get_template_directory_uri().'/css/plugin.css');
	wp_register_style('animate', get_template_directory_uri().'/css/animate.css');
	wp_register_style('transition', get_template_directory_uri().'/css/transition.css');
	wp_register_style('icomoon', get_template_directory_uri().'/css/icomoon.css');
	wp_register_style('style', get_template_directory_uri().'/css/style.css');
	wp_register_style('color', get_template_directory_uri().'/css/color-1.css');
	wp_register_style('responsive', get_template_directory_uri().'/css/responsive.css');
	wp_register_style('awesome', get_template_directory_uri().'/css/font-awesome.min.css');
	wp_register_style('switcher', get_template_directory_uri().'/switcher/switcher.css');

	wp_enqueue_style('bootstrap');
	wp_enqueue_style('plugin');
	wp_enqueue_style('animate');
	wp_enqueue_style('transition');
	wp_enqueue_style('icomoon');
	wp_enqueue_style('style');
	wp_enqueue_style('color');
	wp_enqueue_style('responsive');
	wp_enqueue_style('awesome');
	wp_enqueue_style('switcher');
	// Register Theme Style


	// Register Theme Style
	wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/vendor/bootstrap.min.js', array('jquery') );
	wp_enqueue_script('gmap3', get_template_directory_uri().'/js/gmap3.min.js', array('jquery') );
	wp_enqueue_script('parallax', get_template_directory_uri().'/js/parallax.js', array('jquery') );
	wp_enqueue_script('datepicker', get_template_directory_uri().'/js/datepicker.js', array('jquery') );
	wp_enqueue_script('ninja', get_template_directory_uri().'/js/ninja-slider.js', array('jquery') );
	wp_enqueue_script('thumbnail', get_template_directory_uri().'/js/thumbnail-slider.js', array('jquery') );
	wp_enqueue_script('countdown', get_template_directory_uri().'/js/countdown.js', array('jquery') );
	wp_enqueue_script('modal', get_template_directory_uri().'/js/modal.js', array('jquery') );
	wp_enqueue_script('classie', get_template_directory_uri().'/js/classie.js', array('jquery') );
	wp_enqueue_script('big', get_template_directory_uri().'/js/big-slide.js', array('jquery') );
	wp_enqueue_script('carousel', get_template_directory_uri().'/js/owl-carousel.js', array('jquery') );
	wp_enqueue_script('scrollbar', get_template_directory_uri().'/js/scrollbar.js', array('jquery') );
	wp_enqueue_script('prettyPhoto', get_template_directory_uri().'/js/prettyPhoto.js', array('jquery') );
	wp_enqueue_script('contact', get_template_directory_uri().'/js/contact-form.js', array('jquery') );
	wp_enqueue_script('bxslider', get_template_directory_uri().'/js/bxslider.js', array('jquery'));
	wp_enqueue_script('isotope', get_template_directory_uri().'/js/isotope.pkgd.js', array('jquery') );
	wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array('jquery') );
	wp_enqueue_script('modernizr', get_template_directory_uri().'/js/modernizr.js', array('jquery'));

	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap');
	wp_enqueue_script('gmap3');
	wp_enqueue_script('parallax');
	wp_enqueue_script('datepicker');
	wp_enqueue_script('datepicker');
	wp_enqueue_script('ninja');
	wp_enqueue_script('jquery');
	wp_enqueue_script('thumbnail');
	wp_enqueue_script('countdown');
	wp_enqueue_script('modal');
	wp_enqueue_script('classie');
	wp_enqueue_script('big');
	wp_enqueue_script('carousel');
	wp_enqueue_script('scrollbar');
	wp_enqueue_script('prettyPhoto');
	wp_enqueue_script('contact');
	wp_enqueue_script('bxslider');
	wp_enqueue_script('isotope');
	wp_enqueue_script('main');
	wp_enqueue_script('modernizr');


}
add_action('wp_enqueue_scripts', 'theme_enqueue_script');
?>

<!-- Java Script -->
                           