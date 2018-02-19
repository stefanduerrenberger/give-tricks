<?php
/**
 * Plugin Name: Give - Tricks
 * Plugin URI:  
 * Description: A few additions to Give, see code for details
 * Author: Stefan Dürrenberger
 * Author URI: http://idm-studios.ch
 * Version: 1.0.1
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */


/**
 * Add target="_top" to the Give form so it breaks out of iFrames when submitted
 *
 */
function give_add_target_tag_donation_form( $final_output, $args ) {
    $form_tag = "<form id=\"give-form-{$args['form_id']}\"";
	$final_output = str_replace( $form_tag, "{$form_tag} target=\"_top\"", $final_output );
	return $final_output;
}
add_filter( 'give_donate_form', 'give_add_target_tag_donation_form', 10, 2 );
