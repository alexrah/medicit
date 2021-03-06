<?php
/** 
Template Name: Portfolio Four Col.
**/
?>
<?php if (get_post_meta($post->ID, 'header_choice_select', true));{ get_header(get_post_meta($post->ID, 'header_choice_select', true)); } ?>
<div id="container_bg">
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/portfolio_effects.js"></script>

<div id="portfolio-four" >

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<div class="portfolio_page_content">
<?php the_content(); ?>
</div>
<?php endwhile; ?>

	<?php $args=array('post_type' => 'portfolio', 'posts_per_page' => -1);
	$loop = new WP_Query($args); 

	// Checks footer 
	if ( get_post_meta($post->ID, 'footer_widget_check', true) != 'on' ) { $footer = 'yes';} else { $footer = 'no';}
	?>

	<!-- Filter-->
	<ul id="filter">
	<li class="current"><a href="#">All</a></li>
	<?php wp_list_categories('taxonomy=services_rendered&title_li=' ); ?>
	</ul>
	<!-- End of Filter-->

	<?php while ($loop->have_posts()) : $loop->the_post(); 	?>
	<div class="portfolio-four-item">
		
	<?php if (has_post_thumbnail ()) : ?>
	<?php 
	$post_term = wp_get_post_terms( $post->ID, 'services_rendered' );
	$category_slug = $post_term[0]->slug;
	$style = get_post_meta($post->ID, 'pf_meta_box_select', true);
	 ?>
	<ul class="portfolio-four">
	<li class="<?php if($category_slug) { echo $category_slug; } else { echo 'all';} ?>">
	<div class="mosaic-block-four <?php echo $style; ?>">
	<?php if ($style != 'magnifier' && $style != 'magnifier2') {?>
	<a href="<?php the_permalink() ?>" class="mosaic-overlay">  
		<div class="details">
		<div class="pf_item_title"><?php the_title(); ?></div>
		<?php the_excerpt(); ?>
		</div>
	<?php } else {?> <a href="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" class="mosaic-overlay"> <?php }?>
	</a> 
	<?php if ($style == 'magnifier2') {?>
		<div class="details">
		<a class="pf_title_link" href="<?php the_permalink() ?>" ><?php the_title(); ?></a>
		</div>
	<?php } ?>
	
	<div class="mosaic-backdrop">
	<?php if ($style != 'magnifier' && $style != 'magnifier2') {?>
	<a href="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ?>"><?php the_post_thumbnail('portfolio-four', array('title' => "")); ?></a>
	<?php } else { ?>
	<?php the_post_thumbnail('portfolio-four', array('title' => "")); ?> 
	<?php } ?>
	</div>	<!-- end mosaic-backdrop -->
	</div>	<!-- end mosaic-block -->
	</li>
	</ul>
	<?php endif; ?> <!-- end of loop -->

	</div>	<!-- end portfolio-four-item -->

<?php endwhile; ?>
<div class="clear"></div>
</div><!--#portfolio-four-->
<br/><br/>
</div><!--#container-->
</div><!-- #wrapper -->
<?php if ($footer == 'yes') { get_sidebar('footer'); } ?>
<?php get_footer('portfolio'); ?>