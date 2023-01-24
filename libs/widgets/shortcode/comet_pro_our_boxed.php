<?php 
	
	add_shortcode('comet_pro_our_boxed','comet_pro_our_boxed');

	
	function comet_pro_our_boxed($one,$two){ 


			$coment_title_box 	= shortcode_atts([
				'boxed_group'				=> '',
				'boxed_item_title'			=> '',
				'boxed_num'					=> '',
				'boxed_jobtitle'			=> '',
				'boxed_description'			=> '',
				'boxed_color'				=> '',
				'boxed_bg_color'			=> '',
				'boxed_padding'				=> '',
			




			], $one);


			ob_start();
		?>

						<?php 

								$all_element 	= vc_param_group_parse_atts($coment_title_box['boxed_group']);


									foreach( $all_element as $element ) :



						 ?>
								<style>
									.boxsed_p{
										background-color:<?php echo  $element['boxed_bg_color']; ?>;
										color:<?php echo  $element['boxed_color']; ?>;
										padding: <?php echo  $element['boxed_padding']; ?>;
									}
									.boxsed_p p{
										color: <?php echo  $element['boxed_color']; ?>;

									}
								</style>



						           <div class="boxsed_p" >
						              <div class="number-box"><span><?php echo  $element['boxed_item_title']; ?></span>
						                <h2><?php echo  $element['boxed_num']; ?><span class="red-dot"></span></h2>
						                <h4><?php echo  $element['boxed_jobtitle']; ?></h4>
						                <p><?php echo  $element['boxed_description']; ?></p>
						              </div>
						           </div>


						       <?php endforeach; ?>

	<?php 
			return ob_get_clean();

}


		add_action('vc_before_init','vc_comet_our_boxed');

		function vc_comet_our_boxed(){

			vc_map([
				'name'			=> 'Comet Our Boxed ',
				'base'			=> 'comet_pro_our_boxed',
				'description'	=> 'Coment Boxed',
				'category'		=> 'Comet Pro',
				'group'			=> '',
				'icon'			=> get_template_directory_uri(). '/acess/icon/icon.png',
				'params'		=> [

					[
						'param_name'			=> 'boxed_group',
						'type'					=> 'param_group',
						'heading'				=> 'Add New Comet Boxed',
						'params'				=> [
								[	
									'param_name'			=> 'boxed_item_title',
									'type'					=> 'textfield',
									'heading'				=> 'Boxed Title',

								],

								[
									'param_name'			=> 'boxed_num',
									'type'					=> 'textfield',
									'heading'				=> 'Boxed Number'

								],

								[
									'param_name'			=> 'boxed_jobtitle',
									'type'					=> 'textfield',
									'heading'				=> 'Boxed Job Title'

								],

								[
									'param_name'			=> 'boxed_description',
									'type'					=> 'textarea',
									'heading'				=> 'Description'

								],

								[
									'param_name'			=> 'boxed_color',
									'type'					=> 'colorpicker',
									'heading'				=> 'Boxed Color Text'

								],

								[
									'param_name'			=> 'boxed_bg_color',
									'type'					=> 'colorpicker',
									'heading'				=> 'Boxed Background Color'

								],

								[
									'param_name'			=> 'boxed_padding',
									'type'					=> 'textfield',
									'heading'				=> 'Boxed Padding'

								]


						]


					]





					


				]



			]);




		}






 ?>