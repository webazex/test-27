<?php
get_header();
use Webazex\App\Core\Page\Page as Page;
?>
<main>
    <?php
        Page::section('welcome');
        Page::section('default');
    ?>
</main>
<?php get_footer();?>
