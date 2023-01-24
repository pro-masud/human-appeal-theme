<?php 


		function comet_post_formats(){ 

			if( get_post_type()  == 'post') :

			?>

			<script>
				(function($){
					$(document).ready(function(){

						$('#comet-video-link').hide();
						$('#comet-audio-link').hide();
						$('#comet-img-link').hide();

						let post_id = $("input[class = 'post-format']:checked").attr('id');

							
						/*post formate video link*/
						if( post_id == 'post-format-video'){

							$('#comet-video-link').show();

						}else{
							$('#comet-video-link').hide();


						}

						/*post formate video link*/
						if( post_id == 'post-format-audio'){

							$('#comet-audio-link').show();

						}else{
							$('#comet-audio-link').hide();


						}

						/*post formate video link*/
						if( post_id == 'post-format-gallery'){

							$('#comet-img-link').show();

						}else{
							$('#comet-img-link').hide();


						}


						$('input.post-format').change(function(){

							let post_id = $("input[class = 'post-format']:checked").attr('id');

							
						/*post formate video link*/
						if( post_id == 'post-format-video'){

							$('#comet-video-link').show();

						}else{
							$('#comet-video-link').hide();


						}

						/*post formate video link*/
						if( post_id == 'post-format-audio'){

							$('#comet-audio-link').show();

						}else{
							$('#comet-audio-link').hide();


						}

						/*post formate video link*/
						if( post_id == 'post-format-gallery'){

							$('#comet-img-link').show();

						}else{
							$('#comet-img-link').hide();


						}

						});

					});
				})(jQuery)
			</script>

		<?php endif; ?>
		<?php

		 }


		add_action('admin_print_scripts','comet_post_formats', 1000);




// 						/*post formate audio link*/
// 						if( get_post_meta(get_the_ID(),'comet-audio-link',true)){

// 							$('#comet-audio-link').show();

// 						}else{
// 							$('#comet-audio-link').hide();


// 						}

// 						/*post formate gallery img link*/
// 						if( get_post_meta(get_the_ID(),'comet-img-link',true)){

// 							$('#comet-img-link').show();

// 						}else{
// 							$('#comet-img-link').hide();


// 						}




 ?>