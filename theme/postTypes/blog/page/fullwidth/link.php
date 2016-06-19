<?php
/**
 * @package WordPress
 * @subpackage Kindness
 * @since Kindness 1.0
 * 
 * Blog Page Full Width Link Post Format Template
 * Created by CMSMasters
 * 
 */


$post_link_text = get_post_meta(get_the_ID(), 'post_link_text', true);
$post_link_link = get_post_meta(get_the_ID(), 'post_link_link', true);

if ($post_link_text == '') {
    $post_link_text = __('Enter link text', 'cmsmasters');
}

if ($post_link_link == '') {
    $post_link_link = '#';
}

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<footer class="entry-meta">
		<?php cmsms_meta(); ?>
	</footer>
	<header class="entry-header">
		<h1 class="entry-title">
			<a href="<?php echo $post_link_link; ?>" target="_blank"><?php echo '[' . __('Link' ,'cmsmasters') . '] ' . $post_link_text; ?></a>
		</h1>
		<h5>- <?php echo $post_link_link; ?> -</h5>
	</header>
	<?php cmsms_exc_cont(); ?>
	<div class="entry-meta">
	<?php 
		cmsms_comments();
		
		cmsms_tags(get_the_ID(), 'post', 'page');
	?>
	</div>
</article>