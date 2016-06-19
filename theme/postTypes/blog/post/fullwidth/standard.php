<?php
/**
 * @package WordPress
 * @subpackage Kindness
 * @since Kindness 1.0
 * 
 * Blog Post Full Width Standard Post Format Template
 * Created by CMSMasters
 * 
 */


global $blog_post_title, 
	$blog_post_tags;

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('post-article'); ?>>
	<footer class="entry-meta">
		<?php cmsms_meta('post', 'post'); ?>
	</footer>
	<header class="entry-header">
	<?php 
		if ($blog_post_title) { 
			cmsms_heading_nolink(get_the_ID());
		}
	?>
	</header>
    <?php 
		if (has_post_thumbnail()) { 
			echo '<div class="cmsms_media">';
			
			cmsms_thumb(get_the_ID(), 'full-thumb', false, 'prettyPhoto', true, false, true, true, false);
			
			echo '</div>';
		}
	?>
	<div class="entry-content">
    <?php 
		the_content();
		
		wp_link_pages('before=<div class="subpage_nav"><strong>' . __('Pages', 'cmsmasters') . ':</strong>&link_before= [ &link_after= ] &after=</div>');
	?>
	</div>
	<?php 
	if ($blog_post_tags && get_the_tags()) {
		cmsms_tags(get_the_ID(), 'post', 'post');
	}
	?>
</article>