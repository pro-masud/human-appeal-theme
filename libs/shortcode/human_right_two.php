<?php
/* human appeal first shorcode create heere now*/

/* */
add_shortcode( 'human_user_right_two', 'human_user_right_two' );

function human_user_right_two( $atts ) {
         extract( 
           shortcode_atts([
              'user_right_info'  => '',
              'sub_title'        => '',
              'descrip'         => '',

         ],$atts ) );
  
     return "<div class='campaign-box-right'>
                <h5>URGENT CARE</h5>
                <h2>Recent <strong>Fund Rising</strong> Program</h2>
                <p>We would love to partner with us to help the communities, families and children experience a life free from poverty and able to sustain themselves. You can help make a huge difference to these lives.</p>
            </div>
      ";
}
?>

<?php
add_action( 'vc_before_init', 'human_user_right_two_vc' );

function human_user_right_two_vc() {
 vc_map([
  "name" => __( "Author Right Two", "human-appeal" ),
  "base" => "human_user_right_two",
  "icon"    => get_template_directory_uri(). '/access/images/logo/logo.png',
  "category" => __( "Human Appleal", "human-appeal"),
  "params" =>[
            [
              "param_name" => "user_right_info",
              "type" => "textfield",
              "heading" => __( "Title", "human-appeal" ),
              "description" => __( "Headering Title", "human-appeal" )
            ],
            [
              "param_name" => "sub_title",
              "type" => "textfield",
              "heading" => __( "Sub Title", "human-appeal" ),
              "description" => __( "Sub Title", "human-appeal" )
            ],
            [
              "param_name" => "descrip",
              "type" => "textarea",
              "heading" => __( "Description", "human-appeal" ),
              "description" => __( "", "human-appeal" )
            ],
        ]
    ]);
}