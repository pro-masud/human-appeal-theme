<?php 

	add_action('widgets_init','comet_pro_resent_post');

	function comet_pro_resent_post(){

			register_widget('comet_pro_resent_post');

	}

 class comet_pro_resent_post extends WP_Widget{

 		public function __construct(){

 			parent:: __construct('comet_pro_resent_post',' Comet Pro Resent Post',[

 				'description'			=> 'Comet Pro Resent Post Widgets'
 			]);
 		}

 		public function widget($one, $two){ 
			$title 			=  $two['title'];
 				?>

 			<?php echo $one['before_widget']; ?>
                <?php echo $one['before_title']; ?><?php echo $title; ?><?php echo $one['after_title']; ?>
                <ul class="nav">

                	<?php 
                		$latest_posrt 	= new WP_Query([
                			'post_type'				=> 'post',
                			'posts_per_page'		=> 5


                		]);


                	while( $latest_posrt ->  have_posts()) : $latest_posrt -> the_post(); ?>

                  <li><a href="#"><?php the_title(); ?><i class="ti-arrow-right"></i><span><?php the_time('F d, Y'); ?></span></a>
                  </li>
              <?php endwhile; ?>



                </ul>
               
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