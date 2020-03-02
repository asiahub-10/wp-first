<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php bloginfo('title'); ?></title>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
	
		<div class="menu">
			<?php wp_nav_menu('hm'); ?>
		</div>
		
		<hr/>
		<br/>
		<br/>
		<?php while(have_posts()) : the_post(); ?>
			<?php the_post_thumbnail(); ?>
			<h2><?php the_title(); ?></h2>
			<p><?php the_content(); ?></p>
			<hr/>
		<?php endwhile; ?>
		
		

        <?php wp_footer(); ?>
    </body>
</html>