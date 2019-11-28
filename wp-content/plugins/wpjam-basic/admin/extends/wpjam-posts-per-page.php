<?php
add_filter('wpjam_basic_sub_pages', function($subs){
	if(!is_multisite() || !is_network_admin()){
		$subs['wpjam-posts-per-page']	=[
			'menu_title'	=> '文章数量', 
			'function'		=> 'option',
			'option_name'	=> 'wpjam-posts-per-page',
			'page_file'		=> WPJAM_BASIC_PLUGIN_DIR.'admin/pages/wpjam-posts-per-page.php'
		];
	}

	return $subs;
});


add_action('wpjam_term_list_page_file', function($taxonomy){
	if(is_taxonomy_hierarchical($taxonomy) && wpjam_get_posts_per_page($taxonomy.'_individual')){
		require WPJAM_BASIC_PLUGIN_DIR.'admin/hooks/term-posts-per-page.php';	
	}
});