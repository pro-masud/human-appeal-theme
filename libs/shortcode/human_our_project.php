<?php
/* human appeal first shorcode create heere now*/

/* */
add_shortcode( 'human_our_project', 'human_our_project' );

function human_our_project( $atts ) {
         extract( 
           shortcode_atts([
              'see_more_text'              => '',
              'see_more_btn_link'          => '',

         ],$atts ) );
  
         ob_start();
         ?>
            <div class="row">

              <?php 
                $our_project = new WP_Query([
                      'post_type'     => 'human_our_project',
                      'posts_per_page'  => 6,
                ]);

                  while(  $our_project -> have_posts()) :  $our_project -> the_post(); ?>
                      <div class="col-md-4">
                          <div class="ongoingporject">
                              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                              <div class="onproject-title">
                                  <h3><?php the_title(); ?></h3>
                              </div>
                          </div>
                      </div>
                  <?php endwhile; ?>
                  <div class="col-lg-12">
                     <div class="onproject_btn">
                          <a href="<?php echo esc_url($see_more_btn_link); ?>"><?php echo $see_more_text; ?><i class="fa-solid fa-angles-right"></i></a>
                     </div>
                </div>
              </div>

         <?php

        return ob_get_clean();
}
?>

<?php
add_action( 'vc_before_init', 'human_our_project_vc' );

function human_our_project_vc() {
 vc_map([
  "name" => __( "Our Projects", "human-appeal" ),
  "base" => "human_our_project",
  "icon"    => get_template_directory_uri(). '/access/images/logo/logo.png',
  "category" => __( "Human Appleal", "human-appeal"),
  "params" =>[
            [
              "param_name" => "see_more_text",
              "type" => "textfield",
              "heading" => __( "Project Button Text", "human-appeal" ),
              "description" => __( "Text", "human-appeal" )
            ],
            [
              "param_name" => "see_more_btn_link",
              "type" => "textfield",
              "heading" => __( "Project All Button Links", "human-appeal" ),
              "description" => __( "URL", "human-appeal" )
            ],
        ]
    ]);
}
?>