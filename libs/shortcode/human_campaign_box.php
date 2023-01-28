<?php
/* human appeal first shorcode create heere now*/

/* */
add_shortcode( 'human_campaign_box', 'human_campaign_box' );

function human_campaign_box( $atts ) {
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

 return " <div class='campaign-box-left'>
              <p>We're Near to Our</p>
              <h2>CAMPAIGN</h2>
              <h5>Raising money</h5>
              <hr>
              <div class='campaign_btn1'>
                  <select>
                      <option value=''>Choose Campaign</option>
                      <option value='01'>01</option>
                      <option value='01'>01</option>
                      <option value='01'>01</option>
                  </select>
                  
              </div>
              <div class='campaign_btn2'>
                  <select>
                      <option value=''>Choose Community</option>
                      <option value='01'>01</option>
                      <option value='01'>01</option>
                      <option value='01'>01</option>
                      <option value='01'>01</option>
                  </select>
                  <div class='cons_btn'>
                      <button>30$</button>
                      <button>50$</button>
                      <button>70$</button>
                      <button>100$</button>
                      <button>Cost</button>
                  </div>
                  <div class='campaign_donet_btn'>
                      <button>DONATE</button>
                      <button><i class='fa-solid fa-cart-plus'></i></button>
                  </div>
              </div>
          </div>
 		";
}
?>

<?php
add_action( 'vc_before_init', 'human_campaign_box_vc' );

function human_campaign_box_vc() {
 vc_map([
  "name" => __( "Campaign Box", "human-appeal" ),
  "base" => "human_campaign_box",
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