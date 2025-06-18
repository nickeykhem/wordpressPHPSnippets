<?
function bypass_license_verification() {
    add_filter('wpuf_license_check', '__return_true');
    add_action('admin_notices', function() {
        echo '<div class="notice notice-success"><p>License successfully nulled for demonstration purposes!</p></div>';
    });
}
add_action('init', 'bypass_license_verification');
