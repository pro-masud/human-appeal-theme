<?php
/* human appeal first shorcode create heere now*/

/* */
add_shortcode( 'human_user', 'human_user' );

function human_user( $atts ) {
         extract( 
           shortcode_atts([
              'user_name'       => '',
              'user_job'        => '',
              'descrip'         => '',
              'user_btn_text'   => '',
              'user_btn_url'    => '',
              'user_image'      => '',

         ],$atts ) );
  
      /* user image include here now*/
        $image = wp_get_attachment_url($user_image);

 return "<div class='about_user'>
              <div class='user_info'>
                  <img src='{$image}' alt='user'>
                  <h4>{$user_name}</h4>
                  <h6>{$user_job}</h6>
              </div>
              <p>{$descrip}</p>
              <a href='{$user_btn_url}'>{$user_btn_text} <i class='fa-solid fa-arrow-right-long'></i></a>
          </div>
 		";
}
?>

<?php
add_action( 'vc_before_init', 'human_users_vc' );

function human_users_vc() {
 vc_map([
  "name" => __( "Human User", "human-appeal" ),
  "base" => "human_user",
  "class" => "",
  "category" => __( "Human Appleal", "human-appeal"),
  "params" =>[
            [
              "param_name" => "user_name",
              "type" => "textfield",
              "heading" => __( "User Name", "human-appeal" ),
              "description" => __( "Header Title", "human-appeal" )
            ],
            [
              "param_name" => "user_job",
              "type" => "textfield",
              "heading" => __( "User Job Title", "human-appeal" ),
              "description" => __( "Sub Title", "human-appeal" )
            ],
            [
              "type" => "textarea",
              "heading" => __( "Description", "human-appeal" ),
              "param_name" => "descrip",
              "description" => __( "About Us", "human-appeal" )
            ],
            [
              "type" => "textfield",
              "heading" => __( "Botton Text", "human-appeal" ),
              "param_name" => "user_btn_text",
              "description" => __( "Botton URL", "human-appeal" )
            ],
            [
              "type" => "textfield",
              "heading" => __( "Botton URL", "human-appeal" ),
              "param_name" => "user_btn_url",
              "description" => __( "Botton Two", "human-appeal" )
            ],
            [
              "type" => "attach_image",
              "heading" => __( "User Images", "human-appeal" ),
              "param_name" => "user_image",
              "description" => __( "Upload Your Images", "human-appeal" )
            ]
        ]
    ]);
}
?>