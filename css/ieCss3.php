<?php
/**
 * @package WordPress
 * @subpackage Kindness
 * @since Kindness 1.0
 * 
 * CSS 3 Rules for IE < 9
 * Created by CMSMasters
 * 
 */


header('Content-type: text/css');
require('../../../../wp-load.php');

?>
span.dropcap2, 
.button span, 
.comment-reply-link span, 
#navigation > li, 
#navigation > li > a,  
.button, 
.button_medium, 
.button_large, 
.comment-reply-link, 
.jta-tweet-text, 
.cmsms_plus, 
.cmsms_plus_inner, 
.tour li span, 
.portfolio_container .portfolio_inner,  
.cmsmsLike, 
.wp-pagenavi > span, 
.wp-pagenavi a {behavior:url(<?php echo get_template_directory_uri(); ?>/css/pie.htc);}

#top .button, 
#top .button_medium, 
#top .button_large, 
.p_options_block .button, 
.p_options_block .button span {behavior:none;}
