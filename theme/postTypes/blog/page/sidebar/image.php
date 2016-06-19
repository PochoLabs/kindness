<?php
/**
 * @package WordPress
 * @subpackage Kindness
 * @since Kindness 1.0
 * 
 * Blog Page with Sidebar Image Post Format Template
 * Created by CMSMasters
 * 
 */

 
$attachments =& get_children(array(
	'post_type' => 'attachment', 
	'post_mime_type' => 'image', 
	'post_parent' => get_the_ID(), 
	'orderby' => 'menu_order', 
	'order' => 'ASC'
));

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php 
		if (has_post_thumbnail()) {
			echo '<div class="blog_media">';
			
			cmsms_thumb(get_the_ID(), 'slider-thumb', false, 'prettyPhoto', true, true, true, true, false);
			
			echo '</div>';
		} elseif (!has_post_thumbnail() && sizeof($attachments) > 0) {
			foreach ($attachments as $attachment) {
				if (!isset($counter) && $counter = true) {
					echo '<div class="blog_media">';
					
					cmsms_thumb(get_the_ID(), 'slider-thumb', false, 'prettyPhoto', true, true, true, true, $attachment->ID);
					
					echo '</div>';
				}
			}
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