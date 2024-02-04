<?php
use Webazex\App\Core\Page\Page as Page;
function callbackNews() {
    $htmlNews = '';
    $cp = (!empty($_POST['cp'])) ? $_POST['cp'] : 1;
    if(isset($_POST['cats']) and is_array($_POST['cats'])){
        $data = getNews($_POST['cats'], $cp);
        if(!empty($data['news'])){
            foreach ($data['news'] as $newItem){
                $htmlNews .= renderNewItem($newItem);
            }

        }
    }elseif($_POST['cats'] === 'none'){
        $data = getNews([], $cp);
        if(!empty($data['news'])){
            $htmlNews = '';
            foreach ($data['news'] as $newItem){
                $htmlNews .= renderNewItem($newItem);
            }
        }

    }
    wp_send_json_success([
        'news' => $htmlNews,
        'p' => $data['pagination'],
    ]);
    if (!(isset($_POST['cats']))){
        Page::component('news-none-content');
    }
    wp_die();
}

if(wp_doing_ajax()){
    add_action( 'wp_ajax_gnews', 'callbackNews' );
    add_action( 'wp_ajax_nopriv_gnews', 'callbackNews' );
}
