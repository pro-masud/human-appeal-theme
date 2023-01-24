<?php 

	add_action('widgets_init','comet_pro_serech_option');

	function comet_pro_serech_option(){

			register_widget('comet_pro_serech_option');

	}

 class comet_pro_serech_option extends WP_Widget{

 		public function __construct(){

 			parent:: __construct('comet_pro_serech_option',' Comet Pro Serech Options',[

 				'description'			=> 'Comet Pro Serech Option Widgets'
 			]);
 		}

 		public function widget($one, $two){ 
			$title 			=  $two['title'];
 				?>

 			<?php echo $one['before_widget']; ?>
                <?php echo $one['before_title']; ?><?php echo $title; ?><?php echo $one['after_title']; ?>
                <form method="GET">
                  <input name="s" type="text" placeholder="Search.." class="form-control">
                </form>
              <?php echo $one['after_widget']; ?>



 		<?php }

 		public function form($two){

 			$title 			=  $two['title'];

 			?>

 			<p>
 				<label>Widget Title</label>
 				<input name="<?php echo $this -> get_field_name('title') ?>" class="widefat" value="<?php echo $title; ?>" type="text">
 				
 			</p>


 	<?php 	}


	





 }



















 ?>