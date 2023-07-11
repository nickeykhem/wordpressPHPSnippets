<?php
/**
 *
 * WARNING: this only checks if the email is being sent to the same email as admin_email option.
 * If for some reason another email is sent to that same email address, but it's not meant as an "admin email"
 * this filter will still add those additional emails, just something to keep in mind.
*/
add_filter( 'wp_mail', 'my_custom_to_admin_emails' );


/**
* Filter WP_Mail Function to Add Multiple Admin Emails
*
*
*
* @param array $args A compacted array of wp_mail() arguments, including the "to" email,
*                    subject, message, headers, and attachments values.
*
* @return array
*/
function my_custom_to_admin_emails( $args ) {

    // This assumes that admin emails are sent with only the admin email
    // used in the to argument.
    if( is_array( $args['to'] ) ) return $args;

    $admin_email = get_option( 'admin_email' );

    // Check if admin email is in string, as plugins/themes could have changed format (ie. Administrator <admin@domain.com> )
    if( strpos( $args['to'], $admin_email ) !== FALSE ){

        // Create array in case there are multiple emails defined in CSV format
        $emails = explode( ',', $args['to'] );
        
        /**
        * Add any additional emails to the array
        *
        * All email addresses supplied to wp_mail() as the $to parameter must comply with RFC 2822. Some valid examples:
        * user@example.com
        * User <user@example.com>
        */
        $emails[] = 'user@example.com';
        $emails[] = 'User <user@example.com>';

        $args['to'] = $emails;
    }

    return $args;
}
