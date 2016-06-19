<?php
/**
 * @package WordPress
 * @subpackage Kindness
 * @since Kindness 1.0
 * 
 * Blog Page with Sidebar Quote Post Format Template
 * Created by CMSMasters
 * 
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<footer class="entry-meta">
		<?php cmsms_meta(); ?>
	</footer>
	<header class="entry-header">
		<blockquote>
		<?php 
			if (has_excerpt()) {
				the_excerpt();
			} else {
				echo '<p>' . __('Enter post excerpt', 'cmsmasters') . '</p>';
			}
		?>
		</blockquote>
		<div class="entry-content">
		<?php 
			if (get_the_content('') != '') { 
				global $more;
				
				$more = 0;
				
				the_content('');
			}
		?>
		</div>
	</header>
	<div class="entry-meta">
	<?php 
		cmsms_comments();
		
		cmsms_tags(get_the_ID(), 'post', 'page');
	?>
	</div>
</article>