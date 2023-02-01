<?php
/* human appeal first shorcode create heere now*/

/* */
add_shortcode( 'human_project_title', 'human_project_title' );

function human_project_title( $atts ) {
         extract( 
           shortcode_atts([
              'heading'          => '',
              'sub_title'        => '',

         ],$atts ) );
  

 return "<div class='col'>
            <div class='our_title'>
              <h2>{$heading}</h2>
              <p>{$sub_title}</p>
            </div>
        </div>
    ";
}
?>

<?php
add_action( 'vc_before_init', 'human_project_title_vc' );

function human_project_title_vc() {
 vc_map([
  "name" => __( "Project Title", "human-appeal" ),
  "base" => "human_project_title",
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