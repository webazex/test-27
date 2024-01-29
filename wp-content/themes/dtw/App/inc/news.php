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
    $ret = [];
    $count = ($postsCount === 0)? get_options('posts_per_page') : $postsCount;
    return $ret;
}