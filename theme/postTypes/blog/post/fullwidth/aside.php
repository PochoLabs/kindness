<?php
/**
 * @package WordPress
 * @subpackage Kindness
 * @since Kindness 1.0
 * 
 * Blog Post Full Width Aside Post Format Template
 * Created by CMSMasters
 * 
 */


global $blog_post_tags;

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('post-article'); ?>>
	<footer class="entry-meta">
		<?php cmsms_meta('post', 'post'); ?>
	</footer>
	<header class="entry-header">
	<?php 
		if (get_the_content() != '') {
			echo '<h5 class="entry-content">' . get_the_content() . '</h5>';
		} else {
			echo '<h5 class="entry-content">' . get_the_excerpt() . '</h5>';
		}
		
		wp_link_pages('before=<div class="subpage_nav"><strong>' . __('Pages', 'cmsmasters') . ':</strong>&link_before= [ &link_after= ] &after=</div>');
	?>
	</header>
	<?php 
		if ($blog_post_tags && get_the_tags()) { 
			cmsms_tags(get_the_ID(), 'post', 'post');
		}
	?>
</article>