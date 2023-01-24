<?php 
	
	add_shortcode('comet_pro_our_carogal','comet_pro_our_carogal');

	
	function comet_pro_our_carogal($one,$two){ 


			$coment_title_box 	= shortcode_atts([
				'title'					=> '',
				'client_group'			=> '',
				'carogal_desc'			=> '',
				'author_title'			=> '',
				'client_image'			=> ''




			], $one);


			ob_start();
		?>
		<section class="parallax">
			<?php 

						$all_img 	=  vc_param_group_parse_atts($coment_title_box['client_group']);



						foreach( $all_img as $img_all ) :

							$img = wp_get_attachment_url($img_all['client_image']);


						// echo $bg_img 	=  wp_get_attachment_url($all_description['client_image']);

			 ?>
      <div data-parallax="scroll" data-image-src="<?php echo $img; ?>" class="parallax-bg"></div>
  <?php endforeach; ?>

      <div class="parallax-overlay pb-50 pt-50">
        <div class="container">
          <div class="title center">
            <h3><?php echo $coment_title_box['title']; ?><span class="red-dot"></span></h3>
            <hr>
          </div>
          <div class="section-content">
            <div id="testimonials-slider" data-options="{&quot;animation&quot;: &quot;slide&quot;, &quot;controlNav&quot;: true}" class="flexslider nav-outside">
              <ul class="slides">

              	<?php 

              			$all_description 	=  vc_param_group_parse_atts($coment_title_box['client_group']);


              			foreach( $all_description as $descrip ) :

              	 ?>
                <li>
                  <blockquote>
                    <p><?php echo $descrip['carogal_desc']; ?></p>
                    <footer><?php echo $descrip['author_title']; ?></footer>
                  </blockquote>
                </li>

            <?php endforeach; ?>


              </ul>
            </div>
          </div>
        </div>
        <!-- end of container-->
      </div>
    </section>

	<?php 
			return ob_get_clean();

}


		add_action('vc_before_init','vc_comet_our_carogal');

		function vc_comet_our_carogal(){

			vc_map([
				'name'			=> 'Comet Our Carogal ',
				'base'			=> 'comet_pro_our_carogal',
				'description'	=> 'Coment ProOur Carogal',
				'category'		=> 'Comet Pro',
				'icon'			=> get_template_directory_uri(). '/acess/icon/icon.png',
				'params'		=> [
					[
						'param_name'			=> 'title',
						'type'					=> 'textfield',
						'heading'				=> 'Carogal Title'

					],
					
					[
						'param_name'			=> 'client_group',
						'type'					=> 'param_group',
						'heading'				=> 'Add New Carogal',
						'params'				=> [
								[	
									'param_name'			=> 'carogal_desc',
									'type'					=> 'textarea',
									'heading'				=> 'Carogal Description',

								],

								[
									'param_name'			=> 'author_title',
									'type'					=> 'textfield',
									'heading'				=> 'Author Name'

								],

								[
									'param_name'			=> 'client_image',
									'type'					=> 'attach_image',
									'heading'				=> 'Carogal Image'

								]

						]


					]





					


				]



			]);




		}






 ?>