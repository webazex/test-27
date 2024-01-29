<?php
add_action( 'after_setup_theme', 'registerDwtMenu' );

function registerDwtMenu() {
    register_nav_menu( 'header', 'Головне меню' );
}