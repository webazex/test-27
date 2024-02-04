<?php
get_header();

use Webazex\App\Core\Page\Page as Page;

$thisPostType = get_queried_object()->name;
?>
<main>
    <?php
    if ($thisPostType == 'news'):
        $newsCats = getNewsCats();
        Page::section('news', [
            'title' => __('Новини', 'dwt'),
            'cats' => $newsCats,
            'news' => getAllNews(),
            'pagination' => getAllNews()['pagination'],
        ]);
    else:
        Page::section('demo');
    endif;
    ?>

</main>
<?php get_footer(); ?>
