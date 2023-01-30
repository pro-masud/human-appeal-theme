<?php
/* human appeal first shorcode create heere now*/

/* */
add_shortcode( 'human_login_box', 'human_login_box' );

function human_login_box( $atts ) {
         extract( 
           shortcode_atts([
              'box_name'       => '',

         ],$atts ) );
  
      /* login icon include here now*/
        $googleImg = get_template_directory_uri()."/access/images/logo/g.png";
        $facebookImg = get_template_directory_uri()."/access/images/logo/f.png";

 return " <div class='login-boxs'>
              <h3>{$box_name}</h3>
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
              "param_name" => "box_name",
              "type" => "textfield",
              "heading" => __( "Box Name", "human-appeal" ),
              "description" => __( "", "human-appeal" )
            ],
        ]
    ]);
}
?>