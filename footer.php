<?php
/**
 * @package WordPress
 * @subpackage Kindness
 * @since Kindness 1.0
 *
 * Pages Footer Template
 * Created by CMSMasters
 *
 */


global $disable_bottom_sidebar,
	$site_footer,
	$site_footer_content,
	$footer_html,
	$footer_text,
	$analytic_code,
	$sharing_icons,
	$footer_css,
	$footer_js,
	$footer_social_icons;

$selectedicons = explode(',', $footer_social_icons);

$middlesidebar_active = get_post_meta(get_the_ID(), 'middlesidebar_active', true);

?>

							<div class="cl"></div>
						</div>

<?php if ($middlesidebar_active == 'true' && is_active_sidebar('sidebar_middle')) { ?>
<!-- _________________________ Start Middle Sidebar _________________________ -->
						<section class="middle_sidebar">
						<?php
						if (function_exists('dynamic_sidebar')) {
							dynamic_sidebar('sidebar_middle');
						}
						?>
						</section>
<!-- _________________________ Finish Middle Sidebar _________________________ -->
<?php } ?>

					</div>
				</section>
<!-- _________________________ Finish Middle _________________________ -->

<?php if ($disable_bottom_sidebar == 'true' && is_active_sidebar('sidebar_bottom')) { ?>
<!-- _________________________ Start Bottom _________________________ -->
				<section id="bottom">
					<div class="bottom_inner">
					<?php
					if (function_exists('dynamic_sidebar')) {
						dynamic_sidebar('sidebar_bottom');
					}
					?>
					</div>
				</section>
<!-- _________________________ Finish Bottom _________________________ -->
<?php } ?>

			</div>
<!-- _________________________ Finish Container _________________________ -->

        </section>
<!-- _________________________ Finish Page _________________________ -->


<!-- _________________________ Start Footer _________________________ -->
		<footer id="footer">
			<div class="footer_inner">
				<span><?php echo stripslashes($footer_text); ?></span>
			<?php if ($site_footer) { ?>
				<div class="fr">
				<?php
				if ($site_footer_content == 'html') {
					echo stripslashes($footer_html);
				} elseif ($site_footer_content == 'social') {
					echo '<p class="social_list_title">' . __('Find us elsewhere', 'cmsmasters') . ':</p>' .
					'<ul class="social_list">';

					foreach ($selectedicons as $selectedicon) {
						foreach (get_social_icons() as $socialicon) {
							if ($socialicon->icon_name == $selectedicon && $socialicon->icon_name == 'email') {
								echo '<li>' .
									'<a class="link_tooltip" target="_blank" href="mailto:' . $socialicon->icon_link . '" title="' . $socialicon->icon_tooltip . '">' .
										'<img src="' . get_template_directory_uri() . '/images/social_icons/' . $socialicon->icon_file . '" alt="' . $socialicon->icon_name . '" />' .
									'</a>' .
								'</li>';
							} elseif ($socialicon->icon_name == $selectedicon) {
								echo '<li>' .
									'<a class="link_tooltip" target="_blank" href="' . $socialicon->icon_link . '" title="' . $socialicon->icon_tooltip . '">' .
										'<img src="' . get_template_directory_uri() . '/images/social_icons/' . $socialicon->icon_file . '" alt="' . $socialicon->icon_name . '" />' .
									'</a>' .
								'</li>';
							}
						}
					}

					echo '</ul>';
				} elseif (has_nav_menu('footer')) {
					wp_nav_menu(array(
						'theme_location' => 'footer',
						'container' => '',
						'sort_column' => 'menu_order',
						'menu_id' => 'footer_nav',
						'menu_class' => 'footer_nav'
					));
				}
				?>
				</div>
			<?php } ?>
			</div>
		</footer>
<!-- _________________________ Finish Footer _________________________ -->

		<?php
		if ($analytic_code != '') {
			echo stripslashes($analytic_code);
		}

		wp_footer();
		?>
		<script type="text/javascript">
			jQuery(document).ready(function () {
				jQuery('.cmsms_social').socicons( {
					icons : '<?php echo $sharing_icons; ?>',
					imagesurl : '<?php echo get_template_directory_uri(); ?>/images/share_icons/'
				} );
			} );
		</script>
		<?php
		if ($footer_css != '') {
			echo '<style type="text/css">' .
				stripslashes($footer_css) .
			'</style>';
		}

		if ($footer_js != '') {
			echo '<script type="text/javascript">' .
				stripslashes($footer_js) .
			'</script>';
		}
		?>


	</body>
</html>
