<?php
/* human appeal first shorcode create heere now*/

/* */
add_shortcode( 'human-hunger-title', 'human_title' );

function human_title( $atts ) {
         extract( 
           shortcode_atts([
              'title' => '',

         ],$atts ) );
  
 return "
        <div class='emergency_left'>
            <h2>{$title}</h2>
        </div>
 		";
}
?>

<?php
add_action( 'vc_before_init', 'humanHungerTitle' );

function humanHungerTitle() {
 vc_map([
  "name" => __( "Title", "human-appeal" ),
  "base" => "human-hunger-title",
   "icon"    => get_template_directory_uri(). '/access/images/logo/logo.png',
  "category" => __( "Human Appleal", "human-appeal"),
  "params" =>[
            [
              "param_name" => "title",
              "type" => "textfield",
              "heading" => __( "Title Text", "human-appeal" ),
              "description" => __( "Text", "human-appeal" )
            ],
        ]
    ]);
}
?>