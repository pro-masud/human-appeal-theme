<?php
/* human appeal first shorcode create heere now*/

/* */
add_shortcode( 'human_our_project', 'human_our_project' );

function human_our_project( $atts ) {
         extract( 
           shortcode_atts([
              'heading'          => '',
              'sub_title'        => '',

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
              "param_name" => "heading",
              "type" => "textfield",
              "heading" => __( "Project Title", "human-appeal" ),
              "description" => __( "Title", "human-appeal" )
            ],
            [
              "param_name" => "sub_title",
              "type" => "textarea",
              "heading" => __( "Project Sub Title", "human-appeal" ),
              "description" => __( "Sub Title", "human-appeal" )
            ]
        ]
    ]);
}
?>