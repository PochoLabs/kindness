<?php
/**
 * @package WordPress
 * @subpackage Kindness
 * @since Kindness 1.0
 * 
 * Blog Page with Sidebar Audio Post Format Template
 * Created by CMSMasters
 * 
 */


$post_audio_link = explode(',', str_replace(' ', '', get_post_meta(get_the_ID(), 'post_audio_link', true)));

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php 
		if ($post_audio_link[0] != '') {
			foreach ($post_audio_link as $post_audio) {
				$link = explode(':', $post_audio, 2);
				
				$audio_link[$link[0]] = $link[1];
			}
			
			echo '<div class="blog_media">' . 
				cmsmastersSingleAudioPlayer($audio_link) . 
			'</div>';
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