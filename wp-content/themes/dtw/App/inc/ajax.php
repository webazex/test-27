<?php
function callbackNews() {
    print_r($_POST);
    wp_die();
}

if(wp_doing_ajax()){
    add_action( 'wp_ajax_gnews', 'callbackNews' );
    add_action( 'wp_ajax_nopriv_gnews', 'callbackNews' );
}
