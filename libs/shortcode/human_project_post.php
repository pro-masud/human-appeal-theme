<?php
/* human appeal first shorcode create heere now*/

/* */
add_shortcode( 'human_project_post', 'human_project_post' );

function human_project_post( $atts ) {
         extract( 
           shortcode_atts([
              'user_name'       => '',
         ],$atts ) );
  
    

  /* Project custom post 4 ourput show here shortcode */

        ?>  
          <div class="row">

            <?php 

              $project_post   = new WP_Query([
                'post_type'   => 'human_appeal_gellary',
                'posts_per_page' => 4

              ]);

            while(  $project_post -> have_posts()) :  $project_post -> the_post();
             ?>
               <div class="col-md-3">
                    <div class="project-box">
                        <div class="project-img">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                            <div class="project-title">
                                <h2><?php echo get_post_meta(get_the_id(),'immage_hover_title',true); ?></h2>
                            </div>
                        </div>
                        <div class="project-info">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php echo wp_trim_words(get_the_content(), '15', true); ?></p>
                        </div>
                        <div class="project-btn">
                            <a href="<?php the_permalink(); ?>">See Details <i class="fa-solid fa-arrow-right-long"></i></a>
                            <a href="<?php echo get_post_meta(get_the_id(),'project_btn_url',true); ?>">Donete Now</a>
                        </div>
                    </div>
                </div>
              <?php endwhile; ?>
          </div>

        <?php
}
?>

<?php
add_action( 'vc_before_init', 'human_project_post_vc' );

function human_project_post_vc() {
 vc_map([
  "name" => __( "Project Post 4 Items", "human-appeal" ),
  "base" => "human_project_post",
  "icon"    => get_template_directory_uri(). '/access/images/logo/logo.png',
  "category" => __( "Human Appleal", "human-appeal"),
  "params" =>[
                [
                  "param_name" => "user_name",
                  "type" => "textfield",
                  "heading" => __( "Author Name", "human-appeal" ),
                  "description" => __( "Header Title", "human-appeal" )
                ],
            ]
    ]);
}
?>