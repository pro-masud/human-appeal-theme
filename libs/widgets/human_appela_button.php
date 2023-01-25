<?php 

	add_action('widgets_init','human_appeal_button');

	function human_appeal_button(){

			register_widget('human_appeal_button');

	}

 class human_appeal_button extends WP_Widget{

 		public function __construct(){

 			parent:: __construct('human_appeal_button','Donate Button',[

 				'description'			=> 'Footer Donete Button'
 			]);
 		}

 		public function widget($one, $two){ 
			      $button       =  $two['button'];
 				?>

 		       	<?php echo $one['before_widget']; ?>
                    <?php if($button) :  ?>
                      <div class="footer-btn">
                          <a href="<?php echo esc_url($button); ?>">Donate Now</a>
                      </div>
                    <?php endif; ?>
              <?php echo $one['after_widget']; ?>



 		<?php }

 		public function form($two){

 		
      if( isset($two['button'])){
          $button       =  $two['button'];
      }


 			?>

 			<p>
 				<label>Donate Now Link</label>
 				<input name="<?php echo $this -> get_field_name('button') ?>" class="widefat" value="<?php if(isset($button)){ echo $button; } ?>" type="text">
 			</p>


 	<?php 	}


	





 }



















 ?>