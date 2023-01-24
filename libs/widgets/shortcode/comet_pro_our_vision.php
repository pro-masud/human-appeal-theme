<?php 
	
	add_shortcode('comet_pro_our_vision','comet_pro_our_vision');

	
	function comet_pro_our_vision($one,$two){ 


			$coment_vision 	= shortcode_atts([

				'title'							=> '',
				'title_color'					=> '',
				'sub_title'						=> '',
				'sub_title_color'				=> '',
				'programs_bar'					=> '',
				'images'						=> '',

				'expertise_groups'				=> '',
				'box_title'						=> '',
				'box_descerption'				=> ''



			], $one);


			ob_start();
		?>
				<section>
			      <div class="container-fluid">
			        <div class="row">
			          <div class="col-md-6 col-sm-4 img-side img-right">
			            <div class="img-holder">
			              <img src="<?php echo wp_get_attachment_url($coment_vision['images']); ?>" alt="" class="bg-img">
			            </div>
			          </div>
			          <!-- end of side background image-->
			        </div>
			        <!-- end of row-->
			      </div>
			      <div class="container">
			        <div class="row">
			          <div class="col-md-5 col-sm-8">
			            <div class="title">
			              <h4 <?php echo $coment_vision['sub_title_color']; ?> class="upper"><?php echo $coment_vision['sub_title']; ?></h4>
			              <h3 <?php echo $coment_vision['title_color']; ?> ><?php echo $coment_vision['title']; ?><span class="red-dot"></span></h3>
			              <hr style=" width:<?php  echo $coment_vision['programs_bar']; ?>;">
			            </div>
			            <div class="row">

			            	<?php 

			            	$allservicebox		= $coment_vision['expertise_groups'];
              				$allbox 	= 	vc_param_group_parse_atts($allservicebox);
              				foreach($allbox as $servicebox ) :


			            	 ?>
			              <div class="col-sm-6">
			                <div class="text-box">
			                  <h4 class="upper small-heading"><?php echo $servicebox['box_title']; ?></h4>
			                  <p><?php echo $servicebox['box_descerption']; ?></p>
			                </div>
			                <!-- end of text box-->
			              </div>

			              <?php endforeach; ?>



			            </div>
			            <!-- end of row              -->
			          </div>
			        </div>
			        <!-- end of row-->
			      </div>
			      <!-- end of container-->
			    </section>


	<?php 
			return ob_get_clean();

}


		add_action('vc_before_init','vc_comet_our_vision');

		function vc_comet_our_vision(){

			vc_map([
				'name'			=> 'Comet Our vision',
				'base'			=> 'comet_pro_our_vision',
				'description'	=> 'Coment Pro Our Vision',
				'category'		=> 'Comet Pro',
				'icon'			=> get_template_directory_uri(). '/acess/icon/icon.png',
				'params'		=> [
					[
						'param_name'			=> 'title',
						'type'					=> 'textfield',
						'heading'				=> 'Title'

					],

					[
						'param_name'			=> 'title_color',
						'type'					=> 'colorpicker',
						'heading'				=> 'Title Text Color'

					],

					

					[
						'param_name'			=> 'sub_title',
						'type'					=> 'textarea',
						'heading'				=> 'Sub Title'

					],

					[
						'param_name'			=> 'sub_title_color',
						'type'					=> 'colorpicker',
						'heading'				=> 'Sub Title Text Color'

					],

					[
						'param_name'		=> 'programs_bar',
						'type'				=> 'textfield',
						'heading'			=> 'Progras Bar %'

					],

					[
						'param_name'			=> 'expertise_groups',
						'type'					=> 'param_group',
						'heading'				=> 'Add Vision Items',
						'params'				=> [
							[
								'param_name'			=> 'box_title',
								'type'					=> 'textfield',
								'heading'				=> 'Item Title',

							],

							[
								'param_name'			=> 'box_descerption',
								'type'					=> 'textarea',
								'heading'				=> 'Item Description',

							]


						]


					],

					[
						'param_name'			=> 'images',
						'type'					=> 'attach_image',
						'heading'				=> 'Vision Image'

					],

					


				]



			]);




		}






 ?>