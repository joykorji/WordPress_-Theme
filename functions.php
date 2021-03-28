<?php 

    require_once('wp-bootstrap-navwalker.php');

    //add featured image support 
    add_theme_support( 'post-thumbnails' );
/**
 * 
 *  Functions to add my Custom styles
 *  added by @Joy Korji 
 *  wp_enqueue_style()
 */

 function korji_add_styles(){
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('fontawesome-css', get_template_directory_uri() . '/css/font-awesome.min.css');
    wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css');

 }


/**
 * 
 *  Functions to add my Custom sscripts
 *  added by @Joy Korji 
 *  wp_enqueue_script()
 */

function korji_add_scripts(){

    wp_deregister_script( 'jquery' ); // remove registered jquery from wordpress
    wp_register_script( 'jquery', includes_url('/js/jquery/jquery.js'), false, '', true ); // here we registered the new jquery
    wp_enqueue_script( 'jquery');

    wp_enqueue_script('my-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery') , false , true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array() , false , true);

}


/**
 * 
 *  Functions to add my Custom sscripts
 *  added by @Joy Korji 
 *  wp_enqueue_scripts()
 */

 add_action('wp_enqueue_scripts', 'korji_add_styles');
 add_action('wp_enqueue_scripts', 'korji_add_scripts');



 
/**
 * 
 *  Add custom menu support 
 *  added by @Joy Korji 
 *  
 */

 function korji_register_custom_menu(){

    register_nav_menus(array(

        'bootstrap-menu' => 'Navigation Bar',
        'footer-menu' => 'Footer Menu',
        // 'container' => false,
        // 'depth' => 2,
        // 'walker' => new wp_bootstrap_navwalker()

    ));


 }


 add_action( 'init', 'korji_register_custom_menu' ); // this means when you do init >> run korji_register_custom_menu


 function korji_bootstrap_menu(){
    wp_nav_menu(array(
        'theme_location' => 'bootstrap-menu',
        'menu_class' => 'nav navbar-nav navbar-right'

    ));
 }

 // changing the word length of the_excerpt( ) 

 function korji_extend_excerpt_length($length){
    if(is_author()){
        return 40;
    } else {
    return 15; 
    }
 }

 add_filter( 'excerpt_length', 'korji_extend_excerpt_length' );
 
 // changing the dots that comes after the specific words length

 function korji_extend_excerpt_change_dots($more){
     return '...';
 }

 add_filter( 'excerpt_more', 'korji_extend_excerpt_change_dots' );

 function numbering_pagination(){

     global $wp_query; 

     $all_pages = $wp_query->max_num_pages;

     $current_page = max(1,get_query_var('paged'));  // get current page

     if($all_pages > 1){ 
        return paginate_links(array(
            'base'      => get_pagenum_link( ) . '%_%',
            'format'    => 'page/%#%', 
            'current'   => $current_page,
            'total'     => $all_pages,
            'mid_size'  => 1,
            'end_size'  => 1

        ));
     }
 }