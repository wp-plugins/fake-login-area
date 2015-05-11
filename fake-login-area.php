<?php
/**
 * Plugin Name: Fake Login Area
 * Plugin URI: http://www.binarytemplar.com/plugins/fake-login-area
 * Description: Display a login form to a nonexistent private area
 * Version: 1.0
 * Author: Dave McHale
 * Author URI: http://www.binarytemplar.com
 * License: GPL2+
 */

function flaform_load_resources() {

    wp_enqueue_style( 'flaform-sweetalert-css', plugins_url( 'css/sweetalert.css', __FILE__ ) );
    wp_enqueue_script( 'flaform-sweetalert-js', plugins_url( 'js/sweetalert.min.js', __FILE__ ), array( 'jquery' ) );

    wp_enqueue_style( 'flaform-css', plugins_url( 'css/style.css', __FILE__ ) );
    wp_enqueue_script( 'flaform-js', plugins_url( 'js/flaform.js', __FILE__ ), array( 'jquery' ) );
	wp_localize_script( 'flaform-js', 'arrFlaformVars', array(
		'screen1_title_text'            => __( 'Login Area', 'flaform' ),
		'screen1_field1_placeholder'    => __( 'Email Address', 'flaform' ),
		'screen1_field1_type'           => 'email',
		'screen1_field1_required'       => 'REQUIRED',             // 'REQUIRED' || ''
		'screen1_field2_placeholder'    => __( 'Password', 'flaform' ),
		'screen1_field2_type'           => 'password',
		'screen1_field2_required'       => 'REQUIRED',             // 'REQUIRED' || ''
		'screen1_button1_text'          => __( 'Cancel', 'flaform' ),
		'screen1_button1_color'         => '#c8c8c8',
		'screen1_button2_text'          => __( 'Log In', 'flaform' ),
		'screen1_button2_color'         => '#dd6b55',
		'screen2_title_text'            => __( 'Oops!', 'flaform' ),
		'screen2_message_text'          => __( 'We were unable to log you in. Please contact the site administrator if you continue to have trouble.', 'flaform' ),
		'screen2_button1_text'          => __( 'OK', 'flaform' ),
	));
}
add_action( 'wp_enqueue_scripts', 'flaform_load_resources' );