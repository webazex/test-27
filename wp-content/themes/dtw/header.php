<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title();?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
<header>
    <div class="site-size">
        <div class="site-size__header-container default-container-padding">
            <div class="header-container__logo-box">

            </div>
            <div class="header-container__header-menu">
                <?php
                    wp_nav_menu( [
                        'theme_location'  => 'header',
                        'echo'            => true,
                        'container' => false
                    ] );
                ?>
            </div>
            <div class="header-container__contact-box">
                <a href="https://t.me/anton_web_dev" target="_blank" rel="nofollow">
                    <span>
                        <?php _e('Написати розробнику', 'dwt')?>
                    </span>
                </a>
            </div>
        </div>
    </div>
</header>
