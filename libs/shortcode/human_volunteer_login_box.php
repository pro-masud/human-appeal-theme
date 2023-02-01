<?php
/* human appeal first shorcode create heere now*/

/* */
add_shortcode( 'human_volunteer_login_box', 'human_volunteer_login_box' );

function human_volunteer_login_box( $atts ) {
         extract( 
           shortcode_atts([
              'box_name'       => '',

         ],$atts ) );
  
        ob_start();
     ?>
           <div class="valunteer-log">
                        <h2>Become a Volunteer</h2>
                        <div class="valunteer-btn">
                            <input type="text" placeholder="Name">
                            <input type="text" placeholder="Enter Your Email">
                            <input type="text" placeholder="Address, Street, contry">
                            <div class="upload-btn">
                                <button>Upload Images</button>
                                <input id="f-up" type="file">
                                <label for="f-up">Upload</label>
                            </div>                            
                            <input type="submit" value="Submit Now">
                            <a href="#">Terms and Condition I Contact us</a>
                        </div>
                    </div>

          <?php 

                return ob_get_clean();
}
?>

<?php
add_action( 'vc_before_init', 'human_volunteer_box_vc' );

function human_volunteer_box_vc() {
 vc_map([
  "name" => __( "Volunteer Log In Box", "human-appeal" ),
  "base" => "human_volunteer_login_box",
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