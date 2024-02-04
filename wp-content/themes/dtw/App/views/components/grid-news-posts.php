<?php use Webazex\App\Core\Page\Page as Page; ?>
<div class="content-news__grid-news-posts" id="sgnews">
    <?php
        foreach ($args['news'] as $item):
            Page::block('news-item', $item);
        endforeach;
    ?>
</div>
<!--closed flex-->
</div>
<div class="site-size">
    <div class="site-size__pagination-container default-container-padding">
        <div class="pagination-container__pagination-block">
            <?php echo $args['pagination'];?>
        </div>
    </div>
</div>
