<?php
$current_user	= wpjam_get_current_user();
$comment_type	= str_replace('.list', '', $action);
$post_type		= $post_type ?:($_GET['post_type'] ?? null);
$number			= $args['number'] ?? 20;

$cursor			= wpjam_get_parameter('cursor', ['method'=>'GET', 'type'=>'int']);

$comment_args	= [
	'type'			=> $comment_type,
	'number'		=> $number,
	'no_found_rows'	=> false,
	'update_comment_meta_cache'	=> false,
	'update_comment_post_cache'	=> true
];

if(!empty($current_user['user_id'])){
	$comment_args['user_id']		= $current_user['user_id'];
}elseif(!empty($current_user['user_email'])){
	$comment_args['author_email']	= $current_user['user_email'];
}else{
	wpjam_send_json([
		'errcode'	=>'invalid_current_user', 
		'errmsg'	=>'无效的 current_user'
	]);
}

if(!is_null($post_type)){
	$comment_args['post_type']	= $post_type;
}

if($cursor){
	$comment_args['date_query']	= [
		['before'=>get_date_from_gmt(date('Y-m-d H:i:s',$cursor))]
	];
}

$next_cursor	= 0;
$posts_json		= [];

$wp_coment_query	= new WP_Comment_Query($comment_args);

if($user_comments = $wp_coment_query->comments){
	wpjam_get_posts(array_column($user_comments, 'comment_post_ID'));

	foreach ($user_comments as $user_comment){
		$post_json	= wpjam_get_post($user_comment->comment_post_ID, $args);

		if($post_json){
			$post_json[$comment_type]	= WPJAM_Comment::parse_for_json($user_comment);
			$posts_json[]				= $post_json;
		}	
	}

	if($wp_coment_query->max_num_pages > 1){
		$next_cursor	= end($posts_json)[$comment_type]['timestamp'];
	}
}

$output	= $output ?: ($post_type ? $post_type.'s' : 'posts');

$response['next_cursor']	= $next_cursor;
$response[$output]			= $posts_json;
