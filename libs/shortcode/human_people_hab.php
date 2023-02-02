<?php
/* human appeal first shorcode create heere now*/

/* */
add_shortcode( 'human_people_hub', 'human_people_hub' );

function human_people_hub( $atts ) {
         extract( 
           shortcode_atts([
              'bg_hab_title'       => '',
              'bg_hab_description'       => '',
              'bg_hab_image'       => '',

         ],$atts ) );

         /*human appeal people image include here now*/

         $hab_image     = wp_get_attachment_url($bg_hab_image);
  
        ob_start();
     ?>
                  <div class="bg_hub_items">
                        <img src="<?php echo $hab_image; ?>" alt="hab">
                        <div class="hab_information">
                            <h2><?php  echo $bg_hab_title; ?></h2>
                            <p><?php echo $bg_hab_description; ?></p>
                        </div>
                    </div>

          <?php 

                return ob_get_clean();
}
?>

<?php
add_action( 'vc_before_init', 'human_people_hab_vc' );

function human_people_hab_vc() {
 vc_map([
  "name" => __( "People Hab", "human-appeal" ),
  "base" => "human_people_hub",
  "icon"    => get_template_directory_uri(). '/access/images/logo/logo.png',
  "category" => __( "Human Appleal", "human-appeal"),
  "params" =>[
            [
              "param_name" => "bg_hab_title",
              "type" => "textfield",
              "heading" => __( "Hab Title", "human-appeal" ),
              "description" => __( "title", "human-appeal" )
            ],
            [
              "param_name" => "bg_hab_description",
              "type" => "textarea",
              "heading" => __( "Hab Description", "human-appeal" ),
              "description" => __( "description", "human-appeal" )
            ],
            [
              "param_name" => "bg_hab_image",
              "type" => "attach_image",
              "heading" => __( "Hub Image", "human-appeal" ),
              "description" => __( "image", "human-appeal" )
            ],
        ]
    ]);
}
?>