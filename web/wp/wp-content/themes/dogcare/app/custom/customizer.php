<?php
add_action( 'customize_register', 'cd_customizer_settings' );
function cd_customizer_settings( $wp_customize ) {

    //Sanitization
    //    file input sanitization function
    function theme_slug_sanitize_file( $file, $setting ) {

        //allowed file types
        $mimes = array(
            'jpg|jpeg|jpe' => 'image/jpeg',
            'gif'          => 'image/gif',
            'png'          => 'image/png'
        );

        //check file type from file name
        $file_ext = wp_check_filetype( $file, $mimes );

        //if file has a valid mime type return it, otherwise return default
        return ( $file_ext['ext'] ? $file : $setting->default );
    }

    //SECTIONS
    $wp_customize->add_section( 
        'website_info', 
        array(
            'title' => 'Dog Care - Information',
            'priority' => 150
        )
    );

    //Website Info settings
    $wp_customize->add_setting( 
        'wi_logo', 
        array(
            'type' => 'option',
            'sanitize_callback' => 'theme_slug_sanitize_file' //removes all HTML from content
        )
    ); 


    $wp_customize->add_setting( 'wi_phone', array('type' => 'option'));
    $wp_customize->add_setting( 'wi_time', array('type' => 'option'));
    $wp_customize->add_setting( 'wi_address', array('type' => 'option'));
    $wp_customize->add_setting( 'wi_facebook', array('type' => 'option'));
    $wp_customize->add_setting( 'wi_instagram', array('type' => 'option'));

    //control   
    $wp_customize->add_control( 
        new WP_Customize_Upload_Control( 
            $wp_customize, 
            'wi_logo', 
            array(
                'label'      => 'Logo',
                'section'    => 'website_info'                   
            )
        ) 
    );

    $wp_customize->add_control( 'wi_phone', 
                               array(
                                   'label'      => 'Phone Number',
                                   'section'    => 'website_info', 
                                   'type'       => 'text',
                               )); 

    $wp_customize->add_control( 'wi_time', 
                               array(
                                   'label'      => 'Hours or services',
                                   'section'    => 'website_info', 
                                   'type'       => 'text',
                               )); 

    $wp_customize->add_control( 'wi_address', 
                               array(
                                   'label'      => 'Address',
                                   'section'    => 'website_info', 
                                   'type'       => 'textarea',
                               )); 

    $wp_customize->add_control( 'wi_facebook', 
                               array(
                                   'label'      => 'Facebook (link)',
                                   'section'    => 'website_info', 
                                   'type'       => 'text',
                               )); 

    $wp_customize->add_control( 'wi_instagram', 
                               array(
                                   'label'      => 'Instagram (link)',
                                   'section'    => 'website_info', 
                                   'type'       => 'text',
                               )); 


}

function remove_customizer_settings( $wp_customize ){
    $wp_customize->remove_section( 'static_front_page' );
    $wp_customize->remove_section( 'custom_css' );
    $wp_customize->remove_panel('nav_menus');
    $wp_customize->remove_panel( 'widgets' );

    //    $wp_customize->get_panel( 'nav_menus' )->active_callback = '__return_false';

}
add_action( 'customize_register', 'remove_customizer_settings', 20 );


//
function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'DogCare Website';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

function modify_logo() {
    $logo_style = '<style type="text/css">';
    $logo_style .= 'h1 a {background-image: url(' . get_option('wi_logo') . ') !important;}';
    $logo_style .= 'body.login label{color: #FFF;}';
    $logo_style .= 'body.login form{background: #ec411b; border-radius: 10px;}';
    $logo_style .= 'body {background: #ffe9e4;}';
    $logo_style .= '</style>';
    echo $logo_style;
}
add_action('login_head', 'modify_logo');