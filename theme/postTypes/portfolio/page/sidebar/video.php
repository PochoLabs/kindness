<?php
/**
 * @package WordPress
 * @subpackage Kindness
 * @since Kindness 1.0
 * 
 * Portfolio Page with Sidebar Video Project Format Template
 * Created by CMSMasters
 * 
 */


global $selected_numbercolumns_sidebar;

$project_cover = get_post_meta(get_the_ID(), 'project_cover', true);

$project_video_link = explode(',', str_replace(' ', '', get_post_meta(get_the_ID(), 'project_video_link', true)));

if (!$selected_numbercolumns_sidebar) {
    $selected_numbercolumns_sidebar = 'three_blocks';
}

if ($selected_numbercolumns_sidebar == 'three_blocks' || $selected_numbercolumns_sidebar == 'two_blocks') {
    $project_thumb = 'project-thumb';
} elseif ($selected_numbercolumns_sidebar == 'one_block') {
    $project_thumb = 'post-thumbnail';
}

$pt_sort_categs = get_the_terms(0, 'pt-sort-categ');

if ($pt_sort_categs != '') {
	$pt_categs = '';
	
	foreach ($pt_sort_categs as $pt_sort_categ) {
		$pt_categs .= ' ' . $pt_sort_categ->slug;
	}
	
	$pt_categs = ltrim($pt_categs, ' ');
}

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('format-video'); ?> data-category="<?php echo $pt_categs; ?>">
	<div class="portfolio_inner">
	<?php 
		cmsms_meta('project', 'page', get_the_ID(), 'pt-sort-categ', 'sidebar');
		
		if ($project_cover == 'true' && has_post_thumbnail()) {
			cmsms_thumb(get_the_ID(), $project_thumb, true, false, true, false, true, true, false);
		} elseif ($project_video_link[0] != '') {
			$try_link = explode(':', $project_video_link[0], 2);
			
			if ($try_link[0] != 'http') {
				foreach ($project_video_link as $post_video) {
					$link = explode(':', $post_video, 2);
					
					if ($link[0] != 'http') {
						$video_link[$link[0]] = $link[1];
					}
				}
				
				if (has_post_thumbnail()) {
					$image_link = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), $project_thumb, false);
					
					$video_link['poster'] = $image_link[0];
				}
				
				echo cmsmastersSingleVideoPlayer($video_link);
			} else {
				echo '<div class="resizable_block">' . 
					get_video_iframe($project_video_link[0]) . 
				'</div>';
			}
		} elseif (has_post_thumbnail()) {
			cmsms_thumb(get_the_ID(), $image_width, $image_height, false, 'prettyPhoto');
		}
		
		cmsms_heading(get_the_ID(), 'project', 'sidebar');
		
		cmsms_exc_cont('project', 'sidebar');
		
		cmsms_more(get_the_ID(), 'project', 'sidebar');
	?>
		<div class="cl"></div>
	</div>
</article>