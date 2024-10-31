<?php

//THEME SUPPORTS
add_action( 'after_setup_theme', function(){
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
});

require_once get_template_directory() . '/inc/theme-image.php';



//THEME MENUS
add_action( 'after_setup_theme', 'theme_register_nav_menu' );

function theme_register_nav_menu() {
	register_nav_menu( 'main', 'Top Menu' );
}


//THEME STYLES & SCRIPTS
add_action( 'wp_enqueue_scripts', 'theme_styles_and_scripts' );	

function theme_styles_and_scripts() {
	$ver = '0.01';
	$css_url = get_template_directory_uri() . '/assets/css/';
	$js_url = get_template_directory_uri() . '/assets/js/';
	
	//Enqueue main theme style
	wp_enqueue_style( 'css-main', get_stylesheet_uri(), array(), $ver);
	
	//Enqueue additional .css files
	wp_enqueue_style( 'css-variables', $css_url . 'variables.css', array(), $ver);
	wp_enqueue_style( 'css-normalize', $css_url . 'normalize.css', array(), $ver);
    wp_enqueue_style( 'css-header', $css_url . 'header.css', array(), $ver);
    wp_enqueue_style( 'css-footer', $css_url . 'footer.css', array(), $ver);
    wp_enqueue_style( 'css-index', $css_url . 'index.css', array(), $ver);

    //Enqueue .js files
    wp_enqueue_script( 'main-js', $js_url . 'main.js', array('jquery'), $ver);
}

//add_action( 'carbon_fields_register_fields', 'crb_attach_post_options' );
//function crb_attach_post_options() {
//    require_once __DIR__ . '/inc/carbon-fields.php';
//}

require_once __DIR__ . '/inc/carbon-fields.php';

add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
    $mimes['svg']  = 'image/svg+xml';

    return $mimes;
}

add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

    // WP 5.1 +
    if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) )
        $dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
    else
        $dosvg = ( '.svg' === strtolower( substr($filename, -4) ) );

    // mime тип был обнулен, поправим его
    // а также проверим право пользователя
    if( $dosvg ){

        // разрешим
        if( current_user_can('manage_options') ){

            $data['ext']  = 'svg';
            $data['type'] = 'image/svg+xml';
        }
        // запретим
        else {
            $data['ext'] = $type_and_ext['type'] = false;
        }

    }

    return $data;
}