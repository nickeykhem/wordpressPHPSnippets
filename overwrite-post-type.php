// RENAME PROJECT CUSTOM POST TYPE SET BY A THEME

function rename_project_cpt() {

register_post_type( 'project',
	array(
	'labels' => array(
	'name'          => __( 'Items', 'themename' ), // change the text Projects to anything you like Plural - optional to add themename
	'singular_name' => __( 'Item', 'themename' ), // change the text Project to anything you like Singular - optional to add themename
	),
	'has_archive'  => true,
	'hierarchical' => true,
    'menu_icon'    => 'dashicons-images-alt2',  // you choose your own dashicon
	'public'       => true,
	
	'rewrite'      => array( 'slug' => 'artist', 'with_front' => false ), // change the text portfolio to anything you like
  'supports'     => array(),
         
));
    }

add_action( 'init', 'rename_project_cpt' );
