<?php
/* human appeal first shorcode create heere now*/

/* */
add_shortcode( 'human_project_items', 'human_project_items' );

function human_project_items( $atts ) {
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


         $project_img_one = wp_get_attachment_url($project_img);
         $project_models_img = wp_get_attachment_url($project_model_img);
  

 return "<div class='modal_item'>
              <div class='our_pro' style='background-color: {$project_bg};'>
                  <button type='hidden' class='btn' data-bs-toggle='modal' data-bs-target='#ourpro'>
                      <img src='{$project_img_one}' alt='pro1'>
                      <p>{$project_title}</p>
                      <a href='#''><i class='fa-solid fa-arrow-right-long'></i></a>
                  </button>
              </div>
              <div class='modal fade ourproject_model' id='ourpro'>
                  <div class='modal-dialog '>
                      <div class='modal-content '>
                          <div class='modal-header'>
                              <button type='button' class='btn-close' data-bs-dismiss='modal'></button>
                          </div>
                          <div class='modal-body modal_cont'>
                              <div class='row ourpro_modal'>
                                  <div class='col-lg-6'>
                                     <div class='model_left'>
                                          <img src='{$project_models_img}' alt=''>
                                     </div>
                                  </div>
                                  <div class='col-lg-6'>
                                      <div class='model_right'>
                                          <h2>{$project_model_title}</h2>
                                          <p>{$project_model_desc}
                                          </p>
                                          <div class='model_btn'>
                                              <a class='btn' href='{$project_model_button_url_one}'>{$project_model_button_text_one}</a>
                                              <a class='btn' href='{$project_model_button_url_two}'>{$project_model_button_text_two}</a>
                                              <a class='btn' href='{$project_model_you_link}'><i class='fa-solid fa-play'></i></a>
                                          </div>
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
add_action( 'vc_before_init', 'human_project_items_vc' );

function human_project_items_vc() {
 vc_map([
  "name" => __( "Project Item", "human-appeal" ),
  "base" => "human_project_items",
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