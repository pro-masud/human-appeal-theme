<?php
/* human appeal first shorcode create heere now*/

/* */
add_shortcode( 'human_login_box', 'human_login_box' );

function human_login_box( $atts ) {
         extract( 
           shortcode_atts([
              'login_title'       => '',
              'user_job'        => '',
              'descrip'         => '',
              'user_btn_text'   => '',
              'user_btn_url'    => '',
              'user_image'      => '',

         ],$atts ) );
  
      /* user image include here now*/
        $image = wp_get_attachment_url($user_image);

        $googleImg = get_template_directory_uri()."/access/images/logo/g.png";
        $facebookImg = get_template_directory_uri()."/access/images/logo/f.png";

 return " <div class='login-boxs'>
              <h3>Log In</h3>
              <div class='openwidth'>
                  <button><img src='{$googleImg}' alt='g'>Sign in with google</button>
                  <button><img src='{$facebookImg}' alt='g'>Sign in with Facebook</button>
                  <a href='#''>Or sign in with email</a>
              </div>
              <div class='login_box'>
                  <label for='email'>Email*</label>
                  <input type='text' placeholder='mail@website.com'>
                  <label for='email'>Password</label>
                  <input type='password*'' placeholder='Min. 8 Character'>
                  <div class='pass_for'>
                      <label for='checkbox'> <input id='checkbox' type='checkbox'>Remember me</label>
                      <a href='#''>Forget Password?</a>
                  </div>
                  <input type='submit'>
                  <a href='#'d'>New registration</a>
              </div>
          </div>
 		";
}
?>

<?php
add_action( 'vc_before_init', 'human_login_box_vc' );

function human_login_box_vc() {
 vc_map([
  "name" => __( "Log In Box", "human-appeal" ),
  "base" => "human_login_box",
  "icon"    => get_template_directory_uri(). '/access/images/logo/logo.png',
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