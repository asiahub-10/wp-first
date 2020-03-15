<?php

    add_theme_support('menus');
    add_theme_support('widgets');
    add_theme_support('custom-header');
    add_theme_support('custom-background');

    add_theme_support('post-thumbnails');

    register_nav_menu('hr', 'Header Menu');
    register_nav_menu('fr', 'Footer Menu');
    register_nav_menu('sr', 'Side Menu');