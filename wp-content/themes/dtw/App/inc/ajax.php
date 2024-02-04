<?php
use Webazex\App\Core\Page\Page as Page;
function callbackNews() {
    if(isset($_POST['cats']) and is_array($_POST['cats'])){
        $data = getNews($_POST['cats'], 1);
        if(!empty($data['news'])){
            $html = '';
            foreach ($data['news'] as $newItem){
                $html .= renderNewItem($newItem);
            }
            echo $html;
        }
    }elseif($_POST['cats'] === 'none'){
        $data = getNews([], 1);
        if(!empty($data['news'])){
            $html = '';
            foreach ($data['news'] as $newItem){
                $html .= renderNewItem($newItem);
            }
            echo $html;
        }
    }else{
        Page::component('news-none-content');
    }
    wp_die();
}

if(wp_doing_ajax()){
    add_action( 'wp_ajax_gnews', 'callbackNews' );
    add_action( 'wp_ajax_nopriv_gnews', 'callbackNews' );
}
