<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" >
    <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <title><?php bloginfo('title'); ?></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700" rel="stylesheet" />
    <link href="<?Php echo get_template_directory_uri(); ?>/default.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?Php echo get_template_directory_uri(); ?>/fonts.css" rel="stylesheet" type="text/css" media="all" />

    <link href="<?Php echo get_template_directory_uri(); ?>/default_ie6.css" rel="stylesheet" type="text/css" />
    <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    <div id="header-wrapper" style="background: url(<?php header_image(); ?>); background-size: cover;">
        <div id="header" class="container">
            <div id="logo">
                <h1><a href="#">Brushwood</a></h1>
                <h2><a href="#"><?Php bloginfo('title'); ?></a></h2>
                <h3><a href="#"><?Php bloginfo('description'); ?></a></h3>
                <div id="menu">
                    <?php wp_nav_menu('hm'); ?>
                </div>
            </div>
        </div>
    </div>
    <div id="page-wrapper">
        <div id="page" class="container">
            <div class="title">
                <h2>Welcome to our website</h2>
            </div>
            <p>This is <strong>Brushwood</strong>, a free, fully standards-compliant CSS template designed by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>. The photos in this template are from <a href="http://fotogrph.com/"> Fotogrph</a>. This free template is released under the <a href="http://templated.co/license">Creative Commons Attribution</a> license, so you're pretty much free to do whatever you want with it (even use it commercially) provided you give us credit for it. Have fun :) </p>
        </div>
    </div>
    <div id="wrapper">
        <div id="three-column" class="container">
            <div><span class="arrow-down"></span></div>
            <?php while(have_posts()) : the_post(); ?>
            <div id="tbox1">
                <div class="title">
                    <h2><?php the_title(); ?></h2>
                </div>
                <p><?php the_content(); ?></p>
                <a href="#" class="button">Learn More</a>
            </div>
            <?php endwhile; ?>
<!--            <div id="tbox2">-->
<!--                <div class="title">-->
<!--                    <h2>Integer gravida</h2>-->
<!--                </div>-->
<!--                <p>Proin eu wisi suscipit nulla suscipit interdum. Nullam non wisi a sem semper suscipit eleifend. Donec mattis libero eget urna. Duis  velit ac mauris.</p>-->
<!--                <a href="#" class="button">Learn More</a> </div>-->
<!--            <div id="tbox3">-->
<!--                <div class="title">-->
<!--                    <h2>Praesent mauris</h2>-->
<!--                </div>-->
<!--                <p>Donec mattis libero eget urna. Duis pretium velit ac mauris. Proin eu wisi suscipit nulla suscipit interdum. Nullam non wisi a sem suscipit  eleifend.</p>-->
<!--                <a href="#" class="button">Learn More</a> </div>-->
        </div>
        <div id="portfolio" class="container">
            <div class="column1">
                <div class="box"> <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/scr01.jpg" alt="" class="image image-full" /></a>
                    <h3>Vestibulum venenatis</h3>
                    <p>Fermentum nibh augue praesent a lacus at urna congue rutrum.</p>
                    <a href="#" class="button button-small">Etiam posuere</a> </div>
            </div>
            <div class="column2">
                <div class="box"> <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/scr02.jpg" alt="" class="image image-full" /></a>
                    <h3>Praesent scelerisque</h3>
                    <p>Vivamus fermentum nibh in augue praesent urna congue rutrum.</p>
                    <a href="#" class="button button-small">Etiam posuere</a> </div>
            </div>
            <div class="column3">
                <div class="box"> <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/scr03.jpg" alt="" class="image image-full" /></a>
                    <h3>Donec dictum metus</h3>
                    <p>Vivamus fermentum nibh in augue praesent urna congue rutrum.</p>
                    <a href="#" class="button button-small">Etiam posuere</a> </div>
            </div>
            <div class="column4">
                <div class="box"> <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/scr04.jpg" alt="" class="image image-full" /></a>
                    <h3>Mauris vulputate dolor</h3>
                    <p>Rutrum fermentum nibh in augue praesent urna congue rutrum.</p>
                    <a href="#" class="button button-small">Etiam posuere</a> </div>
            </div>
        </div>
    </div>
    <div id="copyright" class="container">
        <p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
            <ul class="contact">
                <li><a href="#" class="icon icon-twitter"><span>Twitter</span></a></li>
                <li><a href="#" class="icon icon-facebook"><span></span></a></li>
                <li><a href="#" class="icon icon-dribbble"><span>Pinterest</span></a></li>
                <li><a href="#" class="icon icon-tumblr"><span>Google+</span></a></li>
                <li><a href="#" class="icon icon-rss"><span>Pinterest</span></a></li>
            </ul>
    </div>
    <?php wp_footer(); ?>
    </body>
</html>
