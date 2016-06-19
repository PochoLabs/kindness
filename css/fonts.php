<?php 
/**
 * @package WordPress
 * @subpackage Kindness
 * @since Kindness 1.2.1
 * 
 * Fonts & Colors Settings File
 * Created by CMSMasters
 * 
 */


header('Content-type: text/css');
require('../../../../wp-load.php');
require('../theme/classes/var.php');

?>
/* Fonts */

body, 
input[type="submit"] {
	font : <?php echo $content_font_size . 'px/' . 
	$content_line_height . 'px ' . 
	((strpos(stripslashes($content_font), '+')) ? "'" . str_replace('+', ' ', stripslashes($content_font)) . "'" : stripslashes($content_font)); ?>;
}

h1, 
a.logo span.title, 
.button_large span {
	font : <?php echo $h1_font_size . 'px/' . 
	$h1_line_height . 'px ' . 
	((strpos(stripslashes($h1_font), '+')) ? "'" . str_replace('+', ' ', stripslashes($h1_font)) . "'" : stripslashes($h1_font));
	
	if (str_replace('+', ' ', stripslashes($h1_font)) !== str_replace('+', ' ', stripslashes($content_font))) { 
		echo ((strpos(stripslashes($content_font), '+')) ? ", '" . str_replace('+', ' ', stripslashes($content_font)) . "'" : ', ' . stripslashes($content_font));
	} ?>;
}

h2, 
.sitemap > li > a {
	font : <?php echo $h2_font_size . 'px/' . 
	$h2_line_height . 'px ' . 
	((strpos(stripslashes($h2_font), '+')) ? "'" . str_replace('+', ' ', stripslashes($h2_font)) . "'" : stripslashes($h2_font));
	
	if (str_replace('+', ' ', stripslashes($h2_font)) !== str_replace('+', ' ', stripslashes($content_font))) { 
		echo ((strpos(stripslashes($content_font), '+')) ? ", '" . str_replace('+', ' ', stripslashes($content_font)) . "'" : ', ' . stripslashes($content_font));
	} ?>;
}

h2 {
	font-style:italic;
}

h3, 
q:before, 
q:after, 
blockquote:before, 
blockquote:after {
	font : <?php echo $h3_font_size . 'px/' . 
	$h3_line_height . 'px ' . 
	((strpos(stripslashes($h3_font), '+')) ? "'" . str_replace('+', ' ', stripslashes($h3_font)) . "'" : stripslashes($h3_font));
	
	if (str_replace('+', ' ', stripslashes($h3_font)) !== str_replace('+', ' ', stripslashes($content_font))) { 
		echo ((strpos(stripslashes($content_font), '+')) ? ", '" . str_replace('+', ' ', stripslashes($content_font)) . "'" : ', ' . stripslashes($content_font));
	} ?>;
}

h4 {
	font : <?php echo $h4_font_size . 'px/' . 
	$h4_line_height . 'px ' . 
	((strpos(stripslashes($h4_font), '+')) ? "'" . str_replace('+', ' ', stripslashes($h4_font)) . "'" : stripslashes($h4_font));
	
	if (str_replace('+', ' ', stripslashes($h4_font)) !== str_replace('+', ' ', stripslashes($content_font))) { 
		echo ((strpos(stripslashes($content_font), '+')) ? ", '" . str_replace('+', ' ', stripslashes($content_font)) . "'" : ', ' . stripslashes($content_font));
	} ?>;
}

h4 {
	font-weight:bold;
}

h5, 
.table th, 
.tog, 
.sitemap > li > ul > li > a, 
.tour li a {
	font : <?php echo $h5_font_size . 'px/' . 
	$h5_line_height . 'px ' . 
	((strpos(stripslashes($h5_font), '+')) ? "'" . str_replace('+', ' ', stripslashes($h5_font)) . "'" : stripslashes($h5_font));
	
	if (str_replace('+', ' ', stripslashes($h5_font)) !== str_replace('+', ' ', stripslashes($content_font))) { 
		echo ((strpos(stripslashes($content_font), '+')) ? ", '" . str_replace('+', ' ', stripslashes($content_font)) . "'" : ', ' . stripslashes($content_font));
	} ?>;
}

h5 {
	font-style:italic;
}

h6 {
	font : <?php echo $h6_font_size . 'px/' . 
	$h6_line_height . 'px ' . 
	((strpos(stripslashes($h6_font), '+')) ? "'" . str_replace('+', ' ', stripslashes($h6_font)) . "'" : stripslashes($h6_font));
	
	if (str_replace('+', ' ', stripslashes($h6_font)) !== str_replace('+', ' ', stripslashes($content_font))) { 
		echo ((strpos(stripslashes($content_font), '+')) ? ", '" . str_replace('+', ' ', stripslashes($content_font)) . "'" : ', ' . stripslashes($content_font));
	} ?>;
}

h6 {
	font-weight:bold;
}

q, 
blockquote {
	font : <?php echo $bqt_font_size . 'px/' . 
	$bqt_line_height . 'px ' . 
	((strpos(stripslashes($bqt_font), '+')) ? "'" . str_replace('+', ' ', stripslashes($bqt_font)) . "'" : stripslashes($bqt_font));
	
	if (str_replace('+', ' ', stripslashes($bqt_font)) !== str_replace('+', ' ', stripslashes($content_font))) { 
		echo ((strpos(stripslashes($content_font), '+')) ? ", '" . str_replace('+', ' ', stripslashes($content_font)) . "'" : ', ' . stripslashes($content_font));
	} ?>;
}

code {
	font : <?php echo $code_font_size . 'px/' . 
	$code_line_height . 'px ' . 
	((strpos(stripslashes($code_font), '+')) ? "'" . str_replace('+', ' ', stripslashes($code_font)) . "'" : stripslashes($code_font));
	
	if (str_replace('+', ' ', stripslashes($code_font)) !== str_replace('+', ' ', stripslashes($content_font))) { 
		echo ((strpos(stripslashes($content_font), '+')) ? ", '" . str_replace('+', ' ', stripslashes($content_font)) . "'" : ', ' . stripslashes($content_font));
	} ?>;
}

small, 
abbr, 
.widget_custom_twitter_entries .tweet_time {
	font : <?php echo $small_font_size . 'px/' . 
	$small_line_height . 'px ' . 
	((strpos(stripslashes($small_font), '+')) ? "'" . str_replace('+', ' ', stripslashes($small_font)) . "'" : stripslashes($small_font));
	
	if (str_replace('+', ' ', stripslashes($small_font)) !== str_replace('+', ' ', stripslashes($content_font))) { 
		echo ((strpos(stripslashes($content_font), '+')) ? ", '" . str_replace('+', ' ', stripslashes($content_font)) . "'" : ', ' . stripslashes($content_font));
	} ?>;
}

input, 
textarea, 
select, 
option, 
.cmsms-form-builder .check_parent input[type="checkbox"]+label, 
.cmsms-form-builder .check_parent input[type="radio"]+label, 
.wpcf7 .wpcf7-list-item input[type="checkbox"]+span, 
.wpcf7 .wpcf7-list-item input[type="radio"]+span {
	font : <?php echo $input_font_size . 'px/' . 
	$input_line_height . 'px ' . 
	((strpos(stripslashes($input_font), '+')) ? "'" . str_replace('+', ' ', stripslashes($input_font)) . "'" : stripslashes($input_font));
	
	if (str_replace('+', ' ', stripslashes($input_font)) !== str_replace('+', ' ', stripslashes($content_font))) { 
		echo ((strpos(stripslashes($content_font), '+')) ? ", '" . str_replace('+', ' ', stripslashes($content_font)) . "'" : ', ' . stripslashes($content_font));
	} ?>;
}

q, 
blockquote, 
q:before, 
blockquote:before, 
.table thead th, 
.table tfoot th {
	font-style : italic;
}

.error h1, 
.error h2, 
#bottom .widget.widget_archive ul li a, 
#bottom .widget.widget_nav_menu ul li a, 
#bottom .widget.widget_links ul li a, 
#bottom .widget.widget_meta ul li a, 
#bottom .widget.widget_pages ul li a, 
#bottom .widget.widget_recent_entries ul li a, 
#bottom .widget.widget_categories ul li a {
	font-family : <?php echo ((strpos(stripslashes($bottom_list_font), '+')) ? "'" . str_replace('+', ' ', stripslashes($bottom_list_font)) . "'" : stripslashes($bottom_list_font));
	
	if (str_replace('+', ' ', stripslashes($bottom_list_font)) !== str_replace('+', ' ', stripslashes($content_font))) { 
		echo ((strpos(stripslashes($content_font), '+')) ? ", '" . str_replace('+', ' ', stripslashes($content_font)) . "'" : ', ' . stripslashes($content_font));
	} ?>;
}

#navigation > li > a, 
#navigation > li.current-menu-ancestor > a, 
#navigation > li.current_page_item > a, 
#navigation > li:hover > a {
	font : <?php echo $nav_title_font_size . 'px/' . 
	$nav_title_line_height . 'px ' . 
	((strpos(stripslashes($nav_title_font), '+')) ? "'" . str_replace('+', ' ', stripslashes($nav_title_font)) . "'" : stripslashes($nav_title_font));
	
	if (str_replace('+', ' ', stripslashes($nav_title_font)) !== str_replace('+', ' ', stripslashes($content_font))) { 
		echo ((strpos(stripslashes($content_font), '+')) ? ", '" . str_replace('+', ' ', stripslashes($content_font)) . "'" : ', ' . stripslashes($content_font));
	} ?>;
}

#navigation > li > a, 
#navigation > li.current-menu-ancestor > a, 
#navigation > li.current_page_item > a, 
#navigation > li:hover > a {
	font-weight : bold;
}

#navigation ul li a {
	font-family : <?php echo ((strpos(stripslashes($nav_dropdown_font), '+')) ? "'" . str_replace('+', ' ', stripslashes($nav_dropdown_font)) . "'" : stripslashes($nav_dropdown_font));
	
	if (str_replace('+', ' ', stripslashes($nav_dropdown_font)) !== str_replace('+', ' ', stripslashes($content_font))) { 
		echo ((strpos(stripslashes($content_font), '+')) ? ", '" . str_replace('+', ' ', stripslashes($content_font)) . "'" : ', ' . stripslashes($content_font));
	} ?>;
}

#navigation ul li a {
	font-size:<?php echo $nav_dropdown_font_size; ?>px;
	line-height:<?php echo $nav_dropdown_line_height; ?>px;
}

@media only screen and (min-width: 541px) and (max-width: 1023px) {
	
	#navigation > li > a, 
	#navigation > li.current-menu-ancestor > a, 
	#navigation > li.current_page_item > a, 
	#navigation > li:hover > a {
		font-size : .85em;
		font-weight : normal;
	}
	
}


/* Colors */

body {
	color : <?php echo $text_color; ?>;
}

a, 
.color_3, 
h1 a:hover, 
a abbr, 
a small, 
.portfolio_inner .entry-title a:hover, 
.sitemap > li > ul > li > a:hover, 
.sitemap > li > a:hover {
	color : <?php echo $link_color; ?>;
}

a:hover, 
.cmsms_info li a, 
.format-aside .entry-content, 
.comments_number, 
.cmsmsLike span, 
.cms_comment, 
div.jp-playlist li.jp-playlist-current a, 
.tabs li a, 
.tour li a {
	color : <?php echo $link_hover_color; ?>;
}

h1, 
h1 a {
	color : <?php echo $h1_color; ?>;
}

h2 {
	color : <?php echo $h2_color; ?>;
}

h3 {
	color : <?php echo $h3_color; ?>;
}

h4 {
	color : <?php echo $h4_color; ?>;
}

h5 {
	color : <?php echo $h5_color; ?>;
}

h6 {
	color : <?php echo $h6_color; ?>;
}

#navigation li > a, 
a.logo span.title, 
a.logo span.title_text {
	color : <?php echo $nav_title_color; ?>;
}

#navigation li.current-menu-ancestor > a, 
#navigation li.current-menu-item > a, 
#navigation li:hover > a:hover, 
#navigation li:hover > a {
	color : <?php echo $nav_title_active_color; ?>;
}

#navigation li li > a {
	color : <?php echo $nav_dropdown_color; ?>;
}

#navigation li li.current-menu-ancestor > a, 
#navigation li li.current-menu-item > a, 
#navigation li li:hover > a:hover, 
#navigation ul li:hover > a {
	color : <?php echo $nav_dropdown_active_color; ?>;
}

q, 
blockquote, 
q:before, 
blockquote:before, 
.dropcap, 
.color_2, 
.tabs li a.current, 
.portfolio_inner .entry-title a, 
.tog, 
.sitemap > li > ul > li > a, 
.sitemap > li > a, 
.tour li.current a {
	color : <?php echo $bqt_color; ?>;
}

code {
	color : <?php echo $code_color; ?>;
}

small, 
abbr {
	color : <?php echo $small_color; ?>;
}

input, 
textarea, 
select, 
option, 
.cmsms-form-builder .check_parent input[type="checkbox"]+label, 
.cmsms-form-builder .check_parent input[type="radio"]+label, 
.wpcf7 .wpcf7-list-item input[type="checkbox"]+span, 
.wpcf7 .wpcf7-list-item input[type="radio"]+span {
	color : <?php echo $input_color; ?>;
}

.responsiveSlider {
	color : <?php echo $slider_color; ?>;
}

.responsiveSlider h1, 
.responsiveSlider h2, 
.responsiveSlider h3, 
.responsiveSlider h4, 
.responsiveSlider h5, 
.responsiveSlider h6 {
	color : <?php echo $slider_heading_color; ?>;
}

#bottom {
	color : <?php echo $bottom_color; ?>;
}

#bottom a {
	color : <?php echo $bottom_link_color; ?>;
}

#bottom a:hover {
	color : <?php echo $bottom_link_hover_color; ?>;
}

#bottom h1, 
#bottom h2, 
#bottom h3, 
#bottom h4, 
#bottom h5, 
#bottom h6, 
#bottom .color_2 {
	color : <?php echo $bottom_heading_color; ?>;
}

#footer {
	color : #bababa;
}

code {border-top-color : <?php echo $link_color; ?>;}

input[type="text"]:focus, 
input[type="password"]:focus, 
textarea:focus, 
select:focus, 
#bottom input[type="text"]:focus, 
#bottom input[type="password"]:focus, 
#bottom textarea:focus, 
#bottom select:focus {
	border-color : <?php echo $button_bg_color; ?>;
}

#header {
	background-color : <?php echo $header_bg_color; ?>;
}

#navigation > li.current_page_item, 
#navigation > li.current-menu-ancestor,
#navigation > li:hover {
	background-color : <?php echo $nav_title_active_bg_color; ?>;
}

#navigation ul li {
	background-color : #ffffff;
}

#navigation ul li.current-menu-ancestor, 
#navigation ul li.current-menu-item, 
#navigation ul li:hover {
	background-color : #f8f8f8;
}

.button,
.button_medium, 
.button_large, 
input[type="submit"], 
.comment-reply-link, 
.wp-pagenavi a, 
.cmsms_plus, 
div.jp-playlist li.jp-playlist-current span, 
.tour li.current span {
	background-color : <?php echo $button_bg_color; ?>;
}

.widget_custom_text_icon > table, 
a.cmsms_close_video, 
.table thead th, 
.table tfoot th, 
span.dropcap2, 
.cmsmsLike:hover, 
a.cmsms_close_video:hover,
#top ul.cmsms_slides_nav li.active a, 
#top ul.cmsms_slides_nav li:hover a {
	background-color : <?php echo $link_color; ?>;
}

.cmsmsLike {
	background-color : #cccccc;
}
