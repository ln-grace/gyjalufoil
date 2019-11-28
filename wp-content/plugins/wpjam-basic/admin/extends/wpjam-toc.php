<?php
add_filter('wpjam_basic_sub_pages', function ($subs){
	$subs['wpjam-toc']	= [
		'menu_title'	=> '文章目录',	
		'function'		=> 'option',
		'option_name'	=> 'wpjam-basic',
		'page_file'		=> WPJAM_BASIC_PLUGIN_DIR.'admin/pages/wpjam-toc.php'
	];
	
	return $subs;
});

add_action('wpjam_post_page_file', 	function($post_type){
	include WPJAM_BASIC_PLUGIN_DIR.'admin/hooks/post-toc.php';
});