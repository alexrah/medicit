<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' | '; } ?><?php bloginfo('name'); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="shortcut icon" href="<?php get_option_tree('favicon', '', true); ?>" />
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" />

<link rel="stylesheet" href="mobile-all.css" type="text/css" media="screen" />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if IE 7 ]>
<link href="<?php bloginfo('template_url'); ?>/ie7.css" media="screen" rel="stylesheet" type="text/css">
<![endif]-->
<!--[if IE 8 ]>
<link href="<?php bloginfo('template_url'); ?>/ie8.css" media="screen" rel="stylesheet" type="text/css">
<![endif]-->
<!--[if lte IE 6]>
<div id="ie-message">Your browser is obsolete and does not support this webpage. Please use newer version of your browser or visit <a href="http://www.ie6countdown.com/" target="_new">Internet Explorer 6 countdown page</a>  for more information. </div>
<![endif]-->
<?php 
if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' );
wp_head(); 
?>

<?php include 'var.php'; ?>  
</head>
<body <?php body_class(); ?>>

<!-- *******************************Logo & Menu****************************** -->
<div id="horiz_m_bg">
<?php get_sidebar('top') ?>
<div id="horiz_m">

<div id="logo">
<a href="<?php bloginfo('url'); ?>"><img src="<?php get_option_tree('logo_uploud', '', true); ?>" alt="<?php bloginfo('name'); ?>" /></a>
</div><!--#logo-->

<div id="main_menu" class="slidemenu">
<?php wp_nav_menu( array('theme_location' => 'primary', 'container' => false, 'fallback_cb' => false)); ?>  
</div><!--#main_menu-->

</div><!--#horiz_m-->
</div><!--#horiz_m_bg-->

<!-- *******************************Subhead********************************** -->
<div id="subhead">
<?php if (get_option_tree('disable_subhead_inner_shadows', '')) {} else { 
echo '<div class="subhead_shadow"></div>'; } ?>
<div class="page_title">
<?php if ( is_home() ) { echo '<h1 class="entry-title-page">', wp_title (''). '</h1>', breadcrumbs_plus(); } 
elseif ( is_search() ) { ?> 
<h1 class="entry-title-page"><?php $search_title = get_option_tree('search_results_for'); 
	if ($search_title){ echo $search_title . ' <span>' . get_search_query() . '</span>'; } 
	else { printf( __( 'Search Results for: %s', 'care' ), '<span>' . get_search_query() . '</span>' );} ?>
</h1>
<?php breadcrumbs_plus(); ?>
<?php } elseif ( is_404() ) { ?> 
<h1 class="entry-title-page" style="text-align:center"> <?php
$title_404 = get_option_tree('title_404', '', true); 
if ($title_404){ $title_404; }
else{ _e('Page Not Found', 'care'); }?>
</h1>
<?php } elseif (is_category() || is_tag() ){ 
echo '<h1 class="entry-title-page">', single_cat_title() .'</h1>', breadcrumbs_plus(); } 
elseif (is_archive() ){ ?>
<h1 class="entry-title-page"> 
<?php if ( is_day() ) : ?>
<?php printf( __( 'Daily Archives: <span>%s</span>', 'care' ), get_the_date() ); ?>
<?php elseif ( is_month() ) : ?>
<?php printf( __( 'Monthly Archives: <span>%s</span>', 'care' ), get_the_date( 'F Y' ) ); ?>
<?php elseif ( is_year() ) : ?>
<?php printf( __( 'Yearly Archives: <span>%s</span>', 'care' ), get_the_date( 'Y' ) ); ?>
<?php else : ?>
<?php _e( 'Archives', 'care' ) ?>
<?php endif; ?>
</h1>
<?php breadcrumbs_plus(); ?>
<?php } else { echo '<h1 class="entry-title-page">', the_title(). '</h1>', breadcrumbs_plus(); } ?>
</div>
<?php if (get_option_tree('disable_subhead_inner_shadows', '')) {} else { 
echo '<div class="subhead_shadow_bottom"></div>'; }?>
</div>

<!-- *******************************Wrapper********************************** -->
<div id="wrapper">
