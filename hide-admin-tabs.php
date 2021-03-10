/**
* Hide Admin Menu Items from the admin menu for everyone but admin-user
*/
function remove_admin_menus()
{
    // provide a list of usernames who can edit custom field definitions here
    $admins = array( 
        'users', 
    );
    // get the current user
    $current_user = wp_get_current_user();
    // match and remove if needed
    if( !in_array( $current_user->user_login, $admins ) )
    {
        remove_menu_page('edit.php?post_type=acf');     //Advanced Custom Fields	
        remove_menu_page( 'edit.php' );                 //Posts
    }
}
add_action( 'admin_menu', 'remove_admin_menus', 999 );

//* Additional Function To Remove Genesis Menu link
//remove_theme_support( 'genesis-admin-menu' ); 
