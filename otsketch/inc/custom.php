<?php
// ------------------------------------------
// Theme specific functions
// ------------------------------------------

// Image Sizes
set_post_thumbnail_size( 150, 150, true );
add_image_size( 'photo', 85, 85, true );
add_image_size( 'post', 420, 230, true );
add_image_size( 'post-big', 810, 454, true );
add_image_size( 'team', 224, 224, true );
add_image_size( 'gallery', 1714, 949, true );

// Content Width
if ( ! isset( $content_width) ) $content_width = 500;

// Menus
register_nav_menus( array(
	'primary' => 'Main Menu',
	'sub' => 'Sub Menu',
	'services' => 'Servicces',
	'more' => 'Read more',
	'more2' => 'Read more2',
) );

// Widgets
add_action( 'widgets_init', 'mr_widgets_init' );
function mr_widgets_init() {
  register_sidebar(array(
	'id' => 'sidebar',
	'name' => 'Sidebar',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  ) );
}

// Core Enqueues
function mr_core_scripts_styles() {
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script( 'jquery-core' );
    $realpath = get_template_directory().'/assets/js/jquery.main.js';
	wp_enqueue_script( 'jquery.main.js', get_template_directory_uri().'/assets/js/jquery.main.js', array( 'jquery-core' ), filemtime($realpath) );
	wp_enqueue_script( 'foundation-js', get_template_directory_uri() . '/js/foundation.js', array( 'jquery' ), '', true );

	wp_enqueue_style( 'foundation-css', get_template_directory_uri().'/assets/css/foundation.css', array(  ) );
	$realpath = get_template_directory().'/style.css';
 	wp_enqueue_style( 'mr-style', get_template_directory_uri().'/style.css', array(), filemtime($realpath), 'all' );

}
add_action( 'wp_enqueue_scripts','mr_core_scripts_styles' );

// Custom WP Head
function mr_head() {
?>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="application-name" content="<?php bloginfo( 'name' ); ?>" />
	<meta name="msapplication-TileColor" content="#ffffff" />
	<script src="https://player.vimeo.com/api/player.js"></script>
<?php
}
add_action( 'wp_head', 'mr_head' );

// Advanced Custom Fields Options Panels
if ( function_exists( 'acf_add_options_page' ) ) {
	  acf_add_options_page();
	// acf_add_options_sub_page( 'General Options' );
}

// Advanced Custom Fields Google Map Key
add_filter('acf/settings/google_api_key', function () {
  return '';
});

function new_excerpt_more( $more ) {
	return ' ';
}
add_filter('excerpt_more', 'new_excerpt_more');

function sButton($atts, $content = null) {
   extract(shortcode_atts(array('link' => '#'), $atts));
   return '<a class="button" href="'.$link.'">' . $content . '</a>';
}
add_shortcode('button', 'sButton');

function mytheme_custom_excerpt_length( $length ) {
    return 40;
}
add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999 );


/*Custom Post type*/

add_action( 'init', 'create_post_type' );
function create_post_type() {
  
  

  

  register_post_type( 'resources',
    array(
      'labels' => array(
        'name'               => __( 'Resources' ),
        'singular_name'      => __( 'Resource' ),
        'add_new'            => __( 'Add New' ),
        'add_new_item'       => __( 'Add New Resource' ),
        'edit_item'          => __( 'Edit Resource' ),
        'new_item'           => __( 'New Resource' ),
        'view_item'          => __( 'View Resource' ),
        'search_items'       => __( 'Search Resources' ),
        'not_found'          => __( 'No resources found' ),
        'not_found_in_trash' => __( 'No resources found in Trash' ),
      ),
      'supports'     => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
      'public'       => true,
      'has_archive'  => true,
      'show_in_menu' => true,
      'menu_icon'    => 'dashicons-book-alt',
      'rewrite'      => array( 'slug' => 'resources', 'with_front' => false ),
    )
  );

   register_post_type( 'tutorials',
    array(
      'labels' => array(
        'name' => __( 'Tutorials' ),
        'singular_name' => __( 'Tutorials' )
		
      ),
	  'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'comments' ),
      'public' => true,
      'has_archive' => true,
	  'rewrite' => array('slug' => 'learn/tutorials')
    )
  );
}




/*register_post_type( 'calculators',
array(
  'labels' => array(
    'name' => __( 'Calculators' ),
    'singular_name' => __( 'Calculators' )
    
  ),
  'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'comments' ),
  'public' => true,
  'has_archive' => true,
  'rewrite' => array('slug' => 'learn/calculators')
)
);*/




function my_theme_archive_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_author() ) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif ( is_post_type_archive() ) {
        $title = post_type_archive_title( '', false );
    } elseif ( is_tax() ) {
        $title = single_term_title( '', false );
    }
    return $title;
}
  
add_filter( 'get_the_archive_title', 'my_theme_archive_title' );

add_action('init', function () {
    if (isset($_REQUEST['toggle_analytics']) && ($_REQUEST['toggle_analytics'] === 'on' || $_REQUEST['toggle_analytics'] === '1')) {
        setcookie('track_request', '1', time() + (86400 * 30), "/");
    } elseif (isset($_REQUEST['toggle_analytics']) && ($_REQUEST['toggle_analytics'] === 'off' || $_REQUEST['toggle_analytics'] === '0')) {
        setcookie('track_request', '0', time() - 86400, "/");
    }
});


function popuplink( $atts, $content = null ) {
	return  '<a href="#" class="popupbtn">' . $content . '</a>';
}
add_shortcode( 'popuplink', 'popuplink' );


register_taxonomy('lessons', array('tutorials'), array(
 'hierarchical' => true,
 'labels' => array(
  'name' => _x('Categories', 'taxonomy general name'),
  'add_new_item' => __('Add New Category')
 ),
 'show_ui' => true,
 'query_var' => true,
 'rewrite' => array( 'slug' => 'lessons' )
));
register_taxonomy_for_object_type('lessons', 'tutorials');


 add_filter(
    'register_post_type_args',
    function ($args, $post_type) {
        if ($post_type !== 'post') {
            return $args;
        }

        $args['rewrite'] = [
            'slug' => 'blog',
            'with_front' => true,
        ];

        return $args;
    },
    10,
    2
);

add_filter(
    'pre_post_link',
    function ($permalink, $post) {
        if ($post->post_type !== 'post') {
            return $permalink;
        }

        return '/blog/%postname%/';
    },
    10,
    2
);



add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);
function my_wp_nav_menu_objects( $items, $args ) {
    // loop
    foreach( $items as &$item ) {
        // vars
        $icon = get_field('icon_sm', $item);
        $desc = get_field('description_sm', $item);
        // append icon
        if( $icon ) {
            $item->title .= wp_get_attachment_image($icon, 'thumbnail', 0, array('title'=> ''));
			
        }
		if($desc) {
			$item->title .= '<span class="desc">'.$desc.'</span>';
		}
        
    }
    
    
    // return
    return $items;
    
}



function custom_rewrite_for_specific_post() {
    add_rewrite_rule(
        '^us/learn/home-modifications/occupational-therapists-guide-to-rails/?$', // New URL structure
        'index.php?post_type=home-modifications&name=an-occupational-therapists-guide-to-rails', // Map to the correct post
        'top'
    );
}
add_action('init', 'custom_rewrite_for_specific_post');


function custom_permalink_for_specific_post($permalink, $post, $leavename) {
    if ($post->post_type == 'home-modifications' && $post->post_name == 'an-occupational-therapists-guide-to-rails') {
        return home_url('/us/learn/home-modifications/occupational-therapists-guide-to-rails/');
    }
    return $permalink;
}
add_filter('post_type_link', 'custom_permalink_for_specific_post', 10, 3);