<?php
/**
 * @package WordPress
 * @subpackage Kindness
 * @since Kindness 1.0
 * 
 * Blog Page Full Width Aside Post Format Template
 * Created by CMSMasters
 * 
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<footer class="entry-meta">
		<?php cmsms_meta(); ?>
	</footer>
	<header class="entry-header">
		<?php echo '<h5 class="entry-content">' . theme_excerpt(55, false) . '</h5>'; ?>
	</header>
	<div class="entry-meta">
	<?php 
		cmsms_comments();
		
		cmsms_tags(get_the_ID(), 'post', 'page');
	?>
	</div>
</article>