<?php

use Webazex\App\Core\Page\Page as Page;

function __getPagination($maxPage, $currentPage = 1)
{
    $currentPage = ($currentPage <= $maxPage AND $currentPage >= 1)? $currentPage : $maxPage;
    $html = '<div class="wbzx-pagination" data-c="'.$currentPage.'">';
    if($maxPage > 3){
        if($currentPage > 1){
            $html .= '<div class="prev-arr" data-max-page="1"><span><</span></div>';
        }
        $checkDots = true;
        for ($i = 1; $i <= $maxPage; $i++) {
            $class = ($i == $currentPage) ? 'current' : '';
            if($i > 2 AND ($i <= ($maxPage - 2))){
                if($checkDots){
                    $html .= '<div class="wbzx-pagination__dots">
                    <span class="dots__item-p"></span>
                    <div class="dots__item-p cp">
                        <span>'.$currentPage.'</span>
                    </div>
                    <span class="dots__item-p"></span>
                    </div>';
                    $checkDots = false;
                }
            }else{
                $html .= '<div class="wbzx-pagination__item ' . $class . '" data-page="' . $i . '"><span>' . $i . '</span></div>';
            }
        }
        if($currentPage < $maxPage){
            $html .= '<div class="next-arr" data-max-page="' . $maxPage . '"><span>></span></div>';
        }
        $html .= '</div>';
    }else {
        for ($i = 1; $i <= $maxPage; $i++) {
            $class = ($i == $currentPage) ? 'current' : '';
            $html .= '<div class="wbzx-pagination__item ' . $class . '" data-page="' . $i . '"><span>' . $i . '</span></div>';
        }
        if($currentPage < $maxPage){
            $html .= '<div class="next-arr" data-max-page="' . $maxPage . '"><span>></span></div>';
        }

    }

    return $html;
}

function getPagination($maxPage, $currentPage = 1)
{
    echo __getPagination($maxPage, $currentPage);
}

function getAllNews($count = 0, $page = 1)
{
    $p = (intval($count) === 0) ? get_option('posts_per_page') : $count;
    $args = [
        'posts_per_page' => $p,
        'post_type' => 'news',
        'post_status' => 'publish'
    ];
    if (is_front_page()) {
        $args['page'] = $page;
    } else {
        $args['paged'] = $page;
    }
    $obj = new WP_Query($args);
    return [
        'news' => __fetchObj($obj),
        'pagination' => __getPagination(intval($obj->max_num_pages), $page),
    ];
}

/**
 * @param array $idCats
 * @param int $postsCount
 * @return array
 *
 */
function getNews(array $idCats, int $currentPage, int $postsCount = 0): array
{
    $count = ($postsCount === 0) ? get_option('posts_per_page') : $postsCount;
    $args = [
        'posts_per_page' => $count,
        'post_type' => 'news',
        'post_status' => 'publish'
    ];
    if (is_front_page()) {
        $args['page'] = $currentPage;
    } else {
        $args['paged'] = $currentPage;
    }
    if (!empty($idCats)) {
        $terms = [];
        foreach ($idCats as $idCat) {
            $terms[] = intval($idCat);
        }
        $taxQuery = [
            'relation' => 'AND',
            [
                'taxonomy' => 'news-category',
                'field' => 'id',
                'terms' => $terms,
            ]
        ];
        //set in wp_query params
        $args['tax_query'] = $taxQuery;
    }
    $obj = new WP_Query($args);

    return [
        'news' => __fetchObj($obj),
        'pagination' => __getPagination(intval($obj->max_num_pages), $currentPage),
    ];
}

function renderNewItem($data)
{
    if (!empty($data)) {
        $img = !(empty($data['src'])) ? '<img src="' . $data['src'] . '" class="img-container__img" alt="' . $data['title'] . '">' : '';
        if (!empty($data['cats'])) {
            $cats = '';
            foreach ($data['cats'] as $cat) {
                $cats .= '<span class="cat-item__text">' . $cat['name'] . '</span>';
            }
        } else {
            $cats = '';
        }
        $html = '
        <a class="grid-news-posts__item" href="' . $data['link'] . '" id="' . $data['id'] . '">
            <div class="item__img-container">' . $img . '</div>
            <div class="item__news-cats-row">
                <div class="news-cats-row__cat-item">' . $cats . '</div>
            </div>
            <span class="item__news-title">' . $data['title'] . '</span>
            <p>' . $data['desc'] . '</p>
        </a>';
    }
    return $html;
}