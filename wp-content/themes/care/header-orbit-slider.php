<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' | '; } ?><?php bloginfo('name'); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="shortcut icon" href="<?php get_option_tree('favicon', '', true); ?>" />
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" />

<link rel="stylesheet" href="wp-content/themes/care/mobile-all.css" type="text/css" media="screen" />

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
require_once(MNKY_FUNCTIONS . '/orbit/orbit_param.php');
wp_enqueue_style('Orbit_style', get_bloginfo('template_url') . '/functions/orbit/css/orbit-1.2.3.css', false, '', 'all');
if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' );
wp_head(); 
?>

<script type="text/javascript">   
var $j = jQuery.noConflict();

$j(function(){ 
$j(window).load(function() 
{         
$j('#featured').orbit();

   });

});
</script>

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
<?php require_once(MNKY_FUNCTIONS . '/orbit/orbit_slider.php');	?>
<?php if (get_option_tree('disable_subhead_inner_shadows', '')) {} else { 
echo '<div class="subhead_shadow_bottom"></div>';} ?>
</div><!--#subhead-->


<!-- *******************************Wrapper********************************** -->
<div id="wrapper">
