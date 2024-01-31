<?php
/*
Template Name: Новини
*/
use Webazex\App\Core\Page\Page as Page;
$newsCats = getNewsCats();
get_header();
?>
    <main>
        <section>
            <div class="site-size">
                <div class="site-size__page-container default-container-padding">
                    <h1>
                        <span> <?php _e('Новини', 'dwt');?></span>
                    </h1>
                </div>
                <?php Page::section('news', [
                    'title' => __('Новини', 'dwt'),
                    'cats' => $newsCats,
                    'posts' => getAllNews()
                ]);?>
            </div>
        </section>

    </main>
<?php get_footer();?>