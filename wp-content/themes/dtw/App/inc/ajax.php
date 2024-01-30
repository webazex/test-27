<?php
function callbackNews() {
    var_dump($_POST);
}
if(wp_doing_ajax()){
    add_action( 'wp_ajax_gnews', 'callbackNews' );
    add_action( 'wp_ajax_nopriv_gnews', 'callbackNews' );
}
