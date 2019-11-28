<?php
if(wpjam_basic_get_setting('diable_block_editor')){
	add_filter('use_block_editor_for_post_type', '__return_false');
}

if(wpjam_basic_get_setting('disable_trackbacks')){
	add_action('post_comment_status_meta_box-options', function($post){
		?>
		<style type="text/css">
			label[for='ping_status']{display:none}
		</style>
		<?php
	});
}

// if(wpjam_basic_get_setting('diable_revision')){
// 	add_action('wp_print_scripts',function() {
// 		wp_deregister_script('autosave');
// 	});
// }