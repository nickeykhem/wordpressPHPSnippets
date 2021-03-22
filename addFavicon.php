<?php

function myfavicon() {
    echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_bloginfo('wpurl').'/favicon.ico" />';
    //currently the href gets the url of the website, so this assumes the favicon is kept in root
    //can easily swap the whole href to '/wp-content/uploads/2021/03/favicon.png' or any direct location
}
add_action('wp_head', 'myfavicon');
