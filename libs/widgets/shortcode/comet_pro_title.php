<?php 
	
	add_shortcode('comet_pro_title','comet_pro_title');

	
	function comet_pro_title($one,$two){ 


			$coment_title 	= shortcode_atts([

				'title'			=> '',
				'subtitle'		=> '',
				'programs_bar'	=> '',
				'description'	=> '',



			], $one);


			ob_start();
		?>
			<section id="about">
				<div class="container">
					<div class="title center">
			          <h4 class="upper"><?php echo $coment_title['subtitle']; ?></h4>
			          <h2><?php echo $coment_title['title']; ?><span class="red-dot"></span></h2>
			          <hr style="width:<?php echo $coment_title['programs_bar']; ?>%;">
			        </div>
			        <div class="section-content">
			          <div class="row">
			            <div class="col-md-8 col-md-offset-2">
			              <p class="lead-text serif text-center"><?php echo $coment_title['description']; ?></p>
			            </div>
			          </div>
			          <!-- end of row-->
			        </div>
			    </div>
			  </section>


	<?php 
			return ob_get_clean();

}


		add_action('vc_before_init','vc_comet_title');

		function vc_comet_title(){

			vc_map([
				'name'			=> 'Comet Title',
				'base'			=> 'comet_pro_title',
				'description'	=> 'Coment Pro Title Option',
				'category'		=> 'Comet Pro',
				'icon'			=> get_template_directory_uri(). '/acess/icon/icon.png',
				'params'		=> [
					[
						'param_name'		=> 'title',
						'type'				=> 'textfield',
						'heading'			=> 'Title'

					],

					[
						'param_name'		=> 'subtitle',
						'type'				=> 'textfield',
						'heading'			=> 'Sub Title'

					],

					[
						'param_name'		=> 'programs_bar',
						'type'				=> 'textfield',
						'heading'			=> 'Progras Bar %'

					],

					[
						'param_name'		=> 'description',
						'type'				=> 'textarea',
						'heading'			=> 'Description'

					]


				]



			]);




		}






 ?>