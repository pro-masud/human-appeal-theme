<?php
/* human appeal first shorcode create heere now*/

/* */
add_shortcode( 'human-hunger-box', 'human_hunger_box' );

function human_hunger_box( $atts ) {
         extract( 
           shortcode_atts([
              'box_header_text' => '',
              'btn_text_one'    => '',
              'btn_url_one'     => '',
              'btn_text_two'    => '',
              'btn_url_two'     => '',

         ],$atts ) );
  
 return "<div class='hunger'>
            <h2> {$box_header_text}</h2>
            <div class='hunger_btn'>
                <a href='{$btn_url_one}' class='btn mx-2'>{$btn_text_one}</a>
                <a href='{$btn_url_two}' class='btn mx-2'>{$btn_text_two}</a>
            </div>
        </div>
 		";
}
?>

<?php
add_action( 'vc_before_init', 'your_name_integrateWithVC' );

function your_name_integrateWithVC() {
 vc_map([
  "name" => __( "Human Hunger Box", "human-appeal" ),
  "base" => "human-hunger-box",
   "icon"    => get_template_directory_uri(). '/access/images/logo/logo.png',
  "category" => __( "Human Appleal", "human-appeal"),
  "params" =>[
            [
              "param_name" => "box_header_text",
              "type" => "textfield",
              "heading" => __( "Humger Header Text", "human-appeal" ),
              "description" => __( "Header Text", "human-appeal" )
            ],
            [
              "type" => "textfield",
              "holder" => "div",
              "class" => "",
              "heading" => __( "Humger Botton Text", "human-appeal" ),
              "param_name" => "btn_text_one",
              "description" => __( "Humger Botton One", "human-appeal" )
            ],
            [
              "type" => "textfield",
              "holder" => "div",
              "class" => "",
              "heading" => __( "Humger Botton URL", "human-appeal" ),
              "param_name" => "btn_url_one",
              "description" => __( "Botton URL", "human-appeal" )
            ],
            [
              "type" => "textfield",
              "holder" => "div",
              "class" => "",
              "heading" => __( "Humger Botton Text", "human-appeal" ),
              "param_name" => "btn_text_two",
              "description" => __( "Humger Botton Two", "human-appeal" )
            ],
            [
              "type" => "textfield",
              "holder" => "div",
              "class" => "",
              "heading" => __( "Humger Botton URL", "human-appeal" ),
              "param_name" => "btn_url_two",
              "description" => __( "Botton URL", "human-appeal" )
            ]
        ]
    ]);
}
?>