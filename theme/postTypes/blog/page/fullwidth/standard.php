<?php
/**
 * @package WordPress
 * @subpackage Kindness
 * @since Kindness 1.0
 * 
 * Blog Page Full Width Standard Post Format Template
 * Created by CMSMasters
 * 
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php 
		if (has_post_thumbnail()) { 
			echo '<div class="blog_media">';
			
			cmsms_thumb(get_the_ID(), 'full-thumb', true, false, true, false, true, true, false);
			
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