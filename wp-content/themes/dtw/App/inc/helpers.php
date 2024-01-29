<?php

function __fetchCustomTerms(int $id, string $tax) {
    $ret = [];
    $terms = get_the_terms($id, $tax);
    if(!is_wp_error($terms) AND !empty($terms)){
        foreach ($terms as $termObj){
            $ret[$termObj->term_id] = [
                'id' => $termObj->term_id,
                'name' => $termObj->name,
                'count' => $termObj->count,
            ];
        }
    }
    return $ret;
}
function __fetchObj($obj){
    $ret = [];
    if(!empty($obj->posts)){
        foreach ($obj->posts as $postObj) {
            $terms = __fetchCustomTerms($postObj->ID, 'news-category');
            $ret[$postObj->ID] = [
                'id' => $postObj->ID,
                'title' => $postObj->post_title,
                'content' => $postObj->post_content,
                'desc' => (!empty($postObj->post_excerpt))? $postObj->post_excerpt : get_the_excerpt($postObj->ID),
                'src' => get_the_post_thumbnail_url($postObj->ID, 'full'),
                'link' => get_permalink($postObj->ID),
                'cats' => $terms
            ];
        }
    }
    return $ret;
}