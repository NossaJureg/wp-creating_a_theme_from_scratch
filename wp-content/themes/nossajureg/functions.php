<?php

# CONSTANTS

define('WP_URL', get_home_url());
define('WP_THEME_URL', get_bloginfo('template_url'));
define('WP_SITE_NAME', get_bloginfo('name'));

# FUNCTIONS

add_action('after_setup_theme', 'custom_setup');

function custom_setup()
{
    // Remove admin bar
    add_filter('show_admin_bar', '__return_false');

    // Menu
    register_nav_menu('menu-header', 'Menu do cabeçalho');
}
