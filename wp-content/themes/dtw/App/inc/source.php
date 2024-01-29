<?php
add_action( 'wp_enqueue_scripts', 'loadDwtSources' );

function loadDwtSources() {
    // подключаем файл стилей темы
    wp_enqueue_style( 'dwt', get_stylesheet_uri() );
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.7.1.min.js');
    wp_enqueue_script( 'main', get_template_directory_uri() .'/main.js', ['jquery'], '1.0', true );
}