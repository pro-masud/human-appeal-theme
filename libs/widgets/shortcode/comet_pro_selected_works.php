<?php 
	
	add_shortcode('comet_pro_our_work','comet_pro_our_work');

	
	function comet_pro_our_work($one,$two){ 


			$comet_pro_our_workt 	= shortcode_atts([

				'title'							=> '',
				'title_color'					=> '',
				'programs_bar'					=> '',

				'expertise_groups'				=> '',
				'box_title'						=> '',
				'box_descerption'				=> ''



			], $one);


			ob_start();
		?>

	<section id="portfolio" class="pb-0">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="title m-0 txt-xs-center txt-sm-center">
              <h2 style=" width:80%; color:<?php echo 	$comet_pro_our_workt['title_color']; ?>;" class="upper"><?php echo 	$comet_pro_our_workt['title']; ?><span class="red-dot"></span></h2>
              <hr style="width: <?php echo $comet_pro_our_workt['title_color']; ?>;">
            </div>
          </div>
          <div class="col-md-6">
            <ul id="filters" class="no-fix mt-25">
              <li data-filter="*" class="active">All</li>


              <?php 

              			$our_work 	= get_terms('our-work-cat');

              			foreach( $our_work as $allcat ) :
               ?>
              <li data-filter=".<?php echo $allcat  -> slug; ?>"><?php echo $allcat  -> name; ?></li>

             	<?php endforeach; ?>


            </ul>
            <!-- end of portfolio filters-->
          </div>
        </div>
        <!-- end of row-->
      </div>
      <div class="section-content pb-0">
        <div id="works" class="four-col wide mt-50">

        		<?php 

        			$all_work 		=  new WP_Query([
        				'post_type'				=> 'our_words',
        				'posts_per_page'		=> 8



        			]);



        		while( $all_work ->  have_posts()) : $all_work -> the_post(); ?>
          <div class="work-item <?php 

          			$work_all_cat 	=  get_the_terms( get_the_Id(),'our-work-cat');

          			foreach( $work_all_cat as $cat_all ){

          				echo $cat_all -> slug . ' ';
          			}
	
          			?>

          		

          			 ">


            <div class="work-detail">
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail(); ?>
                <div class="work-info">
                  <div class="centrize">
                    <div class="v-center">
                      <h3><?php the_title(); ?></h3>
                      <p><?php the_content(); ?></p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
      <?php endwhile; ?>


        </div>
        <!-- end of portfolio grid-->
      </div>
    </section>



	<?php 
			return ob_get_clean();

}


		add_action('vc_before_init','vc_comet_our_selected_work');

		function vc_comet_our_selected_work(){

			vc_map([
				'name'			=> 'Comet Selected Work',
				'base'			=> 'comet_pro_our_work',
				'description'	=> 'Coment Pro Selected Works',
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
						'param_name'		=> 'programs_bar',
						'type'				=> 'textfield',
						'heading'			=> 'Progras Bar %'

					],

					


				]



			]);




		}






 ?>