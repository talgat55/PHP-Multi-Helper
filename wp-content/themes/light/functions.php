<?php


add_theme_support('post-thumbnails');
/**
 * Enqueue scripts and styles.
 */
function th_scripts()
{
    // Theme stylesheet.
    wp_enqueue_style('th-style', get_stylesheet_uri());
    wp_enqueue_style('bootstrapcdn', get_theme_file_uri('/assets/css/bootstrap.min.css'), array(), '');
    wp_enqueue_style('fontawesome-all', get_theme_file_uri('/assets/css/fontawesome-all.css'), array(), '');
    wp_enqueue_style('prism-all', get_theme_file_uri('/assets/css/prism.css'), array(), '');

    wp_enqueue_style('main-style', get_theme_file_uri('/assets/css/style.css'), array(), '');


    wp_enqueue_script('jquery', get_theme_file_uri('/assets/js/jquery-3.2.1.min.js'), array(), '');
    wp_enqueue_script('isotope', get_theme_file_uri('/assets/js/isotope.pkgd.min.js'), array(), '');
    wp_enqueue_script('prism-sj', get_theme_file_uri('/assets/js/prism.js'), array(), '');
    wp_enqueue_script('default', get_theme_file_uri('/assets/js/default.js'), array(), '');
//
//    wp_enqueue_style('lg-transitions', get_theme_file_uri('/assets/css/lg-transitions.css'), array(), '');
//    wp_enqueue_style('lightgallery', get_theme_file_uri('/assets/css/lightgallery.css'), array(), '');
//
//    wp_enqueue_style('normalize', get_theme_file_uri('/assets/css/normalize.css'), array(), '');
//    wp_enqueue_style('slick', get_theme_file_uri('/assets/css/slick.css'), array(), '');
//    wp_enqueue_style('slick-theme', get_theme_file_uri('/assets/css/slick-theme.css'), array(), '');
//
//
//
//    wp_enqueue_script('slick.min', get_theme_file_uri('/assets/js/slick.min.js'), array(), '');
//    wp_enqueue_script('jquery.matchHeight', get_theme_file_uri('/assets/js/jquery.matchHeight.js'), array(), '');
//    wp_enqueue_script('jquery.inputmask', 'https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js', array(), '');
//    wp_enqueue_script('lightgallery.min', get_theme_file_uri('/assets/js/lightgallery.min.js'), array(), '');
//    wp_enqueue_script('lg-fullscreen.min', get_theme_file_uri('/assets/js/lg-fullscreen.min.js'), array(), '');
//    wp_enqueue_script('lg-thumbnail.min', get_theme_file_uri('/assets/js/lg-thumbnail.min.js'), array(), '');
//    wp_enqueue_script('lg-hash.min', get_theme_file_uri('/assets/js/lg-hash.min.js'), array(), '');
//    wp_enqueue_script('lg-zoom.min', get_theme_file_uri('/assets/js/lg-zoom.min.js'), array(), '');
//    wp_enqueue_script('jquery.nav', get_theme_file_uri('/assets/js/jquery.nav.js'), array(), '');
//
//


    wp_enqueue_script('default', get_theme_file_uri('/assets/js/default.js'), array(), '');


}

add_action('wp_enqueue_scripts', 'th_scripts');



add_action( 'widgets_init', 'register_my_widgets' );
function register_my_widgets(){
    register_sidebar( array(
        'name'          => sprintf(__('Sidebar %d'), 1 ),
        'id'            => "sidebar-1",
        'description'   => '',
        'class'         => '',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => "</li>\n",
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => "</h2>\n",
    ) );
}