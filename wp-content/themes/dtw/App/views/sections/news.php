<?php use Webazex\App\Core\Page\Page as Page; ?>
<section>
    <div class="site-size">
        <div class="site-size__container default-container-padding news-section">
            <?php if (!empty($args['title'])): ?>
                <h2>
                    <span>
                        <?php echo $args['title']; ?>
                    </span>
                </h2>
            <?php endif; ?>
            <?php if (!empty($args['news'])): ?>
                <div class="news-section__content-news">
                    <?php
                    if (!empty($args['cats'])):
                        Page::component('news-filter', $args['cats']);
                    endif;
                    Page::component('grid-news-posts', $args['news']);
                    ?>
                </div>
            <?php else:
                Page::component('news-none-content');
            endif; ?>
        </div>
    </div>
</section>