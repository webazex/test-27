<?php
use Webazex\App\Core\CPT\CPT as CPT;
function registerCustomPostType()
{
    CPT::create([
        'type' => 'news',
        'name' => 'Новини',
        's_name' => 'Новини',
        'add_new' => 'Додати новину',
        'add_new_item' => 'Заголовок новини',
        'edit_item' => 'Редагувати новину',
        'new_item' => 'Нова новина',
        'view_item' => 'Перегляд новини',
        'search_item' => 'Знайти новину',
        'not_found' => 'Новину не знайдено',
        'not_found_in_trash' => 'Новину не знайдено',
        'parent_item_colon' => '',
        'menu_name' => 'Новини',
        'desc' => 'Новини',
        'public' => true,
        'position' => 5,
        'icon' => '',
        'has_archive' => true,
    ], 'dwt', [
            [
                'tax' => 'news-category',
                'name' => 'Категорії новин',
                's_name' => 'Категорія новини',
                'search_items' => 'Пошук категорій',
                'all_items' => 'Всі категорії',
                'view_item' => 'Переглянути категорію',
                'parent_item' => 'Батьківська категорія',
                'parent_item_colon' => 'Батьківська категорія',
                'edit_item' => 'Редагувати категорію',
                'update_item' => 'Оновити категорію',
                'add_new_item' => 'Додати категорію',
                'new_item_name' => 'Нова категорія',
                'menu_name' => 'Категорії новин',
                'back_to_items' => 'Назад до категорій',
                'desc' => 'Опис категорії новин',
                'public' => true,
                'hierarchical' => true,
                'show_admin_column' => true,
                'rest' => true,
            ],
        ]
    );
    flush_rewrite_rules();
};

add_action('init', 'registerCustomPostType');