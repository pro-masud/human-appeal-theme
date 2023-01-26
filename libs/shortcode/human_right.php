<?php
/* human appeal first shorcode create heere now*/

/* */
add_shortcode( 'human_user_right', 'human_user_right' );

function human_user_right( $atts ) {
         extract( 
           shortcode_atts([
              'user_right_info'  => 'Let\'s fight altogether against all adversities.
Meet our chiarman ',
              'sub_title'        => '',
              'btn_text'         => '',
              'btn_url'          => '#',

         ],$atts ) );
  

 return "<div class='about_info'>
              <h5>{$sub_title}</h5>
              <h2>{$user_right_info}</h2>
              <a href='{$btn_url}'>{$btn_text}Meet our chiarman <i class='fa-solid fa-arrow-right-long'></i></a>
          </div>
 		";
}
?>

<?php
add_action( 'vc_before_init', 'human_user_right_vc' );

function human_user_right_vc() {
 vc_map([
  "name" => __( "User Right", "human-appeal" ),
  "base" => "human_user_right",
  "class" => "",
  "category" => __( "Human Appleal", "human-appeal"),
  "params" =>[
            [
              "param_name" => "user_right_info",
              "type" => "textfield",
              "heading" => __( "Header Title", "human-appeal" ),
              "description" => __( "Headering Title", "human-appeal" )
            ],
            [
              "param_name" => "sub_title",
              "type" => "textfield",
              "heading" => __( "Hearder Sub Title", "human-appeal" ),
              "description" => __( "Sub Title", "human-appeal" )
            ],
            [
              "type" => "textfield",
              "heading" => __( "Button Text", "human-appeal" ),
              "param_name" => "btn_text",
              "description" => __( "About Us", "human-appeal" )
            ],
            [
              "type" => "textfield",
              "heading" => __( "Botton URL", "human-appeal" ),
              "param_name" => "btn_url",
              "description" => __( "Botton URL", "human-appeal" )
            ]
        ]
    ]);
}
?>