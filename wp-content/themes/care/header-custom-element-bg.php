<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' | '; } ?><?php bloginfo('name'); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="shortcut icon" href="<?php get_option_tree('favicon', '', true); ?>" />
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen" />
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
<?php if ( get_post_meta($post->ID, 'custom_header_id', true) ) : ?>
	<div id="subhead">
	<?php if (get_option_tree('disable_subhead_inner_shadows', '')) {} else { 
echo '<div class="subhead_shadow"></div>'; } ?>
	<div id="custom_header">
	<img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID, 'custom_header_id', true)); ?> " alt="<?php bloginfo('name'); ?>" />
	</div><!--#custom_header-->
	<?php if (get_option_tree('disable_subhead_inner_shadows', '')) {} else { 
echo '<div class="subhead_shadow_bottom"></div>'; } ?>
	</div>
<?php else : ?>
	<?php if ( get_post_meta($post->ID, 'custom_header_html', true) ) : ?>
	<div id="subhead">
	<?php if (get_option_tree('disable_subhead_inner_shadows', '')) {} else { 
	echo '<div class="subhead_shadow"></div>'; } ?>
	<div id="custom_header">
	<?php echo do_shortcode (get_post_meta($post->ID, 'custom_header_html', true)); ?>
	</div><!--#custom_header-->
	<?php if (get_option_tree('disable_subhead_inner_shadows', '')) {} else { 
	echo '<div class="subhead_shadow_bottom"></div>'; } ?>
	</div>
	<?php endif; ?>
<?php endif; ?>
<?php if ( is_home() ) { echo '<div id="subhead"><div id="custom_header">', do_shortcode( get_option_tree('blog_header_html')) . '</div></div>'; } ?>

<!-- *******************************Wrapper********************************** -->
<div id="wrapper">