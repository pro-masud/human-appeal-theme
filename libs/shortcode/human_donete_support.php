<?php
/* human appeal first shorcode create heere now*/

/* */
add_shortcode( 'human_donete_support', 'human_donete_support' );

function human_donete_support( $atts ) {
         extract( 
           shortcode_atts([
              'project_title'                       => '',
              'project_img'                         => '',
              'project_bg'                          => '',
              'project_model_title'                 => '',
              'project_model_desc'                  => '',
              'project_model_button_text_one'       => '',
              'project_model_button_url_one'        => '',
              'project_model_button_text_two'       => '',
              'project_model_button_url_two'        => '',
              'project_model_you_link'              => '',
              'project_model_img'                   => '',

         ],$atts ) );


  

 return "<div class='watch' style='background-image: url(\"./images/others/wbg.png\")'>
            <div class='container'>
                <div class='row'>
                    <div class='col'>
                        <div class='watching>
                            <h3>watch</h3>
                            <a href=''><img src='./images/others/w.png' alt='watch'></a>
                        </div>
                        <div class='TopwatchFe'>
                            <div class='row'>
                                <div class='col-sm-4'>
                                    <div class='TopwatchFe_item'>
                                        <h3>DONATE</h3>
                                        <p>Support our work</p>
                                    </div>
                                </div>
                                <div class='col-sm-4'>
                                    <div class='TopwatchFe_item'>
                                        <h3>DONATE</h3>
                                        <p>Support our work</p>
                                    </div>
                                </div>
                                <div class='col-sm-4'>
                                    <div class='TopwatchFe_item'>
                                        <h3>DONATE</h3>
                                        <p>Support our work</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 		";
}
?>

<?php
add_action( 'vc_before_init', 'human_donete_support_vc' );

function human_donete_support_vc() {
 vc_map([
  "name" => __( "Donete Supports Box", "human-appeal" ),
  "base" => "human_donete_support",
  "icon"    => get_template_directory_uri(). '/access/images/logo/logo.png',
  "category" => __( "Human Appleal", "human-appeal"),
  "params" =>[
            [
              "param_name" => "project_title",
              "type"      => "textfield",
              "heading"   => __( "Project Title", "human-appeal" ),
              "description" => __( "Project Item", "human-appeal" )
            ],
            [
              "param_name" => "project_img",
              "type"       => "attach_image",
              "heading"    => __( "Upload Project Image", "human-appeal" ),
              "description" => __( "Project Images", "human-appeal" )
            ],
            [
              "param_name" => "project_bg",
              "type"      => "colorpicker",
              "heading"   => __( "Project Background", "human-appeal" ),
              "description" => __( "Project Item Color", "human-appeal" )
            ],
            [
              "param_name" => "project_model_title",
              "type"      => "textfield",
              "heading"   => __( "Model Title", "human-appeal" ),
              "description" => __( "Popup Model Title", "human-appeal" )
            ],
            [
              "param_name" => "project_model_desc",
              "type"       => "textarea",
              "heading"    => __( "Model Description", "human-appeal" ),
              "description" => __( "Popup Model Description", "human-appeal" )
            ],
            [
              "param_name" => "project_model_button_text_one",
              "type"       => "textfield",
              "heading"    => __( "Button One Text", "human-appeal" ),
              "description" => __( "Botton 1 URL", "human-appeal" )
            ],
            [
              "param_name" => "project_model_button_url_one",
              "type"       => "textfield",
              "heading"    => __( "Botton URL", "human-appeal" ),
              "description" => __( "Botton 1 URL", "human-appeal" )
            ],
            [
              "param_name" => "project_model_button_text_two",
              "type"       => "textfield",
              "heading"    => __( "Button Two Text", "human-appeal" ),
              "description" => __( "Botton 2 URL", "human-appeal" )
            ],
            [
              "param_name" => "project_model_button_url_two",
              "type"       => "textfield",
              "heading"    => __( "Botton URL", "human-appeal" ),
              "description" => __( "Botton 2 URL", "human-appeal" )
            ],
            [
              "param_name" => "project_model_you_link",
              "type"       => "textfield",
              "heading"    => __( "YouTube Video URL", "human-appeal" ),
              "description" => __( "Put Your YouTube Link", "human-appeal" )
            ],
            [
              "param_name" => "project_model_img",
              "type"       => "attach_image",
              "heading"    => __( "Model Popup Image", "human-appeal" ),
              "description" => __( "Upload Your Model Images", "human-appeal" )
            ]
        ]
    ]);
}
?>