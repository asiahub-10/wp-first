<?php
	add_theme_support('menus');
	add_theme_support('widgets');
	add_theme_support('custom-header');
	add_theme_support('custom-background');
	add_theme_support('post-thumbnails');
	
	register_nav_menu('hm', 'Header Menu');
	register_nav_menu('fm', 'Footer Menu');
	register_nav_menu('sm', 'Side Menu');


?>