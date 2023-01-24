<?php 
	
	add_shortcode('comet_pro_expertise','comet_pro_expertise');

	
	function comet_pro_expertise($one,$two){ 


			$coment_expertise 	= shortcode_atts([

				'title'							=> '',
				'title_color'					=> '',
				'description'					=> '',
				'description_color'				=> '',
				'programs_bar'					=> '',
				'images'						=> '',

				'expertise_groups'				=> '',
				'box_title'						=> '',
				'box_descerption'				=> ''



			], $one);


			ob_start();
		?>

 <section class="p-0 b-0">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 col-sm-4 img-side img-left mb-0">
            <div class="img-holder">
              <img src="<?php echo wp_get_attachment_url($coment_expertise['images']); ?>" alt="" class="bg-img">
              <div class="centrize">
                <div class="v-center">
                  <div class="title txt-xs-center">
                    <h4  style="color:<?php echo $coment_expertise['description_color']; ?>;" class="upper"><?php echo $coment_expertise['description']; ?></h4>
                    <h3 style="color:<?php echo $coment_expertise['title_color']; ?>;"><?php echo $coment_expertise['title']; ?><span class="red-dot"></span></h3>
                     <hr style="width:<?php echo $coment_expertise['programs_bar']; ?>%;">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end of side background image-->
          <div class="col-md-6 col-md-offset-6 col-sm-8 col-sm-offset-4">
            <div class="services">
              <div class="row">

              	<?php 

              				 $allservicebox		= $coment_expertise['expertise_groups'];


              				$allbox 	= 	vc_param_group_parse_atts($allservicebox);




              				foreach($allbox as $servicebox ) :

              	 ?>


                <div class="col-sm-6 border-bottom border-right">
                  <div class="service"><i class="icon-focus"></i><span class="back-icon"><i class="icon-focus"></i></span>
                    <h4><?php echo $servicebox['box_title']; ?></h4>
                    <hr>
                    <p class="alt-paragraph"><?php echo $servicebox['box_descerption']; ?></p>
                  </div>
                </div>

            <?php endforeach; ?>


<!--                 <div class="col-sm-6 border-bottom">
                  <div class="service"><i class="icon-layers"></i><span class="back-icon"><i class="icon-layers"></i></span>
                    <h4>Interactive</h4>
                    <hr>
                    <p class="alt-paragraph">Commodi totam esse quis alias, nihil voluptas repellat magni, id fuga perspiciatis, ut quia beatae, accus.</p>
                  </div>
                 
                </div>
                <div class="col-sm-6 border-bottom border-right">
                  <div class="service"><i class="icon-mobile"></i><span class="back-icon"><i class="icon-mobile"></i></span>
                    <h4>Production</h4>
                    <hr>
                    <p class="alt-paragraph">Doloribus qui asperiores nisi placeat volup eum, nemo est, praesentium fuga alias sit quis atque accus.</p>
                  </div>
                  
                </div>
                <div class="col-sm-6 border-bottom">
                  <div class="service"><i class="icon-globe"></i><span class="back-icon"><i class="icon-globe"></i></span>
                    <h4>Editing</h4>
                    <hr>
                    <p class="alt-paragraph">Aliquid repellat facilis quis. Sequi excepturi quis dolorem eligendi deleniti fuga rerum itaque.</p>
                  </div>
                  
                </div> -->



              </div>
            </div>
            <!-- end of row-->
          </div>
        </div>
        <!-- end of row -->
      </div>
    </section>
			


	<?php 
			return ob_get_clean();

}


		add_action('vc_before_init','vc_comet_expertise');

		function vc_comet_expertise(){

			vc_map([
				'name'			=> 'Comet Expertise Section',
				'base'			=> 'comet_pro_expertise',
				'description'	=> 'Coment Pro Expertise',
				'category'		=> 'Comet Pro',
				'icon'			=> get_template_directory_uri(). '/acess/icon/icon.png',
				'params'		=> [
					[
						'param_name'			=> 'title',
						'type'					=> 'textfield',
						'heading'				=> 'Expertise Title'

					],

					[
						'param_name'			=> 'title_color',
						'type'					=> 'colorpicker',
						'heading'				=> 'Expertise Title Text Color'

					],

					

					[
						'param_name'			=> 'description',
						'type'					=> 'textarea',
						'heading'				=> 'Expertise Description'

					],

					[
						'param_name'			=> 'description_color',
						'type'					=> 'colorpicker',
						'heading'				=> 'Expertise Description Text Color'

					],

					[
						'param_name'		=> 'programs_bar',
						'type'				=> 'textfield',
						'heading'			=> 'Progras Bar %'

					],

					[
						'param_name'			=> 'images',
						'type'					=> 'attach_image',
						'heading'				=> 'Expertise Title'

					],

					[
						'param_name'			=> 'expertise_groups',
						'type'					=> 'param_group',
						'heading'				=> 'Add Expertise Services',
						'params'				=> [
							[
								'param_name'			=> 'box_title',
								'type'					=> 'textfield',
								'heading'				=> 'Services Title',

							],

							[
								'param_name'			=> 'box_descerption',
								'type'					=> 'textarea',
								'heading'				=> 'Services Description',

							]


						]


					]




				]



			]);




		}






 ?>