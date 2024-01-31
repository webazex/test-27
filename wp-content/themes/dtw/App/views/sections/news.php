<?php ?>
<section>
    <div class="site-size">
        <div class="site-size__container default-container-padding news-section">
            <?php if(!empty($args['title'])):?>
            <h2>
                <span>
                    <?php echo $args['title']; ?>
                </span>
            </h2>
            <?php endif;?>
            <?php if(!empty($args['posts'])):?>
            <div class="news-section__content-news">
                <?php if(!empty($args['cats'])):?>
                <div class="content-news__filter-news">
                    <form action="" method="post" id="filter" class="filter">
                        <?php foreach ($args['cats'] as $catItem): var_dump($catItem);?>
                        <label>
                            <span></span>
                            <input type="checkbox" name="cats[]" id="">
                        </label>
                        <?php endforeach;?>
                    </form>
                </div>
                <?php endif;?>
                <div class="content-news__grid-news-posts">
                    <a class="grid-news-posts__item" href="">
                        <div class="item__img-container">
                            <img src="" class="img-container__img" alt="">
                            <span class="item__news-title"></span>
                        </div>
                    </a>
                </div>
            </div>
            <?php endif;?>
        </div>
    </div>
</section>