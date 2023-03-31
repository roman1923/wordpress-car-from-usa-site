<?php
add_action('wp_enqueue_scripts', 'theme_name_scripts');

function theme_name_scripts() {
    wp_enqueue_style( 'reset', get_template_directory_uri() . '/assets/css/reset.css' );
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css' );
    wp_enqueue_style( 'fonts-gstatic', 'https://fonts.gstatic.com' );
    wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&display=swap' );
    wp_enqueue_style( 'animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );

    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), 'null', true );
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), 'null', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), 'null', true );
}

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');


add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

    global $wp_version;
    if ( $wp_version !== '4.7.1' ) {
       return $data;
    }
  
    $filetype = wp_check_filetype( $filename, $mimes );
  
    return [
        'ext'             => $filetype['ext'],
        'type'            => $filetype['type'],
        'proper_filename' => $data['proper_filename']
    ];
  
  }, 10, 4 );
  
function cc_mime_types( $mimes ){
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );
  
function fix_svg() {
    echo '<style type="text/css">
          .attachment-266x266, .thumbnail img {
               width: 100% !important;
               height: auto !important;
          }
          </style>';
}
add_action( 'admin_head', 'fix_svg' );

?>

