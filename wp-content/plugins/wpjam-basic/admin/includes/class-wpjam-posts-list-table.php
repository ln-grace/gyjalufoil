<?php 
if(!class_exists('WPJAM_List_Table')){
	include WPJAM_BASIC_PLUGIN_DIR.'admin/includes/class-wpjam-list-table.php';
}

class WPJAM_Posts_List_Table extends WPJAM_List_Table{
	public function __construct($args = []){
		$args	= wp_parse_args($args, [
			'model'		=> '',
			'post_type'	=> '',
		]);

		$post_type	= $args['post_type'];
		$model		= $args['model'];
		$actions	= $model ? $model::get_actions() : [];
		$actions	= apply_filters('wpjam_'.$post_type.'_posts_actions', $actions, $post_type);

		$pt_obj		= get_post_type_object($post_type);

		$bulk_actions	= [];
		if($actions){
			foreach ($actions as $action_key => $action) {
				if(empty($action['bulk'])) {
					continue;
				}

				$capability	= $action['capability']?? ($args['capability'] ?? $pt_obj->cap->edit_others_posts);

				if(current_user_can($capability, 0)){
					$bulk_actions[$action_key]	= $action['title'];
				}
			}
		}

		$args['capability']		= $args['capability'] ?? 'edit_post';
		$args['title']			= $args['title'] ?? $pt_obj->label;
		$args['actions']		= $actions;
		$args['bulk_actions']	= $bulk_actions;
		
		$this->_args	= $args;

		$this->_args['columns']				= [];
		$this->_args['sortable_columns']	= [];

		$fields	= $this->get_fields();

		if($fields){
			foreach ($fields as $key => $field) {
				$this->_args['columns'][$key] = $field['column_title']??$field['title'];
				
				if(!empty($field['sortable_column'])){
					$this->_args['sortable_columns'][$key] = [$key, true];
				}
			}
		}

		add_action('wpjam_html_replace', 		[$this,'html_replace']);
		add_action('pre_get_posts', 			[$this,'pre_get_posts']);
		add_filter('posts_clauses', 			[$this,'posts_clauses'],1,2);

		add_filter('views_edit-'.$post_type,	[$this,'post_type_views'],1,2);
		add_action('restrict_manage_posts',		[$this,'restrict_manage_posts']);

		if(is_post_type_hierarchical($post_type)){
			add_filter('page_row_actions',		[$this,'post_row_actions'],1,2);
		}else{
			if($post_type == 'attachment'){
				add_filter('media_row_actions',	[$this,'post_row_actions'],1,2);
			}else{
				add_filter('post_row_actions',	[$this,'post_row_actions'],1,2);
			}
		}
		
		if($post_type == 'attachment'){
			add_filter('manage_media_columns',			[$this, 'manage_media_columns']);
			add_filter('manage_media_custom_column',	[$this, 'manage_media_custom_column', 10, 2]);
		}else{
			add_filter('manage_'.$post_type.'_posts_columns',			[$this, 'manage_posts_columns']);
			add_action('manage_'.$post_type.'_posts_custom_column',		[$this, 'manage_posts_custom_column'], 10, 2);
			add_filter('manage_edit-'.$post_type.'_sortable_columns',	[$this, 'manage_posts_sortable_columns']);
		}

		if(wp_doing_ajax()){
			add_action('wp_ajax_wpjam-list-table-action', [$this, 'ajax_response']);
		}else{
			add_action('admin_head', [$this,'admin_head']);

			global $current_screen;

			add_filter('bulk_actions-'.$current_screen->id, [$this,'bulk_actions']);
		}
	}

	public function post_type_views($views){
		$model	= $this->get_model();

		if($model && method_exists($model, 'views')){
			$views = $model::views($views);
		}

		return $views;
	}

	public function get_post_type(){
		return $this->_args['post_type'];
	}

	public function get_fields($action_key='', $post_id=0){
		$model		= $this->get_model();
		$post_type	= $this->get_post_type();

		$fields		= $model ? $model::get_fields($action_key, $post_id) : [];
		$fields		= $fields ?: [];

		return apply_filters('wpjam_'.$post_type.'_posts_fields', $fields, $action_key, $post_id, $post_type);
	}

	public function post_row_actions($row_actions, $post){
		$id			= $post->ID;
		$actions	= $this->_args['actions'];
		$model		= $this->get_model();

		if($post->post_status == 'trash'){
			$row_actions['post_id'] = 'ID: '.$post->ID;
			return $row_actions;
		}

		if($actions){
			$next_actions	= [];
			foreach ($actions as $action) {
				if(!empty($action['next'])){
					$next_actions[]	= $action['next'];
				}
			}
			
			foreach ($actions as $action_key => $action){
				if($action_key == 'add' || !empty($action['overall']) || in_array($action_key, $next_actions)){
					continue;
				}

				if($row_action = $this->get_row_action($action_key, compact('id'))){
					$row_actions[$action_key] = $row_action;
				}
			}
		}

		if($model){
			$post_type	= $this->get_post_type();
			
			if($post_type == 'attachment'){
				if(method_exists($model, 'media_row_actions')){
					$row_actions	= $model::media_row_actions($row_actions, $post);
				}
			}else{
				if(method_exists($model, 'post_row_actions')){
					$row_actions	= $model::post_row_actions($row_actions, $post);
				}
			}
		}

		if(isset($row_actions['trash'])){
			$trash	= $row_actions['trash'];
			unset($row_actions['trash']);

			$row_actions['trash']	= $trash;
		}

		$row_actions['post_id'] = 'ID: '.$post->ID;

		return $row_actions;
	}

	public function restrict_manage_posts($post_type){
		$model	= $this->get_model();

		if($model && method_exists($model, 'restrict_manage_posts')){
			$columns	= $model::restrict_manage_posts();
		}

		$taxonomies	= get_object_taxonomies($post_type, 'objects');

		if(empty($taxonomies)){
			return;
		}

		foreach($taxonomies as $taxonomy) {

			if($taxonomy->name == 'category' || empty($taxonomy->hierarchical) || empty($taxonomy->filterable)){
				continue;
			}

			$taxonomy_key	= $taxonomy->name.'_id';

			$selected	= 0;
			if(!empty($_REQUEST[$taxonomy_key])){
				$selected	= $_REQUEST[$taxonomy_key];
			}elseif(!empty($_REQUEST['taxonomy']) && ($_REQUEST['taxonomy'] == $taxonomy->name) && !empty($_REQUEST['term'])){
				if($term		= get_term_by('slug', $_REQUEST['term'], $taxonomy->name)){
					$selected	= $term->term_id;
				}
			}elseif(!empty($taxonomy->query_var) && !empty($_REQUEST[$taxonomy->query_var])){
				if($term	= get_term_by('slug', $_REQUEST[$taxonomy->query_var], $taxonomy->name)){
					$selected	= $term->term_id;
				}
			}

			wp_dropdown_categories(array(
				'taxonomy'			=> $taxonomy->name,
				'show_option_all'	=> $taxonomy->labels->all_items,
				'show_option_none'	=> $taxonomy->labels->no_terms,
				'hide_if_empty'		=> true,
				'hide_empty'		=> 0,
				'hierarchical'		=> 1,
				'show_count'		=> 0,
				'orderby'			=> 'name',
				'name'				=> $taxonomy_key,
				'selected'			=> $selected
			));
		}
	}

	public function bulk_actions($bulk_actions=[]){
		if($this->_args['bulk_actions']){
			$bulk_actions = array_merge($bulk_actions, $this->_args['bulk_actions']);
		}

		$model	= $this->get_model();

		if($model && method_exists($model, 'bulk_actions')){
			$bulk_actions	= $model::bulk_actions($bulk_actions);
		}
		 
		return $bulk_actions;
	}

	public function manage_posts_columns($columns){
		if($this->_args['columns']){
			wpjam_array_push($columns, $this->_args['columns'], 'date'); 
		}

		$model	= $this->get_model();

		if($model && method_exists($model, 'manage_posts_columns')){
			$columns	= $model::manage_posts_columns($columns);
		}

		return $columns;	
	}

	public function manage_media_columns($columns){
		$model	= $this->get_model();

		if($model && method_exists($model, 'manage_media_columns')){
			$columns	= $model::manage_media_columns($columns);
		}

		return $columns;	
	}

	public function manage_posts_custom_column($column_name, $post_id){
		$columns	= $this->_args['columns'];
		
		if($columns && isset($columns[$column_name])){
			$fields	= $this->get_fields();
			$field	= $fields[$column_name] ?? '';

			$model	= $this->get_model();

			if($model && method_exists($model, 'column_callback') && empty($field['column_callback'])){
				echo $model::column_callback($post_id, $column_name);
			}else{
				echo wpjam_column_callback($column_name, array(
					'id'		=> $post_id,
					'field'		=> $field,
					'data_type'	=> 'post_meta'
				));
			}
		}else{
			$model	= $this->get_model();

			if($model && method_exists($model, 'column_callback')){
				echo $model::column_callback($post_id, $column_name);
			}
		}
	}

	public function manage_media_custom_column($column_name, $post_id){
		$model	= $this->get_model();
		
		if($model && method_exists($model, 'column_callback')){
			echo $model::column_callback($post_id, $column_name);
		}
	}

	public function manage_posts_sortable_columns($columns){
		if($this->_args['sortable_columns']){
			return array_merge($columns, $this->_args['sortable_columns']);
		}else{
			return $columns;
		}
	}

	public function html_replace($html){
		if($action = self::get_action('add')){
			$add_button	= wpjam_get_list_table_row_action('add', ['class'=>'page-title-action']);
			$html		= preg_replace('/<a href=".*?" class="page-title-action">.*?<\/a>/i', $add_button, $html);
		}
		
		return $html;
	}

	public function pre_get_posts($wp_query){
		if($sortable_columns	= $this->_args['sortable_columns']){
			$orderby	= $wp_query->get('orderby');

			if($orderby && is_string($orderby) && isset($sortable_columns[$orderby])){
				$fields	= $this->get_fields();
				$field	= $fields[$orderby] ?? '';

				$orderby_type = ($field['sortable_column'] == 'meta_value_num')?'meta_value_num':'meta_value';
				
				$wp_query->set('meta_key', $orderby);
				$wp_query->set('orderby', $orderby_type);
			}
		}

		$model	= $this->get_model();

		if($model && method_exists($model, 'pre_get_posts')){
			$model::pre_get_posts($wp_query);
		}
	}

	public function posts_clauses($posts_clauses, $wp_query){
		$model	= $this->get_model();

		if($model && method_exists($model, 'posts_clauses')){
			$posts_clauses = $model::posts_clauses($posts_clauses, $wp_query);
		}

		return $posts_clauses;
	}

	public function the_posts($posts){
		if($posts){
			$model	= $this->get_model();

			if($model && method_exists($model, 'the_posts')){
				$posts = $model::the_posts($posts);
			}
		}

		return $posts;
	}

	public function admin_head(){
		if($bulk_actions = $this->_args['bulk_actions']){	$actions = $this->_args['actions'];
		?>

		<script type="text/javascript">
		jQuery(function($){
			<?php foreach($bulk_actions as $action_key => $bulk_action) { 
				$bulk_action	= $actions[$action_key];

				$datas	= ['action'=>$action_key, 'bulk'=>true];

				$datas['page_title']	= $bulk_action['page_title']??$bulk_action['title']; 
				$datas['nonce']			= $this->create_nonce('bulk_'.$action_key); 

				if(!empty($bulk_action['direct'])){
					$datas['direct']	= true;
				}

				if(!empty($bulk_action['confirm'])){
					$datas['confirm']	= true;
				}

				echo '$(\'.bulkactions option[value='.$action_key.']\').data('.wpjam_json_encode($datas).')'."\n";
			}?>
		});
		</script>

		<?php } 

		$model	= $this->get_model();

		if($model && method_exists($model, 'admin_head')){
			$model::admin_head();
		}
	}
}

class WPJAM_Post_List_Table extends WPJAM_Posts_List_Table{
	
}