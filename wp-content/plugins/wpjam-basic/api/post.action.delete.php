<?php
$current_user	= wpjam_get_current_user();
$id				= wpjam_get_parameter('id',	['method'=>'POST', 'type'=>'int', 'required'=>true]);

$comment	= get_comment($id);
if(empty($comment)){
	wpjam_send_json([
		'errcode'	=>'comment_not_exists', 
		'errmsg'	=>'评论不存在。'
	]);
}

if(!empty($current_user['user_id'])){
	if($comment->user_id != $current_user['user_id']){
		wpjam_send_json([
			'errcode'	=>'bad_authentication', 
			'errmsg'	=>'你不能删除别人的评论。'
		]);
	}
}elseif(!empty($current_user['user_email'])){
	if($comment->comment_author_email != $current_user['user_email']){
		wpjam_send_json([
			'errcode'	=>'bad_authentication', 
			'errmsg'	=>'你不能删除别人的评论。'
		]);
	}
}else{
	wpjam_send_json([
		'errcode'	=>'bad_authentication', 
		'errmsg'	=>'你不能删除别人的评论。'
	]);
}	

$post_id	= $comment->comment_post_ID;
$the_post	= wpjam_validate_post($post_id, $post_type, $action);
if(is_wp_error($the_post)){
	wpjam_send_json($the_post);
}

$result	= WPAJAM_Comment::delete($id);
if(is_wp_error($result)){
	wpjam_send_json($result);
}

$response['errmsg']	= '删除成功';