<?php

	/**
	 * Register administration page
	 */
	function shortcodes_ultimate_add_admin() {
		add_options_page( __( 'Shortcodes', 'care' ), __( 'Shortcodes', 'care' ), 'manage_options', 'shortcodes-ultimate', 'shortcodes_ultimate_admin_page' );
	}

	/**
	 * Administration page
	 */
	function shortcodes_ultimate_admin_page() {

		$checked = ' checked="checked"';
		$disabled_formatting = ( get_option( 'su_disable_custom_formatting' ) == 'on' ) ? $checked : '';
		$disabled_compatibility = ( get_option( 'su_compatibility_mode' ) == 'on' ) ? $checked : '';
		$disabled_scripts = get_option( 'su_disabled_scripts' );
		$disabled_styles = get_option( 'su_disabled_styles' );
		?>

		<!-- .wrap -->
		<div class="wrap">

			<div id="icon-options-general" class="icon32"><br /></div>
			<h2><?php _e( 'Shortcodes Ultimate', 'shortcodes-ultimate' ); ?></h2>

			<!-- #su-wrapper -->
			<div id="su-wrapper">

				<?php su_save_notification(); ?>

				<div id="su-tabs">
					<a class="su-current"><span><?php _e( 'About', 'care' ); ?></span></a>
					<a><span><?php _e( 'Settings', 'care' ); ?></span></a>
					<a><span><?php _e( 'Custom CSS', 'care' ); ?></span></a>
					<a><span><?php _e( 'Shortcodes', 'care' ); ?></span></a>
					<a><span><?php _e( 'Demo', 'care' ); ?></span></a>
				</div>
				<div class="su-pane">
					<p class="su-message su-message-error"><?php _e( 'For full functionality of this page it is recommended to enable JavaScript.', 'care' ); ?> <a href="http://www.enable-javascript.com/" target="_blank"><?php _e( 'Instructions', 'care' ); ?></a></p>
					<div class="su-onethird-column">
						<h3><?php _e( 'FREE Support', 'care' ); ?></h3>
						<p><a href="http://wordpress.org/tags/shortcodes-ultimate?forum_id=10" target="_blank"><?php _e( 'Support forum', 'care' ); ?></a></p>
						<p><a href="http://twitter.com/gn_themes" target="_blank"><?php _e( 'Twitter', 'care' ); ?></a></p>
						<p><a href="http://ilovecode.ru/?p=122#commentform" target="_blank" style="color:red"><?php _e( 'Bug report', 'care' ); ?></a></p>
					</div>

					<div class="su-twothird-column">
						<h3><?php _e( 'Do you love this plugin?', 'care' ); ?></h3>
						<p><?php _e( 'Buy author a beer', 'care' ); ?> - <a href="http://ilovecode.ru/donate/" target="_blank" style="color:red"><?php _e( 'Donate', 'care' ); ?></a></p>
						<p><a href="http://wordpress.org/extend/plugins/shortcodes-ultimate/" target="_blank"><?php _e( 'Rate this plugin at wordpress.org', 'care' ); ?></a> (<?php _e( '5 stars', 'care' ); ?>)</p>
						<p><?php _e( 'Review this plugin in your blog', 'care' ); ?></p>
						<p><iframe src="http://www.facebook.com/plugins/like.php?href=http://wordpress.org/extend/plugins/shortcodes-ultimate/&amp;layout=button_count&amp;show_faces=false&amp;width=130&amp;action=like&amp;colorscheme=light&amp;height=24" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:130px; height:24px;" allowTransparency="true"></iframe></p>
					</div>

					<div class="su-clear"></div>
				</div>
				<div class="su-pane">
					<form action="" method="post" id="su-form-save-settings">
						<p class="su-message su-message-loading"><?php _e( 'Saving...', 'care' ); ?></p>
						<p class="su-message su-message-success"><?php _e( 'Settings saved', 'care' ); ?></p>
						<table class="fixed">
							<tr>
								<td width="250">
									<p><label><input type="checkbox" name="su_disable_custom_formatting" <?php echo $disabled_formatting; ?> /> <?php _e( 'Disable custom formatting', 'care' ); ?></label></p>
								</td>
								<td>
									<p><small><?php _e( 'Enable this option if you have some problems with other plugins or content formatting', 'care' ); ?></small></p>
								</td>
							</tr>
							<tr>
								<td>
									<p><label><input type="checkbox" name="su_compatibility_mode" <?php echo $disabled_compatibility; ?> /> <?php _e( 'Compatibility mode', 'care' ); ?></label></p>
								</td>
								<td>
									<p><small><?php _e( 'Enable this option if you have some problems with other plugins that uses similar shortcode names', 'care' ); ?><br/><code>[button] => [gn_button]</code><br/><a href="http://wordpress.org/support/topic/plugin-shortcodes-ultimate-shortcode-within-a-shortcode?replies=8#post-2081166" target="_blank"><?php _e( 'Forum topic', 'care' ); ?></a></small></p>
								</td>
							</tr>
							<tr>
								<td colspan="2"><h4><?php _e( 'Disable scripts', 'care' ); ?></h4></td>
							</tr>
							<tr>
								<td>
									<p><label><input type="checkbox" name="su_disabled_scripts[jquery]" <?php echo ( isset( $disabled_scripts['jquery'] ) ) ? $checked : ''; ?> /> <?php _e( 'Disable', 'care' ); ?> jQuery</label></p>
									<p><label><input type="checkbox" name="su_disabled_scripts[nivo-slider]" <?php echo ( isset( $disabled_scripts['nivo-slider'] ) ) ? $checked : ''; ?> /> <?php _e( 'Disable', 'care' ); ?> Nivo Slider</label></p>
									<p><label><input type="checkbox" name="su_disabled_scripts[jcarousel]" <?php echo ( isset( $disabled_scripts['jcarousel'] ) ) ? $checked : ''; ?> /> <?php _e( 'Disable', 'care' ); ?> jCarousel</label></p>
									<p><label><input type="checkbox" name="su_disabled_scripts[jwplayer]" <?php echo ( isset( $disabled_scripts['jwplayer'] ) ) ? $checked : ''; ?> /> <?php _e( 'Disable', 'care' ); ?> JW Player</label></p>
									<p><label><input type="checkbox" name="su_disabled_scripts[init]" <?php echo ( isset( $disabled_scripts['init'] ) ) ? $checked : ''; ?> /> <?php _e( 'Disable', 'care' ); ?> Init</label></p>
								</td>
								<td>
									<p><small><?php _e( 'Check scripts, that you want to exclude form wp_head section', 'care' ); ?><br/><span class="su-warning"><?php _e( 'Be careful with this settings!', 'care' ); ?></span></small></p>
								</td>
							</tr>
							<tr>
								<td colspan="2"><h4><?php _e( 'Disable styles', 'care' ); ?></h4></td>
							</tr>
							<tr>
								<td>
									<p><label><input type="checkbox" name="su_disabled_styles[nivo-slider]" <?php echo ( isset( $disabled_styles['nivo-slider'] ) ) ? $checked : ''; ?> /> <?php _e( 'Disable', 'care' ); ?> <code>nivo-slider.css</code></label></p>
									<p><label><input type="checkbox" name="su_disabled_styles[jcarousel]" <?php echo ( isset( $disabled_styles['jcarousel'] ) ) ? $checked : ''; ?> /> <?php _e( 'Disable', 'care' ); ?> <code>jcarousel.css</code></label></p>
									<p><label><input type="checkbox" name="su_disabled_styles[style]" <?php echo ( isset( $disabled_styles['style'] ) ) ? $checked : ''; ?> /> <?php _e( 'Disable', 'care' ); ?> <code>style.css</code></label></p>
								</td>
								<td>
									<p><small><?php _e( 'Check stylesheets, that you want to exclude form wp_head section', 'care' ); ?><br/><span class="su-warning"><?php _e( 'Be careful with this settings!', 'care' ); ?></span></small></p>
								</td>
							</tr>
							<tr><td><br/></td><td><br/></td></tr>
							<tr>
								<td colspan="2">
									<input type="submit" value="<?php _e( 'Save settings', 'care' ); ?>" class="button-primary su-submit" />
									<span class="su-spin"><img src="<?php echo su_plugin_url(); ?>/images/admin/spin.gif" alt="" /></span>
									<div class="su-clear"></div>
									<input type="hidden" name="save" value="true" />
								</td>
							</tr>
						</table>
					</form>
				</div>
				<div class="su-pane">
					<form action="" method="post" id="su-form-save-custom-css">
						<p class="su-message su-message-loading"><?php _e( 'Saving...', 'care' ); ?></p>
						<p class="su-message su-message-success"><?php _e( 'Custom CSS saved', 'care' ); ?></p>
						<p><?php _e( 'You can add custom styles, that will override defaults', 'care' ); ?></p>
						<p><a href="<?php echo su_plugin_url(); ?>/css/style.css" target="_blank"><?php _e( 'See original styles', 'care' ); ?></a> ( <a href="<?php echo su_plugin_url(); ?>/css/nivoslider.css" target="_blank">nivoslider.css</a>, <a href="<?php echo su_plugin_url(); ?>/css/jcarousel.css" target="_blank">jcarousel.css</a> )</p>
						<p><textarea id="su-custom-css" name="su_custom_css" rows="14" cols="90"><?php echo get_option( 'su_custom_css' ); ?></textarea></p>
						<p>
							<input type="submit" value="<?php _e( 'Save styles', 'care' ); ?>" class="button-primary su-submit" />
							<span class="su-spin"><img src="<?php echo su_plugin_url(); ?>/images/admin/spin.gif" alt="" /></span>
							<span class="su-clear"></span>
							<input type="hidden" name="save-css" value="true" />
						</p>
					</form>
				</div>
				<div class="su-pane">
					<table class="widefat fixed su-table-shortcodes">
						<tr>
							<th width="150"><?php _e( 'Shortcode', 'care' ); ?></th>
							<th width="200"><?php _e( 'Parameters', 'care' ); ?></th>
							<th><?php _e( 'Usage', 'care' ); ?></th>
						</tr>
						<?php
						foreach ( su_shortcodes() as $id => $shortcode ) {
							?>
							<tr>
								<td>
									<strong><?php echo $id; ?></strong><br/>
									<small><?php echo $shortcode['desc']; ?></small>
								</td>
								<td>
									<?php
									foreach ( $shortcode['atts'] as $attr_name => $attr ) {
										echo '<strong>' . $attr['desc'] . '</strong><br/>';
										echo $attr_name;
										if ( $attr['values'] ) {
											echo '="' . implode( '|', $attr['values'] ) . '"';
										} elseif ( $attr['default'] ) {
											echo '="' . $attr['default'] . '"';
										}
										echo '<br/>';
									}
									?>
								</td>
								<td><?php echo str_replace( '&lt;br/&gt;', '<br/>', htmlspecialchars( $shortcode['usage'] ) ); ?></td>
							</tr>
			<?php
		}
		?>
					</table>
				</div>
				<div class="su-pane">
					<table class="widefat fixed su-table-demos">
						<tr>
							<th width="100"><?php _e( 'Shortcode', 'care' ); ?></th>
							<th><?php _e( 'Demo', 'care' ); ?></th>
						</tr>
		<?php
		foreach ( su_shortcodes() as $id => $shortcode ) {
			?>
							<tr>
								<td>
									<strong><?php echo $shortcode['name']; ?></strong><br/>
									<small><?php echo $shortcode['desc']; ?></small>
								</td>
								<td><img src="<?php echo su_plugin_url(); ?>/images/demo/<?php echo $id; ?>.png" width="530" alt="<?php echo $shortcode['name']; ?>" /></td>
							</tr>
			<?php
		}
		?>
					</table>
				</div>
			</div>
			<!-- /#su-wrapper -->

		</div>
		<!-- /.wrap -->
		<?php
	}

	add_action( 'admin_menu', 'shortcodes_ultimate_add_admin' );
?>