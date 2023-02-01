<?php
/* human appeal first shorcode create heere now*/

/* */
add_shortcode( 'human_our_visition_box', 'human_our_visition_box' );

function human_our_visition_box( $atts ) {
         extract( 
           shortcode_atts([
              'visition_title'       => '',
              'visition_description'       => '',
              'visition_image'       => '',

         ],$atts ) );

         /*visition image includeing here now*/

          $v_image      = wp_get_attachment_url($visition_image);
  
        ob_start();
     ?>
              <div class="vistion-misstion-item">
                  <img src="<?php echo $v_image; ?>" alt="misstion">
                  <h2><?php echo $visition_title; ?></h2>
                  <p><?php echo $visition_description; ?></p>
              </div>

          <?php 

                return ob_get_clean();
}
?>

<?php
add_action( 'vc_before_init', 'human_visition_box_vc' );

function human_visition_box_vc() {
 vc_map([
  "name" => __( "Visiton Box", "human-appeal" ),
  "base" => "human_our_visition_box",
  "icon"    => get_template_directory_uri() . '/access/images/logo/logo.png',
  "category" => __( "Human Appleal", "human-appeal"),
  "params" =>[
            [
              "param_name" => "visition_title",
              "type" => "textfield",
              "heading" => __( "Visition Title", "human-appeal" ),
              "description" => __( "Title", "human-appeal" )
            ],
            [
              "param_name" => "visition_description",
              "type" => "textfield",
              "heading" => __( "Visition Description", "human-appeal" ),
              "description" => __( "Description", "human-appeal" )
            ],
            [
              "param_name" => "visition_image",
              "type" => "attach_image",
              "heading" => __( "Visition Image", "human-appeal" ),
              "description" => __( "Image", "human-appeal" )
            ],
        ]
    ]);
}
?>