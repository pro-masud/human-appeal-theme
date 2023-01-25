<?php 

	add_action('widgets_init','human_appeal_social_link');

	function human_appeal_social_link(){

			register_widget('human_appeal_social_link');

	}

 class human_appeal_social_link extends WP_Widget{

 		public function __construct(){

 			parent:: __construct('human_appeal_social_link','Social Links',[

 				'description'			=> 'Footer Social Icons'
 			]);
 		}

 		public function widget($one, $two){ 
			      $whatsapp       =  $two['whatsapp'];
            $facebook       =  $two['facebook'];
            $twitter       =  $two['twitter'];
            $instagram       =  $two['instagram'];
            $linkedin       =  $two['linkedin'];
            $youtube       =  $two['youtube'];
 				?>

 		       	<?php echo $one['before_widget']; ?>
                <ul class="nav">
                    <div class="footer-social-link">

                        <?php if($whatsapp) :  ?>
                        <a href="<?php echo esc_url($whatsapp); ?>"><i class="fa-brands fa-whatsapp"></i></a>
                        <?php endif; ?>

                        <?php if($facebook) :  ?>
                        <a href="<?php echo esc_url($facebook); ?>"><i class="fa-brands fa-facebook-f"></i></a>
                         <?php endif; ?>

                         <?php if($twitter) :  ?>
                        <a href="<?php echo esc_url($twitter); ?>"><i class="fa-brands fa-twitter"></i></a>
                         <?php endif; ?>

                         <?php if($instagram) :  ?>
                        <a href="<?php echo esc_url($instagram); ?>"><i class="fa-brands fa-instagram"></i></a>
                         <?php endif; ?>

                         <?php if($linkedin) :  ?>
                        <a href="<?php echo esc_url($linkedin); ?>"><i class="fa-brands fa-linkedin-in"></i></a>
                         <?php endif; ?>

                         <?php if($youtube) :  ?>
                        <a href="<?php echo esc_url($youtube); ?>"><i class="fa-brands fa-youtube"></i></a>
                         <?php endif; ?>
                    </div>
                </ul>
               
              <?php echo $one['after_widget']; ?>



 		<?php }

 		public function form($two){

 		
      if( isset($two['whatsapp'])){
          $whatsapp       =  $two['whatsapp'];
      }
      if( isset($two['facebook'])){
          $facebook       =  $two['facebook'];
      }
      if( isset($two['twitter'])){
          $twitter       =  $two['twitter'];
      }
      if( isset($two['instagram'])){
          $instagram       =  $two['instagram'];
      }
      if( isset($two['linkedin'])){
          $linkedin       =  $two['linkedin'];
      }
      if( isset($two['youtube'])){
          $youtube       =  $two['youtube'];
      }

 			?>

 			<p>
 				<label>Whatsapp Number</label>
 				<input name="<?php echo $this -> get_field_name('whatsapp') ?>" class="widefat" value="<?php if(isset($whatsapp)){ echo $whatsapp; } ?>" type="text">
 			</p>
      <p>
        <label>Facebook Link</label>
        <input name="<?php echo $this -> get_field_name('facebook') ?>" class="widefat" value="<?php if(isset($facebook)){ echo $facebook; } ?>" type="text">
      </p>

      <p>
        <label>Twitter Link</label>
        <input name="<?php echo $this -> get_field_name('twitter') ?>" class="widefat" value="<?php if(isset($twitter)){ echo $twitter; } ?>" type="text">
      </p>

      <p>
        <label>Instagram Link</label>
        <input name="<?php echo $this -> get_field_name('instagram') ?>" class="widefat" value="<?php if(isset($instagram)){ echo $instagram; } ?>" type="text">
      </p>

      <p>
        <label>Linkedin Link</label>
        <input name="<?php echo $this -> get_field_name('linkedin') ?>" class="widefat" value="<?php if(isset($linkedin)){ echo $linkedin; } ?>" type="text">
      </p>

      <p>
        <label>YouTube Link</label>
        <input name="<?php echo $this -> get_field_name('youtube') ?>" class="widefat" value="<?php if(isset($youtube)){ echo $youtube; } ?>" type="text">
      </p>


 	<?php 	}


	





 }



















 ?>