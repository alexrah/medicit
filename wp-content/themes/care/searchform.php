<?php
/**
 * The template for displaying search forms
 */
?>
	<div class="searchform">
	<form method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			<input type="text" value="" name="s" class="s" />
			<input type="submit" class="searchsubmit" value="<?php _e('Search', 'care'); ?>" />
			</form>
	</div>