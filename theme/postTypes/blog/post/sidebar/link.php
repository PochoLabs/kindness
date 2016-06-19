<?php
/**
 * @package WordPress
 * @subpackage Kindness
 * @since Kindness 1.0
 * 
 * Blog Post with Sidebar Link Post Format Template
 * Created by CMSMasters
 * 
 */


global $blog_post_tags;

$post_link_text = get_post_meta(get_the_ID(), 'post_link_text', true);
$post_link_link = get_post_meta(get_the_ID(), 'post_link_link', true);

if ($post_link_text == '') {
    $post_link_text = __('Enter link text', 'cmsmasters');
}

if ($post_link_link == '') {
    $post_link_link = '#';
}

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('post-article'); ?>>
	<footer class="entry-meta">
		<?php cmsms_meta('post', 'post'); ?>
	</footer>
	<header class="entry-header">
		<h1 class="entry-title">
			<a href="<?php echo $post_link_link; ?>" target="_blank"><?php echo '[' . __('Link' ,'cmsmasters') . '] ' . $post_link_text; ?></a>
		</h1>
		<h5>- <?php echo $post_link_link; ?> -</h5>
	</header>
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