<?php

/*********************************************** DOTTED FUNCTIONS ****************************************************************/

define('MNKY_FUNCTIONS', TEMPLATEPATH . '/functions');

require_once(MNKY_FUNCTIONS . '/theme_options/index.php');
require_once(MNKY_FUNCTIONS . '/sidebars.php');
require_once(MNKY_FUNCTIONS . '/breadcrumb-trail.php');
require_once(MNKY_FUNCTIONS . '/content_elements.php');
require_once(MNKY_FUNCTIONS . '/portfolio.php');
require_once(MNKY_FUNCTIONS . '/cutom_meta_boxes.php');
require_once(MNKY_FUNCTIONS . '/sidebar/per-page-sidebars.php');
require_once(MNKY_FUNCTIONS . '/pager.php');
require_once(MNKY_FUNCTIONS . '/widgets/social-widget/social-widget.php');
require_once(MNKY_FUNCTIONS . '/widgets/sidebar-login/sidebar-login.php');
require_once(MNKY_FUNCTIONS . '/widgets/recent-posts-widget.php');
require_once(MNKY_FUNCTIONS . '/widgets/twitter.php');
require_once(MNKY_FUNCTIONS . '/recent-posts-slider/recent-posts-slider.php');
require_once(MNKY_FUNCTIONS . '/easy-fancybox/easy-fancybox.php');
require_once(MNKY_FUNCTIONS . '/contact-form/grunion-contact-form.php');
require_once(MNKY_FUNCTIONS . '/shortcodes-ultimate/shortcodes-ultimate.php');

/*********************************************** DOTTED ENQUEUE SCRIPTS *********************************************************/

add_action('wp_enqueue_scripts', 'scripts');
function scripts() {
	if (!is_admin()) {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'http://code.jquery.com/jquery-1.7.1.min.js');
    wp_enqueue_script( 'jquery' );
	}

	
	//Menu
	wp_enqueue_script('menu_drop', get_bloginfo('template_url') . '/js/slidemenu.js', array('jquery'), '', false);
	
	// Portfolio
	if (is_page_template('portfolio-one.php') || is_page_template('portfolio-two.php') || is_page_template('portfolio-three.php') || is_page_template('portfolio-four.php') ) {
	wp_enqueue_style('Portfolio_style', get_bloginfo('template_url') . '/functions/portfolio/stylesheets/screen.css', false, '', 'all');
	wp_enqueue_script('Portfolio', get_bloginfo('template_url') . '/functions/portfolio/scripts/framework.js', array('jquery'), '', false);
	}
	
	if (is_page_template('portfolio-one.php') || is_page_template('portfolio-two.php') || is_page_template('portfolio-three.php') || is_page_template('portfolio-four.php') || is_page_template('paged-portfolio-one.php') || is_page_template('paged-portfolio-two.php') || is_page_template('paged-portfolio-three.php') || is_page_template('paged-portfolio-four.php') ) {
	// Mosaic
	wp_enqueue_style('Mosaic_style', get_bloginfo('template_url') . '/functions/mosaic/css/mosaic.css', false, '', 'all');
	wp_enqueue_script('Mosaic', get_bloginfo('template_url') . '/functions/mosaic/js/mosaic.1.0.1.min.js', array('jquery'), '', false);
	}
	
	// Sliding sidebar
	if (get_option_tree('disable_sliding_sidebar_opt', '')) {} else {
	wp_enqueue_script('TabSlide', get_bloginfo('template_url') . '/js/jquery.tabSlideOut.v1.3.js', array('jquery'), '', false);
	}

	// Contact form	
	wp_enqueue_style('contact_form', get_bloginfo('template_url') . '/functions/contact-form/css/grunion.css', false, '', 'all');
	wp_enqueue_script('contact_form', get_bloginfo('template_url') . '/functions/contact-form/js/jquery-ui-1.8.4.custom.min.js', array('jquery'), '1.8.4', true);
	wp_enqueue_script('contact_form', get_bloginfo('template_url') . '/functions/contact-form/js/grunion.js', array('jquery'), '', true); 
	
	// Cufon
	if (get_option_tree('disable_cufon_fonts', '')) {} else {
	wp_enqueue_script('cufon', get_bloginfo('template_url') . '/js/cufon-yui.js', array('jquery'), '', true);
	}	
	
	// To top
	wp_enqueue_script('top', get_bloginfo('template_url') . '/js/top.js', array('jquery'), '', true);
	
	//Social media widget
	wp_enqueue_style('social_media', get_bloginfo('template_url') . '/functions/widgets/social-widget/social_widget.css', false, '', 'all');

}


/*********************************************** THEME SETUP ****************************************************************/

add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );


register_nav_menus( array(
	'primary' => __( 'Primary Navigation', 'care' ),
	'footer' => __( 'Footer Navigation', 'care' ),
) );


function custom_login_head() {
	$login_logo = get_option_tree('login_logo', '');
	if($login_logo){
	echo "
		<style> 
		body.login #login h1 a {
		background: url('" . get_option_tree('login_logo') . "') no-repeat scroll center bottom transparent;
		height: 80px;
		width: 326px;
		margin-bottom:20px;
		}
		</style>";
	}
}
add_action('login_head', 'custom_login_head');


function custom_login_url() {
  return site_url();
}
add_filter( 'login_headerurl', 'custom_login_url', 10, 4 );


function custom_login_title() {
     return get_bloginfo('name');
}
add_filter('login_headertitle', 'custom_login_title');


function excludeCat($query) {
  if ( $query->is_home ) {
	$excludeCat = get_option_tree('exclude_categories_from_blog', '');
	if($excludeCat){
	$query->set('cat', $excludeCat);
	}
  }
  return $query;
}
add_filter('pre_get_posts', 'excludeCat');

add_filter( 'manage_edit-portfolio_columns', 'my_columns_filter', 10, 1 );
function my_columns_filter( $columns ) {
 	$column_thumbnail = array( 'thumbnail' => 'Thumbnail' );
	$columns = array_slice( $columns, 0, 2, true ) + $column_thumbnail + array_slice( $columns, 1, NULL, true );
	return $columns;
}

add_action( 'manage_posts_custom_column', 'my_column_action', 10, 1 );
function my_column_action( $column ) {
	global $post;
	switch ( $column ) {
		case 'thumbnail':
			echo get_the_post_thumbnail( $post->ID, 'thumbnail' );
			break;
	}
}

function enable_more_buttons($buttons) {
  $buttons[] = 'hr';
  $buttons[] = 'sub';
  $buttons[] = 'sup';
  $buttons[] = 'fontselect';
  $buttons[] = 'fontsizeselect';
  return $buttons;
}
add_filter("mce_buttons_3", "enable_more_buttons");


function theme_language(){
    load_theme_textdomain('care', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'theme_language');


remove_action ('wp_head', 'wp_generator');

?>