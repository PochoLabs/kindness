<?php
/**
 * @package WordPress
 * @subpackage Kindness
 * @since Kindness 1.0
 * 
 * Blog Page Full Width Gallery Post Format Template
 * Created by CMSMasters
 * 
 */


$attachments =& get_children(array(
	'post_type' => 'attachment', 
	'post_mime_type' => 'image', 
	'post_parent' => get_the_ID(), 
	'orderby' => 'menu_order', 
	'order' => 'ASC', 
	'exclude' => get_post_thumbnail_id(get_the_ID()) 
));

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if (sizeof($attachments) > 1 || (sizeof($attachments) == 1 && has_post_thumbnail())) { ?>
		<div class="shortcode_slideshow" id="slideshow_<?php the_ID(); ?>">
			<div class="shortcode_slideshow_body">
				<script type="text/javascript">
					jQuery(window).load(function () { 
						jQuery('#slideshow_<?php the_ID(); ?> .shortcode_slideshow_slides').cmsmsResponsiveContentSlider( { 
							sliderWidth : '100%', 
							sliderHeight : 'auto', 
							animationSpeed : 500, 
							animationEffect : 'slide', 
							animationEasing : 'easeInOutExpo', 
							pauseTime : 0, 
							activeSlide : 1, 
							touchControls : true, 
							pauseOnHover : false, 
							arrowNavigation : false, 
							slidesNavigation : true 
						} ); 
					} );
				</script>
				<div class="shortcode_slideshow_container">
					<ul class="shortcode_slideshow_slides responsiveContentSlider">
					<?php 
					if (has_post_thumbnail()) {
						echo '<li>' . 
							'<figure>' . 
								wp_get_attachment_image(get_post_thumbnail_id(get_the_ID()), 'full-slider-thumb', false, array( 
									'class' => 'fullwidth', 
									'alt' => cmsms_title(get_the_ID(), false), 
									'title' => cmsms_title(get_the_ID(), false) 
								)) . 
							'</figure>' . 
						'</li>';
					}
					
					foreach ($attachments as $attachment) {
						echo '<li>' . 
							'<figure>' . 
								wp_get_attachment_image($attachment->ID, 'full-slider-thumb', false, array( 
									'class' => 'fullwidth', 
									'alt' => cmsms_title(get_the_ID(), false), 
									'title' => cmsms_title(get_the_ID(), false) 
								)) . 
							'</figure>' . 
						'</li>';
					}
					?>
					</ul>
				</div>
			</div>
		</div>
	<?php 
		} else if (sizeof($attachments) == 1 && !has_post_thumbnail()) {
			foreach ($attachments as $attachment) {
				echo '<div class="blog_media">';
				
				cmsms_thumb(get_the_ID(), 'full-slider-thumb', false, 'prettyPhoto', true, true, true, true, $attachment->ID);
				
				echo '</div>';
			}
		} else if (has_post_thumbnail()) {
			echo '<div class="blog_media">';
			
			cmsms_thumb(get_the_ID(), 'full-slider-thumb', false, 'prettyPhoto', true, true, true, true, false);
			
			echo '</div>';
		}
	?>
	<footer class="entry-meta">
		<?php cmsms_meta(); ?>
	</footer>
	<header class="entry-header">
		<?php cmsms_heading(get_the_ID()); ?>
	</header>
	<?php 
		cmsms_exc_cont();
		
		cmsms_more(get_the_ID());
	?>
	<div class="entry-meta">
	<?php 
		cmsms_comments();
		
		cmsms_tags(get_the_ID(), 'post', 'page');
	?>
	</div>
</article>