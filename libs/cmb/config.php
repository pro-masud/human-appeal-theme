<?php 

	function human_appeal_custom_box(){

		$project_post_box = new_cmb2_box([
			'title'			=> __('Project Post Box','human-appeal'),
			'id'			=> 'project_post_box',
			'object_types'	=> ['human_appeal_gellary']
		]);


		$project_post_box -> add_field([
			'name'			=> __('Image Hover Title','human-appeal'),
			'id'			=> 'immage_hover_title',
			'type'			=> 'text'

		]);

		$project_post_box -> add_field([
			'name'			=> __('Button Two URL','human-appeal'),
			'id'			=> 'project_btn_two_url',
			'type'			=> 'text'

		]);

	}

	add_action('cmb2_init','human_appeal_custom_box');









 ?>