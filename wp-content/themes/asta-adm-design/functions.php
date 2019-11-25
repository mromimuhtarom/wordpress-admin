<?php 


function load_stylesheets()
{
    wp_register_style('owl-carousel', get_template_directory_uri() . '/owl-carousel/assets/owl.carousel.css', array(), false, 'all');
    wp_enqueue_style('owl-carousel');

    wp_register_style('owl-theme', get_template_directory_uri() . '/owl-carousel/assets/owl.theme.default.css', array(), false, 'all');
    wp_enqueue_style('owl-theme');

    wp_register_style('swipper-min', get_template_directory_uri() . '/swiper/css/swiper.min.css', array(), false, 'all');
    wp_enqueue_style('swipper-min');

    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_js()
{
    wp_register_script('owl-carousel', get_template_directory_uri() . '/owl-carousel/owl.carousel.js', '', 3, true);
    wp_enqueue_script('owl-carousel');

    wp_register_script('carousel', get_template_directory_uri() . '/assets/js/carousel.js', '', 3, true);
    wp_enqueue_script('carousel');
}
add_action('wp_enqueue_scripts', 'load_js');

add_theme_support('menus');

register_nav_menus(
    array(
        'top-sidebar-menu'    => __('Top Sidebar Menu', 'theme'),
        'middle-sidebar-menu' => __('Middle Sidebar Menu', 'theme'),
        'footer-sidebar-menu' => __('Footer Sidebar Menu', 'theme'),
        'home'                => __('Home', 'theme'),
        'top-nav-home'        => __('Top Nav Home', 'theme'),
        'member-login-menu'   => __('Member Login Menu', 'theme')
    )
);


add_filter('nav_menu_css_class', 'special_nav_class' , 10, 2);


function special_nav_class($classes, $item) {
    if(in_array('current-menu-item', $classes)) {
        $classes[] = 'active';
    }
    return $classes;
}

// featured image
add_theme_support( 'post-thumbnails' );


function custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// second database 
function seconddb() {
    global $seconddb;
    $seconddb = new wpdb('root', 'aa123123', 'asta_db', '192.168.1.7:3308');
}
add_action('init', 'seconddb');



function myEndSession() {
    if($_SESSION['login5'] === true)
    {
        session_destroy ();
        $redirect = "<script>window.location='/wordpress/home'</script>";
        return $redirect;
    }
}

function hexToStr($hex){
    $string='';
    for ($i=0; $i < strlen($hex)-1; $i+=2){
        $string .= chr(hexdec($hex[$i].$hex[$i+1]));
    }
    return $string;
}


function emaildecrypt($email)
{
    $key = "------------ASTA-KEY------------";
    $iv = "-----ASTAIV-----";
    $method = "aes-256-cbc";
    $enStr = $email;
    $emailDecrypt = openssl_decrypt(hexToStr($enStr), $method, $key, $options = OPENSSL_RAW_DATA, $iv);
    return $emailDecrypt;
}


function updatemember($password, $user_id, $gender)
{
    global $seconddb;
    // $table_name = $seconddb->prefix . "user";
    $password_hashing = password_hash($password, PASSWORD_BCRYPT);

    $data_gender = array('gender'=>$gender);
    if(!empty($password) && !empty($gender))
    {
        $table_info  = 'user_info';
        $data_gender = array('gender'=>$gender);
        $where       = array('user_id'=>$user_id);
        $seconddb->update($table_info, $data_gender, $where);

        $table    = 'user';
        $data_pwd = array('userpass'=>$password_hashing);
        $seconddb->update( $table, $data_pwd, $where);
    } else if(!empty($gender))
    {
        $table_info  = 'user_info';
        $data_gender = array('gender'=>$gender);
        $where       = array('user_id'=>$user_id);
        $seconddb->update($table_info, $data_gender, $where);
    } else if(!empty($password))
    {
        $table    = 'user';
        $data_pwd = array('userpass'=>$password_hashing);
        $where    = array('user_id'=>$user_id);
        $seconddb->update( $table, $data_pwd, $where);
    }
    
}

function updategender($user_id, $gender)
{
    global $seconddb;
    $table_info  = 'user_info';
    $data_gender = array('gender'=>$gender);
    $where       = array('user_id'=>$user_id);
    $seconddb->update($table_info, $data_gender, $where);
}













