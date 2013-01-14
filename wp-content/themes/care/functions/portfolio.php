<?php
/* ==============================
  CUSTOM POST TYPE - PORTFOLIO
  =========================================================== */
add_image_size('portfolio', 418, 230, true);
add_image_size('portfolio-two', 459, 250, true);
add_image_size('portfolio-three', 293, 250, true);
add_image_size('portfolio-four', 210, 210, true);
add_image_size('portfolio-single', 946, 0, false);


/* =================
  CUSTOM MORE LINK
  ========================================================= */

function the_more() {
    global $post;
	$portfolio_read = get_option_tree('port_read', ''); 
    if (strpos($post->post_content, '<!--more-->')):
        $the_more = '<p class="more"><a href="' . get_permalink() . '" class="button" title="' . get_the_title() . '">';
		if ( $portfolio_read ) {  $the_more .= $portfolio_read; }
		else { $the_more .= 'Read more'; }
        $the_more .= '</a></p>';
        echo $the_more;
    endif;
}
function exclude_category($query) {
if ( $query->is_home() ) {
$exclude_cat = get_option_tree('exclude_cat', '');
if($exclude_cat){
$query->set('cat', $exclude_cat);
}
}
return $query;
}
add_filter('pre_get_posts', 'exclude_category');

  
/* ==============================
  CUSTOM POST TYPE - PORTFOLIO
  =========================================================== */

add_action('init', 'create_portfolio');

function create_portfolio() {
    $portfolio_args = array(
        'label' => __('Portfolio', 'care'),
        'singular_label' => __('Portfolio', 'care'),
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments')
		);
    register_post_type('portfolio', $portfolio_args);
	
}

add_action('init', 'services_rendered', 0);

function services_rendered() {
    register_taxonomy(
            'services_rendered',
            'portfolio',
            array(
                'hierarchical' => true,
                'label' => 'Categories',
                'query_var' => true,
                'rewrite' => true
            )
    );
}
?>