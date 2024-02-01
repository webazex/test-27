<?php use Webazex\App\Core\Page\Page as Page;?>
<div class="content-news__filter-news">
    <form action="" method="post" id="filter" class="filter">
        <?php foreach ($args as $catItem):
            Page::block('filter-checkbox-item', $catItem);
        endforeach;?>
        <div class="filter__btns-row">
            <button type="reset">
                <span><?php _e('Очистити', 'dwt');?></span>
            </button>
            <button type="submit">
                <span><?php _e('Відправити', 'dwt');?></span>
            </button>
        </div>
    </form>
</div>
