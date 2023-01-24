<?php 
	
	add_shortcode('comet_pro_title_section','comet_pro_title_section');

	
	function comet_pro_title_section($one,$two){ 


			$coment_title_box 	= shortcode_atts([

				'box_align'			=> '',
				'title'				=> '',
				'programs_bar'		=> '',
				'description'		=> '',



			], $one);


			ob_start();
		?>
				<div class="title <?php echo $coment_title_box['box_align']; ?>">
			          <h4 class="upper"><?php echo $coment_title_box['description']; ?></h4>
			          <h3><?php echo $coment_title_box['title']; ?><span class="red-dot"></span></h3>
			          <hr style="height:<?php echo $coment_title_box['programs_bar'];?>%;">
		        </div>


	<?php 
			return ob_get_clean();

}


		add_action('vc_before_init','vc_comet_title_section');

		function vc_comet_title_section(){

			vc_map([
				'name'			=> 'Comet Title Section',
				'base'			=> 'comet_pro_title_section',
				'description'	=> 'Coment Pro Title Section',
				'category'		=> 'Comet Pro',
				'icon'			=> get_template_directory_uri(). '/acess/icon/icon.png',
				'params'		=> [
					[
						'param_name'		=> 'box_align',
						'type'				=> 'dropdown',
						'heading'			=> 'Title Box Align',
						'value'				=> [
							'Left'				=> 'left',
							'Right'				=> 'right',
							'Center'			=> 'center',
						]

					],

					[
						'param_name'		=> 'title',
						'type'				=> 'textfield',
						'heading'			=> 'Title Box'

					],

					[
						'param_name'		=> 'description',
						'type'				=> 'textarea',
						'heading'			=> 'Description'

					],

					[
						'param_name'		=> 'programs_bar',
						'type'				=> 'textfield',
						'heading'			=> 'Progras Bar %'

					],

					


				]



			]);




		}






 ?>