<?php

namespace Webazex\App\Core\Page;

class Page
{
    static function section($name, $data = []) {
        if(!empty($name)){
            echo get_template_part('App/views/sections/'.$name, '', $data);
        }
    }
    static function component($name, $data = []) {
        if(!empty($name)){
            echo get_template_part('App/views/components/'.$name, '', $data);
        }
    }
    static function block($name, $data = []) {
        if(!empty($name)){
            echo get_template_part('App/views/blocks/'.$name, '', $data);
        }
    }
}