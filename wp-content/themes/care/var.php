<?php { ?>
    <style type="text/css">
		
		body{
		<?php if ( get_post_meta($post->ID, 'page_color_choice', true) ) : ?>
		background-color: <?php echo get_post_meta($post->ID, 'page_color_choice', true) ?> ;
		<?php else : ?>
		background-color:<?php get_option_tree('body_color', '', true); ?>;  
		background-image:url('<?php get_option_tree('body_background_image', '', true); ?>'); 
		background-repeat:<?php get_option_tree('body_background_repeat', '', true); ?>;
		background-position:<?php get_option_tree('body_image_position', '', true); ?>;
		<?php endif; ?> 
		color:<?php get_option_tree('content_text_color', '', true); ?>;
		font-size:<?php get_option_tree('content_text_font_size', '', true); ?>;
		}
			
		a, ul#filter a {color:<?php get_option_tree('link_color', '', true); ?>;}		
		a:hover, .entry-utility a:hover {color:<?php get_option_tree('link_hover_color', '', true); ?>;}
		.entry-utility a {color:<?php get_option_tree('meta_link_color', '', true); ?>;}
		.breadcrumbs, .breadcrumbs a{color:<?php get_option_tree('breadcrumb_color', '', true); ?>;}
		ul#filter li.current a { color:<?php get_option_tree('content_text_color', '', true); ?>;}
		
		h1, h2, h3, h4, h5, h6, h1 a, h2 a, h3 a, h4 a, h5 a, h6 a, #primary .xoxo li .widget-title, .recent_post-title a, .su-service-title, .lb_heading, .su-heading-shell, .su_au_name {color:<?php get_option_tree('heading_color', '', true); ?>;}
		
		h1{font-size:<?php get_option_tree('h1_size', '', true); ?>;}
		h2{font-size:<?php get_option_tree('h2_size', '', true); ?>;}
		h3{font-size:<?php get_option_tree('h3_size', '', true); ?>;}
		h4{font-size:<?php get_option_tree('h4_size', '', true); ?>;}
		h5{font-size:<?php get_option_tree('h5_size', '', true); ?>;}
		h6{font-size:<?php get_option_tree('h6_size', '', true); ?>;}
		
		#horiz_m #logo img {width:<?php get_option_tree('logo_width', '', true); ?>; height:<?php get_option_tree('logo_height', '', true); ?>;}
		#horiz_m #logo, #vert_m #logo {margin-left:<?php get_option_tree('logo_margin_left', '', true); ?>; margin-bottom:<?php get_option_tree('logo_margin_bottom', '', true); ?>;}
		#horiz_m .slidemenu, #vert_m .slidemenu{margin-right:<?php get_option_tree('menu_margin_right', '', true); ?>; margin-bottom:<?php get_option_tree('menu_margin_bottom', '', true); ?>;}
		
		#horiz_m {height:<?php get_option_tree('horizontal_menu_height', '', true); ?>;}
		#horiz_m_bg {background-color:<?php get_option_tree('menu_opt_bg', '', true); ?>; background-image:url('<?php get_option_tree('menu_bg_image', '', true); ?>'); background-repeat:<?php get_option_tree('menu_background_repeat', '', true); ?>; background-position:<?php get_option_tree('menu_background_image_position', '', true); ?>;}
		#horiz_m .slidemenu ul, #vert_m .slidemenu ul{font-size:<?php get_option_tree('menu_font_size', '', true); ?>;}
		#horiz_m .slidemenu ul li a, #vert_m .slidemenu ul li a{color:<?php get_option_tree('menu_opt_link_color', '', true); ?>;}
		#horiz_m .slidemenu ul li ul,#vert_m .slidemenu ul li ul{font-size:<?php get_option_tree('submenu_font_size', '', true); ?>;}
		#horiz_m .slidemenu ul li a:hover, #vert_m .slidemenu ul li a:hover{color:<?php get_option_tree('menu_opt_link_hover', '', true); ?>;}
		#horiz_m .slidemenu ul li ul li a, #vert_m .slidemenu ul li ul li a{background-color:<?php get_option_tree('submenu_bg_color', '', true); ?>;
		color:<?php get_option_tree('submenu_link_color', '', true); ?>;}
		#horiz_m .slidemenu ul li ul li a:hover{color:<?php get_option_tree('submenu_link_hover', '', true); ?>;}
		
		#primary .xoxo li .widget-title{font-size:<?php get_option_tree('sidebar_title_size', '', true); ?>;}
		
		#slider_offer{background-color:<?php get_option_tree('offer_background_color', '', true); ?>; }
					
		#footer-widget-area .widget-area .widget-title {color:<?php get_option_tree('footer_heading_color', '', true); ?>;}
		#footer-widget-area .widget-area ul {color:<?php get_option_tree('footer_content_text_color', '', true); ?>;}
		#footer-widget-area .widget-area ul li ul li a {color:<?php get_option_tree('footer_link_color', '', true); ?>;}
		#footer-widget-area .widget-area ul li ul li a:hover {color:<?php get_option_tree('footer_link_hover_color', '', true); ?>;}
		
		.sliding_sidebar {background-color:<?php get_option_tree('sliding_sidebar_background_color', '', true); ?>;}
		.handle {background-color:<?php get_option_tree('sliding_sidebar_background_color', '', true); ?>!important;}
		#sliding-widget-area {color:<?php get_option_tree('sliding_sidebar_text_color', '', true); ?>;}
		#sliding-widget-area .widget-area .widget-title{color:<?php get_option_tree('sliding_sidebar_heading_color', '', true); ?>;}
		#sliding-widget-area .widget-area ul li ul li a{color:<?php get_option_tree('sliding_sidebar_link_color', '', true); ?>;}
		#sliding-widget-area .widget-area ul li ul li a:hover{color:<?php get_option_tree('sliding_sidebar_link_hover_color', '', true); ?>;}
		
		#copyright{color:<?php get_option_tree('copyright_text_color', '', true); ?>}
		#footer_navigation ul li a, #footer_navigation ul li{color:<?php get_option_tree('footer_menu_link_color', '', true); ?>}
		#footer_navigation ul li a:hover{color:<?php get_option_tree('footer_menu_link_hover_color', '', true); ?>}

		.su-divider-solid {border-color:<?php get_option_tree('sidebar_divider_color', '', true); ?>}
		hr{background-color:<?php get_option_tree('sidebar_divider_color', '', true); ?>}
		#horiz_m_bg{border-color:<?php get_option_tree('header_bottom_border_color', '', true); ?>}
		
		.contact-form input[type='text'], .contact-form textarea {width:<?php get_option_tree('contact_form_width', '', true); ?>}	
		
		div.orbit-wrapper, #featured{ height: <?php get_option_tree('orbit_height', '', true) ?> !important;}
		input[type='submit'], #cancel-comment-reply-link{background-color:<?php get_option_tree('button_background_color', '', true); ?>; color:<?php get_option_tree('button_text_color', '', true); ?>}
		input[type='submit']:hover, #cancel-comment-reply-link:hover {background-color:<?php get_option_tree('button_hover_background_color', '', true); ?>; color:<?php get_option_tree('button_hover_text_color', '', true); ?>}
		<?php  if (get_option_tree('content_opt_bg', '')) {echo '#footer-widget-area {margin-left:0px;}'; } ?> 
		
		#subhead{background-color:<?php get_option_tree('subhead_background_color', '', true); ?>;
		background-image:url('<?php get_option_tree('subhead_bg_img', '', true); ?>');
		background-repeat:<?php get_option_tree('subhead_bg_repeat', '', true); ?>;
		background-position:<?php get_option_tree('subhead_bg_pos', '', true); ?>;}
		
		h1.entry-title-page, #rps .col p.recent_post-title a, #rps .col a, .slide_offer h1, .breadcrumbs a:hover{color:<?php get_option_tree('page_title_color', '', true); ?>;}
		#rps .col, .slide_offer p {color:<?php get_option_tree('subhead_text', '', true); ?>;}
		#footer-widget-area .widget-area ul li ul li, #bottom_elements_background {border-color:<?php get_option_tree('fotter_border_color', '', true); ?>;}
		#bottom_elements_background{background-color:<?php get_option_tree('copy_bg_color', '', true); ?>;}
		#footer-widget-area-background {background-color:<?php get_option_tree('footer_background_color', '', true); ?>;
		background-image:url('<?php get_option_tree('footer_bg_img', '', true); ?>');
		background-repeat:<?php get_option_tree('footer_bg_repeat', '', true); ?>;
		background-position:<?php get_option_tree('footer_bg_pos', '', true); ?>;}


	
    </style>
<?php } ?>