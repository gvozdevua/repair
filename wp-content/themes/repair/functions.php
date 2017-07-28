<?php
function load_style_script(){
    wp_enqueue_script('jquery-google', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js');
    wp_enqueue_script('bootstrap.min.js', get_template_directory_uri() . '/js/bootstrap.min.js');
    wp_enqueue_script('cookie', get_template_directory_uri() . '/js/jquery.cookie.js');
    wp_enqueue_script('waypoints', get_template_directory_uri() . '/js/waypoints.min.js');
    wp_enqueue_script('counterup', get_template_directory_uri() . '/js/jquery.counterup.min.js');
    wp_enqueue_script('parallax', get_template_directory_uri() . '/js/jquery.parallax-1.1.3.js');
    wp_enqueue_script('front', get_template_directory_uri() . '/js/front.js');
    wp_enqueue_script('carousel', get_template_directory_uri() . '/js/owl.carousel.min.js');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
    wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css');
    wp_enqueue_style('default_css', get_template_directory_uri() . '/css/style.default.css');
    wp_enqueue_style('custom', get_template_directory_uri() . '/css/custom.css');
    wp_enqueue_style('carousel', get_template_directory_uri() . '/css/owl.carousel.css');
    wp_enqueue_style('theme',  get_template_directory_uri().'/css/owl.theme.css');
}


/**
 * загружаем скрипты и стили
 */
add_action('wp_enqueue_scripts', 'load_style_script');

//поддержка миниатюр
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size(180,180);

function print_arr($arr){
    echo  "<pre>";
    print_r($arr);
    echo  "</pre>";
}
//ыводит данные без обёртки в тег <p>
remove_filter('term_description', 'wpautop');

/*
 * опции
 */
function my_more_function(){
    // создаем поле опции
    // $id, $title, $callback, $page, $section, $args
    add_settings_field(
        'whatsup', // $id - Название опции (идентификатор)
        'Whatsup', // $title - Заголовок поля
        'display_whatsup', // $callback - callback function
        'general' // $page - Страница меню в которую будет добавлено поле
    );
    // Регистрирует новую опцию и callback функцию (функцию обратного вызова) для обработки значения опции при её сохранении в БД.
    // $option_group, $option_name, $sanitize_callback
    register_setting(
        'general', // $option_group - Название группы, к которой будет принадлежать опция. Это название должно совпадать с названием группы в функции settings_fields()
        'whatsup' // $option_name - Название опции, которая будет сохраняться в БД
    );

    // создаем поле опции
    // $id, $title, $callback, $page, $section, $args
    add_settings_field(
        'email', // $id - Название опции (идентификатор)
        'Email', // $title - Заголовок поля
        'display_email', // $callback - callback function
        'general' // $page - Страница меню в которую будет добавлено поле
    );
    // Регистрирует новую опцию и callback функцию (функцию обратного вызова) для обработки значения опции при её сохранении в БД.
    // $option_group, $option_name, $sanitize_callback
    register_setting(
        'general', // $option_group - Название группы, к которой будет принадлежать опция. Это название должно совпадать с названием группы в функции settings_fields()
        'email' // $option_name - Название опции, которая будет сохраняться в БД
    );

}
add_action('admin_init', 'my_more_function');


function display_whatsup(){
    echo "<input type='text' class='regular-text' name='whatsup' value='" . esc_attr(get_option('whatsup')) . "'>";
}
function display_email(){
    echo "<input type='text' class='regular-text' name='email' value='" . esc_attr(get_option('email')) . "'>";
}

//регистрируем меню

register_nav_menus(array(
    'header_menu' => 'Menu in header'
//    'header_top_menu' => 'Меню в верху',
//    'sidebar_menu' => 'Меню сбоку'
));


//слайдер на главной
add_action('init', 'slider_index');
function slider_index(){

    register_post_type('slider',array(
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'menu_position' => 100,
        'menu_icon' => admin_url().'images/align-none.png',
        'labels' => array(
            'name' => 'Slider',
            'all_items' => 'All sliders',
            'add_new' => 'New slider',
            'add_new_item' => 'Add slide'
        )
    ));
}
//поддержка мимиатюр
add_theme_support('post-thumbnails');

add_action('init', 'register_additional_term_fields');
function register_additional_term_fields(){
    new trueTaxonomyMetaBox( array(
        'id'       => 'txseo', // id играет роль префикса названий полей
        'taxonomy' => array('category','post_tag'), // названия таксономий, для которых нужно добавить ниже перечисленные поля
        'args'     => array(
            array(
                'id'    => 'order_by', // атрибуты name и id без префикса, получится "txseo_seo_title"
                'title' => 'Order by',
                'type'  => 'text',
                'desc'  => 'Insert sort category number.',
                'std'   => '', // по умолчанию
            )
        )
    ) );
}


//регистрируем текстовый виджет для вывода информации о себе в футере
register_sidebar(
    array(
        'name' => 'SOBRE NOSOTROS',
        'id'=>'about_me',
        'description' => 'Добавьте форму через виджет Текст',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
        'before_widget' => '',
        'after_widget' => '')
);

register_sidebar(
    array(
        'name' => 'CONTACT',
        'id'=>'contact',
        'description' => 'Добавьте форму через виджет Текст',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
        'before_widget' => '',
        'after_widget' => '')
);
register_sidebar(
    array(
        'name' => 'OFFICE',
        'id'=>'office',
        'description' => 'Добавьте форму через виджет Текст',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
        'before_widget' => '',
        'after_widget' => '')
);

function get_cat_slug($cat_id) {
    $cat_id = (int) $cat_id;
    $category = &get_category($cat_id);
    return $category->slug;
}