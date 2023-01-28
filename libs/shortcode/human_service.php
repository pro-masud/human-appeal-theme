<?php
/* human appeal first shorcode create heere now*/

/* */
add_shortcode( 'human_service', 'human_service' );

function human_service( $atts ) {
         extract( 
           shortcode_atts([
              'work_title'          => '',
              'work_sub'            => '',
              'work_img'            => '',

         ],$atts ) );

         $image = wp_get_attachment_url($work_img);
  

 return "<div class='working-left working-right'>
            <h2>{$work_title}</h2>
            <p>{$work_sub}</p>
            <img src='{$image}' alt='bangla'>
        </div>
 		";
}

?>

<?php
add_action( 'vc_before_init', 'human_work_vc' );

function human_work_vc() {
 vc_map([
  "name" => __( "Work Box", "human-appeal" ),
  "base" => "human_service",
  "icon"    => get_template_directory_uri(). '/access/images/logo/logo.png',
  "category" => __( "Human Appleal", "human-appeal"),
  "params" =>[
            [
              "param_name" => "work_title",
              "type" => "textfield",
              "heading" => __( "Work Box Title", "human-appeal" ),
              "description" => __( "Title", "human-appeal" )
            ],
            [
              "param_name" => "work_sub",
              "type" => "textarea",
              "heading" => __( "Work Description", "human-appeal" ),
              "description" => __( "Description", "human-appeal" )
            ],
            [
              "param_name" => "work_img",
              "type" => "attach_image",
              "heading" => __( "Work Image", "human-appeal" ),
              "description" => __( "Upload a Image Now", "human-appeal" )
            ]
        ]
    ]);
}
?>