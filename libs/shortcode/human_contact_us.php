<?php
/* human appeal first shorcode create heere now*/

/* */
add_shortcode( 'human_contact_us', 'human_contact_us' );

function human_contact_us( $atts ) {
         extract( 
           shortcode_atts([
              'contact_title'          => '',
              'contact_dsc'            => '',

         ],$atts ) );
  

 ?>
     <div class='contact-log'>
            <h1><?php echo $contact_title; ?></h1>
            <p><?php echo $contact_dsc; ?></p>
            <div class='log-btn'>
                <input type='text' placeholder='First name*''>
                <input type='text' placeholder='Your email address*'>
                <input type='text' placeholder='Type your subject'>
                <input type='text' placeholder='Your phone number'>
            </div>
            <textarea placeholder='Message'></textarea>
            <input type='submit' value='Sent'>
        </div>

 		<?php
}

?>

<?php
add_action( 'vc_before_init', 'human_contact_vc' );

function human_contact_vc() {
 vc_map([
  "name" => __( "Contact Us", "human-appeal" ),
  "base" => "human_contact_us",
  "icon"    => get_template_directory_uri(). '/access/images/logo/logo.png',
  "category" => __( "contact Login box", "human-appeal"),
  "params" =>[
            [
              "param_name" => "contact_title",
              "type" => "textfield",
              "heading" => __( "Contact Title", "human-appeal" ),
              "description" => __( "Title", "human-appeal" )
            ],
            [
              "param_name" => "contact_dsc",
              "type" => "textarea",
              "heading" => __( "Contact Description", "human-appeal" ),
              "description" => __( "Description", "human-appeal" )
            ],
           
        ]
    ]);
}
?>