<?php
add_action('wpjam_'.$post_type.'_posts_actions', function($actions, $post_type){
	if($post_type == 'page'){
		return $actions;
	}
	
	$actions['update_views']		= ['title'=>'修改',	'page_title'=>'修改浏览数',	'tb_width'=>'500',	'capability'=>'edit_others_posts'];

	if(post_type_supports($post_type, 'thumbnail')){
		$actions['set_thumbnail']	= ['title'=>'设置',	'page_title'=>'设置特色图片',	'tb_width'=>'500',	'tb_height'=>'400'];
	}

	return $actions;
}, 9, 2);

add_filter('post_row_actions', function($row_actions, $post){
	unset($row_actions['update_views']);
	unset($row_actions['set_thumbnail']);
	return $row_actions;
}, 10, 2);

add_filter('wpjam_'.$post_type.'_posts_fields', function($fields, $action_key, $post_id, $post_type){
	if($action_key == ''){
		if($post_fields	= wpjam_get_post_fields($post_type)){
			$post_fields	= array_filter($post_fields, function($field){ return !empty($field['show_admin_column']); });
			$fields			= array_merge($fields, $post_fields);
		}

		if($post_type == 'page'){
			$fields['template']	= ['title'=>'模板',	'column_callback'=>'get_page_template_slug'];
		}else{
			if(is_post_type_viewable($post_type)){
				$fields['thumbnail']	= ['title'=>'缩略图',	'column_callback'=>'wpjam_get_admin_post_list_thumbnail'];
				$fields['views']		= ['title'=>'浏览',		'column_callback'=>'wpjam_get_admin_post_list_views',	'sortable_column'=>'meta_value_num'];
			}elseif(post_type_supports($post_type, 'thumbnail')){
				$fields['thumbnail']	= ['title'=>'缩略图',	'column_callback'=>'wpjam_get_admin_post_list_thumbnail'];
			}
		}
	}elseif($action_key == 'update_views'){
		return [
			'title'	=> ['title'=>'标题',		'type'=>'view',		'value'=>get_post($post_id)->post_title],
			'views'	=> ['title'=>'浏览数',	'type'=>'number',	'class'=>'',	'value'=>wpjam_get_post_views($post_id, false)]
		];
	}elseif($action_key == 'set_thumbnail'){
		return [
			'title'			=> ['title'=>'标题',		'type'=>'view',	'value'=>get_post($post_id)->post_title],
			'_thumbnail_id'	=> ['title'=>'缩略图',	'type'=>'img',	'value'=>get_post_thumbnail_id($post_id),	'size'=>'600x0']
		];
	}

	return $fields;
}, 10, 4);

function wpjam_get_admin_post_list_thumbnail($post_id){
	$post_thumbnail	= wpjam_get_post_thumbnail($post_id, [50,50]);

	if(!post_type_supports(get_post($post_id)->post_type, 'thumbnail') || !current_user_can('edit_post', $post_id)){
		return $post_thumbnail; 
	}

	return wpjam_get_list_table_row_action('set_thumbnail',[
		'id'	=> $post_id,
		'title'	=> $post_thumbnail ?: '设置特色图片',
	]);
}

function wpjam_get_admin_post_list_views($post_id){
	$post_views	= wpjam_get_post_views($post_id, false);

	if(!current_user_can('edit_others_posts')){
		return $post_views;
	}

	return wpjam_get_list_table_row_action('update_views',[
		'id'	=> $post_id,
		'title'	=> $post_views ?: 0,
	]);
}

add_filter('wpjam_'.$post_type.'_posts_list_action', function($result, $list_action, $post_id, $data){
	if($list_action == 'update_views'){
		if(isset($data['views'])){
			return update_post_meta($post_id, 'views', $data['views']);
		}

		return true;
	}elseif($list_action == 'set_thumbnail'){
		if(!empty($data['_thumbnail_id'])){
			return update_post_meta($post_id, '_thumbnail_id', $data['_thumbnail_id']);
		}else{
			return delete_post_meta($post_id, '_thumbnail_id');
		}
	}

	return $result;
}, 10, 4);