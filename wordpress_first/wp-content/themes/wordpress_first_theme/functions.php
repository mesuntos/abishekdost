<?php
add_theme_support( 'post-thumbnails' );
function hook_css() {
    wp_enqueue_style( 'bootstrap.min.css', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style( 'ionicons.min', get_template_directory_uri() . '/css/ionicons.min.css');
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css');
    wp_enqueue_style( 'slider', get_template_directory_uri() . '/css/slider.css');
    wp_enqueue_style( 'owl.carousel', get_template_directory_uri() . '/css/owl.carousel.css');
    wp_enqueue_style( 'owl.theme', get_template_directory_uri() . '/css/owl.theme.css');
    wp_enqueue_style( 'jquery.fancybox.css', get_template_directory_uri() . '/css/jquery.fancybox.css.css');
    wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css');
}
add_action( 'wp_enqueue_scripts', 'hook_css' );

function hook_js(){

    wp_enqueue_script( 'modernizr-2.6.2.min', get_template_directory_uri() . '/js/vendor/modernizr-2.6.2.min.js');
    wp_enqueue_script( 'jquery.min', get_template_directory_uri() . '/js/jquery.min.js');
    wp_enqueue_script( 'owl.carousel.min', get_template_directory_uri() . '/js/owl.carousel.min.js');
    wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js');
    wp_enqueue_script( 'wow.min', get_template_directory_uri() . '/js/wow.min.js');
    wp_enqueue_script( 'slider', get_template_directory_uri() . '/js/slider.js');
    wp_enqueue_script( 'jquery.fancybox', get_template_directory_uri() . '/js/jquery.fancybox.js');
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js') ;
}
add_action( 'wp_enqueue_scripts', 'hook_js' );

function wordpress_first_theme()
{
    add_theme_support('menus');
    register_nav_menus( array(
        'primary'   => __( 'pmenu', 'myfirsttheme' )
    ) );

}
add_action('init', 'wordpress_first_theme');


class Walker_Quickstart_Menu extends Walker {

    // Tell Walker where to inherit it's parent and id values
    var $db_fields = array(
        'parent' => 'menu_item_parent',
        'id'     => 'db_id'
    );

    /**
     * At the start of each element, output a <li> and <a> tag structure.
     *
     * Note: Menu objects include url and title properties, so we will use those.
     */
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $output .= sprintf( "\n<li><a href='%s'%s>%s</a></li>\n",
            $item->url,
            ( $item->object_id === get_the_ID() ) ? ' class="current"' : '',
            $item->title
        );
    }

}
define('OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/options-framework/');
require_once dirname(__FILE__) . '/options-framework/options-framework.php';

?>