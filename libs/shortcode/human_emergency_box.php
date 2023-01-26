<?php
/* human appeal first shorcode create heere now*/

/* */
add_shortcode( 'human_emergency_box', 'human_emergency_box' );

function human_emergency_box( $atts ) {
         extract( 
           shortcode_atts([
              'box_emergency_text' => '',
              'box_emergency_sub_text' => '',
              'btn_text_one'    => '',
              'btn_url_one'     => '',
              'btn_text_two'    => '',
              'btn_url_two'     => '',

         ],$atts ) );
  
 return "<div class='emergency_right'>
            <h2 class='text-center'>{$box_emergency_text}</h2>
            <p>{$box_emergency_sub_text}</p>
            <div class='energency_btn'>
                <a href='{$btn_url_one}' class='btn'>{$btn_text_one} <i class='fa-solid fa-arrow-right-long'></i></a>
                <a href='{$btn_url_two}'class='btn'>{$btn_text_two}</a>
            </div>
          </div>
 		";
}
?>

<?php
add_action( 'vc_before_init', 'human_emergency_box_vc' );

function human_emergency_box_vc() {
 vc_map([
  "name" => __( "Human Emergen Box", "human-appeal" ),
  "base" => "human_emergency_box",
  "class" => "",
  "category" => __( "Human Appleal", "human-appeal"),
  "params" =>[
            [
              "param_name" => "box_emergency_text",
              "type" => "textfield",
              "heading" => __( "Emergency Title", "human-appeal" ),
              "description" => __( "Header Title", "human-appeal" )
            ],
            [
              "param_name" => "box_emergency_sub_text",
              "type" => "textfield",
              "heading" => __( "Emergency Sub Title", "human-appeal" ),
              "description" => __( "Header Sub Title", "human-appeal" )
            ],
            [
              "type" => "textfield",
              "holder" => "div",
              "class" => "",
              "heading" => __( "Botton Text", "human-appeal" ),
              "param_name" => "btn_text_one",
              "description" => __( "Botton One", "human-appeal" )
            ],
            [
              "type" => "textfield",
              "holder" => "div",
              "class" => "",
              "heading" => __( "Botton URL", "human-appeal" ),
              "param_name" => "btn_url_one",
              "description" => __( "Botton URL", "human-appeal" )
            ],
            [
              "type" => "textfield",
              "holder" => "div",
              "class" => "",
              "heading" => __( "Botton Text", "human-appeal" ),
              "param_name" => "btn_text_two",
              "description" => __( "Botton Two", "human-appeal" )
            ],
            [
              "type" => "textfield",
              "holder" => "div",
              "class" => "",
              "heading" => __( "Botton URL", "human-appeal" ),
              "param_name" => "btn_url_two",
              "description" => __( "Botton URL", "human-appeal" )
            ]
        ]
    ]);
}
?>