<?php 
	
	add_shortcode('comet_pro_our_client','comet_pro_our_client');

	
	function comet_pro_our_client($one,$two){ 


			$coment_title_box 	= shortcode_atts([
				'client_group'			=> '',
				'border_right'			=> '',
				'border_bottom'			=> '',
				'client_image'			=> ''




			], $one);


			ob_start();
		?>
		<div class="section-content">
          <div class="boxes clients">
            <div class="row">

            	<?php 	

            		$allClient 		=  	vc_param_group_parse_atts($coment_title_box['client_group']);

            		foreach($allClient as $client ) : 
            		
            			$client_img 	=  wp_get_attachment_url($client['client_image']);

            			

            	 ?>

              <div class="col-sm-4 col-xs-6 <?php echo $client['border_right'] ; ?> <?php echo $client['border_bottom'] ; ?>">
                <img src="<?php echo $client_img; ?>" alt="" data-animated="true" class="client-image">
              </div>

          <?php endforeach; ?>

            </div>
            <!-- end of row-->
          </div>
        </div>

	<?php 
			return ob_get_clean();

}


		add_action('vc_before_init','vc_comet_our_client');

		function vc_comet_our_client(){

			vc_map([
				'name'			=> 'Comet Our Client ',
				'base'			=> 'comet_pro_our_client',
				'description'	=> 'Coment Pro Our Client Section',
				'category'		=> 'Comet Pro',
				'icon'			=> get_template_directory_uri(). '/acess/icon/icon.png',
				'params'		=> [
					
					[
						'param_name'			=> 'client_group',
						'type'					=> 'param_group',
						'heading'				=> 'Add New Client',
						'params'				=> [
								[	
									'param_name'			=> 'border_right',
									'type'					=> 'dropdown',
									'heading'				=> 'Border Align Right',
									'value'					=> [
										'-- Select--' 		=> ' ',
										'border-right'		=> 'border-right',

									]

								],

								[	
									'param_name'			=> 'border_bottom',
									'type'					=> 'dropdown',
									'heading'				=> 'Border Align Bottom',
									'value'					=> [
										'-- Select--' 		=> ' ',
										'border-bottom'		=> 'border-bottom',

									]

								],

								[
									'param_name'			=> 'client_image',
									'type'					=> 'attach_image',
									'heading'				=> 'Client Image'

								]

						]


					]





					


				]



			]);




		}






 ?>