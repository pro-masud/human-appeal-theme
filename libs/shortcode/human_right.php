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
  

 return "<div class='our_title'>
            <h2>Our Projects {$heading}</h2>
            <p>We implemented a number of major development activities including human welfare and other specialized programs, specially designed for the deprived people. Besides we are operating in Countrywide, covering a population of over more than 1 million people transforming the quality of their lives with positive impact.{$sub_title}</p>
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
  "class" => "",
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
              "type" => "textfield",
              "heading" => __( "Project Sub Title", "human-appeal" ),
              "description" => __( "Sub Title", "human-appeal" )
            ]
        ]
    ]);
}
?>