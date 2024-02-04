<?php ?>
<a class="grid-news-posts__item" href="<?php echo $args['link']; ?>" id="<?php echo $args['id']; ?>">
    <div class="item__img-container">
        <?php if (!empty($args['src'])): ?>
            <img src="<?php echo $args['src']; ?>" class="img-container__img" alt="<?php echo $args['title']; ?>">
        <?php endif; ?>
    </div>
    <div class="item__news-cats-row">
        <div class="news-cats-row__cat-item">
            <?php foreach ($args['cats'] as $catItem):?>
            <span class="cat-item__text">
                <?php echo $catItem['name'];?>
            </span>
            <?php endforeach;?>
        </div>
    </div>
    <span class="item__news-title">
        <?php echo $args['title']; ?>
    </span>
    <p>
        <?php echo $args['desc']; ?>
    </p>
</a>
