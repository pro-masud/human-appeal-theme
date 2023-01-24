<?php 



		function  amader_cmb2_box(){


				$cmb2_box 	=  	new_cmb2_box([
					'title'			=> 'Post Video Link',
					'id'			=> 'comet-video-link',
					'object_types'	=> ['post']


				]);

				$cmb2_box -> add_field([
					'name'				=> 'Insert A Video Link',
					'id'				=> 'iavl',
					'type'				=> 'oEmbed'

				]);


				// audio coustom meta box 

				$cmb2_box_audio =  	new_cmb2_box([
					'title'			=> 'Post Audio Link',
					'id'			=> 'comet-audio-link',
					'object_types'	=> ['post']


				]);

				$cmb2_box_audio -> add_field([
					'name'				=> 'Insert A Audio Link',
					'id'				=> 'iaal',
					'type'				=> 'text'

				]);


				// video gallery coustom meta box 

				$cmb2_box_audio =  	new_cmb2_box([
					'title'			=> 'Post Image Gallery',
					'id'			=> 'comet-img-link',
					'object_types'	=> ['post']


				]);

				$cmb2_box_audio -> add_field([
					'name'				=> 'Select A Image Gallery',
					'id'				=> 'saig',
					'type'				=> 'file_list'

				]);


				// Pages title topbar setection 

				$cmb2_box_audio =  	new_cmb2_box([
					'title'			=> 'Page Title Section',
					'id'			=> 'page-title-section',
					'object_types'	=> ['page']


				]);

				$cmb2_box_audio -> add_field([
					'name'				=> 'Page Title',
					'id'				=> 'page_title',
					'type'				=> 'text'

				]);



				$cmb2_box_audio -> add_field([
					'name'				=> 'Page Sub Title',
					'id'				=> 'page_sub_title',
					'type'				=> 'text'

				]);

				$cmb2_box_audio -> add_field([
					'name'				=> 'Page Pogresbar Width',
					'id'				=> 'page_pogres_bar',
					'after'				=> ' % ',
					'type'				=> 'text_small'

				]);

				$cmb2_box_audio -> add_field([
					'name'				=> 'Page background Images',
					'id'				=> 'page_bg_img',
					'type'				=> 'file',

				]);










		}


		add_action('cmb2_init','amader_cmb2_box');













 ?>