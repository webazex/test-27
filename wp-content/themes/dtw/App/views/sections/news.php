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
            <?php if(!empty($args['news'])):?>
            <div class="news-section__content-news">
                <?php if(!empty($args['cats'])):?>
                <div class="content-news__filter-news">
                    <form action="" method="post" id="filter" class="filter">
                        <?php foreach ($args['cats'] as $catItem): ?>
                        <label for="<?php echo $catItem['id'];?>" class="filter__item">
                            <input type="checkbox" name="cats[]" id="<?php echo $catItem['id'];?>">
                            <span><?php echo $catItem['name'];?></span>
                        </label>
                        <?php endforeach;?>
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
                <?php endif;?>
                <div class="content-news__grid-news-posts">
                    <a class="grid-news-posts__item" href="" style="width: 100%; height: 100%; background-color: grey;">
                        <div class="item__img-container">
                            <img src="" class="img-container__img" alt="">
                            <span class="item__news-title"></span>
                        </div>
                    </a>
                    <a class="grid-news-posts__item" href="" style="width: 100%; height: 100%; background-color: grey;">
                        <div class="item__img-container">
                            <img src="" class="img-container__img" alt="">
                            <span class="item__news-title"></span>
                        </div>
                    </a>
                    <a class="grid-news-posts__item" href="" style="width: 100%; height: 100%; background-color: grey;">
                        <div class="item__img-container">
                            <img src="" class="img-container__img" alt="">
                            <span class="item__news-title"></span>
                        </div>
                    </a>
                    <a class="grid-news-posts__item" href="" style="width: 100%; height: 100%; background-color: grey;">
                        <div class="item__img-container">
                            <img src="" class="img-container__img" alt="">
                            <span class="item__news-title"></span>
                        </div>
                    </a>
                    <a class="grid-news-posts__item" href="" style="width: 100%; height: 100%; background-color: grey;">
                        <div class="item__img-container">
                            <img src="" class="img-container__img" alt="">
                            <span class="item__news-title"></span>
                        </div>
                    </a>
                    <a class="grid-news-posts__item" href="" style="width: 100%; height: 100%; background-color: grey;">
                        <div class="item__img-container">
                            <img src="" class="img-container__img" alt="">
                            <span class="item__news-title"></span>
                        </div>
                    </a>
                    <a class="grid-news-posts__item" href="" style="width: 100%; height: 100%; background-color: grey;">
                        <div class="item__img-container">
                            <img src="" class="img-container__img" alt="">
                            <span class="item__news-title"></span>
                        </div>
                    </a>
                    <a class="grid-news-posts__item" href="" style="width: 100%; height: 100%; background-color: grey;">
                        <div class="item__img-container">
                            <img src="" class="img-container__img" alt="">
                            <span class="item__news-title"></span>
                        </div>
                    </a>
                    <a class="grid-news-posts__item" href="" style="width: 100%; height: 100%; background-color: grey;">
                        <div class="item__img-container">
                            <img src="" class="img-container__img" alt="">
                            <span class="item__news-title"></span>
                        </div>
                    </a>
                    <a class="grid-news-posts__item" href="" style="width: 100%; height: 100%; background-color: grey;">
                        <div class="item__img-container">
                            <img src="" class="img-container__img" alt="">
                            <span class="item__news-title"></span>
                        </div>
                    </a>
                    <a class="grid-news-posts__item" href="" style="width: 100%; height: 100%; background-color: grey;">
                        <div class="item__img-container">
                            <img src="" class="img-container__img" alt="">
                            <span class="item__news-title"></span>
                        </div>
                    </a>
                    <a class="grid-news-posts__item" href="" style="width: 100%; height: 100%; background-color: grey;">
                        <div class="item__img-container">
                            <img src="" class="img-container__img" alt="">
                            <span class="item__news-title"></span>
                        </div>
                    </a>
                    <a class="grid-news-posts__item" href="" style="width: 100%; height: 100%; background-color: grey;">
                        <div class="item__img-container">
                            <img src="" class="img-container__img" alt="">
                            <span class="item__news-title"></span>
                        </div>
                    </a>
                    <a class="grid-news-posts__item" href="" style="width: 100%; height: 100%; background-color: grey;">
                        <div class="item__img-container">
                            <img src="" class="img-container__img" alt="">
                            <span class="item__news-title"></span>
                        </div>
                    </a>
                    <a class="grid-news-posts__item" href="" style="width: 100%; height: 100%; background-color: grey;">
                        <div class="item__img-container">
                            <img src="" class="img-container__img" alt="">
                            <span class="item__news-title"></span>
                        </div>
                    </a>
                    <a class="grid-news-posts__item" href="" style="width: 100%; height: 100%; background-color: grey;">
                        <div class="item__img-container">
                            <img src="" class="img-container__img" alt="">
                            <span class="item__news-title"></span>
                        </div>
                    </a>
                    <a class="grid-news-posts__item" href="" style="width: 100%; height: 100%; background-color: grey;">
                        <div class="item__img-container">
                            <img src="" class="img-container__img" alt="">
                            <span class="item__news-title"></span>
                        </div>
                    </a>


                </div>
            </div>
            <?php else:?>
            <div class="news-section__content-news-none">
                <h3>
                    <span>
                        <?php _e('Новини відсутні', 'dwt'); ?>
                    </span>
                </h3>
            </div>
            <?php endif;?>
        </div>
    </div>
</section>