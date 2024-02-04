<?php
function callbackNews() {
    if(isset($_POST['cats']) AND !empty($_POST['cats'])){
        $data = getNews($_POST['cats'], 1);
        if(!empty($data['news'])){
            foreach ($data['news'] as $newItem){
                var_dump($newItem);
            }
        }
    }
    wp_die();
}

if(wp_doing_ajax()){
    add_action( 'wp_ajax_gnews', 'callbackNews' );
    add_action( 'wp_ajax_nopriv_gnews', 'callbackNews' );
}
