<?php 
	
	add_shortcode('comet_pro_resent_post_pro','comet_pro_resent_post_pro');

	
	function comet_pro_resent_post_pro($one,$two){ 


			$coment_title_box 	= shortcode_atts([
				'client_group'			=> '',
				'border_right'			=> '',
				'border_bottom'			=> '',
				'client_image'			=> ''




			], $one);


			ob_start();
		?>
		<div class="col-md-8 col-md-offset-2">
			<?php 
				$resent_post_all 	=  new WP_Query([
					'post_type'				=> 'post',
					'posts_per_page'		=> 2



				]);




			while( $resent_post_all -> have_posts()) : $resent_post_all -> the_post(); ?>
			<div class="blog-post">
                <div class="post-body">
                  <h3 class="serif"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  <hr>
                  <p class="serif"><?php echo wp_trim_words( get_the_content(), '34', false); ?></p>
                  <div class="post-info upper"><a href="<?php the_permalink(); ?>">Read More</a><span class="pull-right black-text"><?php the_time('F d, Y'); ?></span>
                  </div>
                </div>
                <!-- end of blog post-->
              </div>

          <?php endwhile; ?>
          </div>

	<?php 
			return ob_get_clean();

}


		add_action('vc_before_init','vc_comet_resent_post');

		function vc_comet_resent_post(){

			vc_map([
				'name'			=> 'Comet Resent Posts ',
				'base'			=> 'comet_pro_resent_post_pro',
				'description'	=> 'Coment Pro Resent Posts',
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