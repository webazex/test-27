<?php
function getAllNews() {
    
    $obj = new WP_Query([
        'posts_per_page' => -1,
        'post_type' => 'news',
    ]);
    return __fetchObj($obj);
}

/**
 * @param array $idCats
 * @param int $postsCount
 * @return array
 *
 */
function getNews(array $idCats, int $postsCount = 0):array
{
    $count = ($postsCount === 0)? get_option('posts_per_page') : $postsCount;
    $args = [
        'posts_per_page' => $count,
        'post_type' => 'news',
    ];
    if(!empty($idCats)){
        $terms = [];
        foreach ($idCats as $idCat){
            $terms[] = intval($idCat);
        }
        $taxQuery = [
            'relation' => 'AND',
            [
                'taxonomy' => 'news-category',
                'field'    => 'id',
                'terms'    => $terms,
            ]
        ];
        //set in wp_query params
        $args['tax_query'] = $taxQuery;
    }
    $obj = new WP_Query($args);
    return __fetchObj($obj);
}