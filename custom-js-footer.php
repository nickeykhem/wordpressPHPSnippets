// WordPress custom function
function my_custom_footer_js(){
    ?>
    <script>
        // Your function here
        jQuery(window).load(function(){
            console.log('Hello World!');
        });
    </script>
    <?php
}
add_action('wp_footer', 'my_custom_footer_js');
