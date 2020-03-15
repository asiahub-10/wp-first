<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

    <head>
        <title><?php bloginfo('title'); ?></title>

        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Boostrap Core CSS-->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
        
        <!-- Main CSS -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
        
        <!-- Animate CSS -->
        <link href="<?php echo get_template_directory_uri(); ?>/css/animate.css" rel="stylesheet">
        
        <!-- Google fonts -->
        <link href='http://fonts.googleapis.com/css?family=Oxygen:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Qwigley" />
        <!-- Font awesome -->
        <link href="<?php echo get_template_directory_uri(); ?>/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css">
    <?php wp_head(); ?>
   </head>
   <body <?php body_class(); ?>>
   
   <!-- Start wrapper -->
   <div class="wrapper">
  	  <div class="col-md-12">
         <!-- Logo -->
         <div class="brand wow fadeIn" data-wow-delay="0.1s"> Asia R.
           <div class="title"> - web designer & developer -  </div>
         </div>

         <!-- Navigation -->
         <nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <div class="navbar-brand"><a href="#">Patsy Doherty</a>
                <div class="title"> - hat designer - </div>
                </div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse nav-menu" id="bs-example-navbar-collapse-1">
                <hr/>
                <?php wp_nav_menu('hm'); ?>
                <hr/>
            </div>
            <!-- /navbar-collapse -->
         </nav>
         <!-- End nav -->

         <!-- Start main image and the text below -->
         <div class="col-md-12 wow fadeIn text-center" data-wow-delay="0.1s">
              <img src="<?php header_image(); ?>" alt="img" class="resp main-image"/>
                  <h1>Hat design</h1>
                  <div class="hr"></div>
                  <h2>The human head is a constantly moving and turning pedestal...with the hat a sculpture.
                  </h2>
                  <div class="text-center">
                     <a href="collection.html" class="home-btn btn">View collection</a>
                  </div>  
          </div>
          <!-- End main image and the text below -->

          <!-- Start left column -->
          <div class="box-home col-md-4 col-xs-offset-1">
               <h3>
               <span class="text-left">The right hat may also enliven our</span> imagination of the past...an old-fashioned cloche, a picture hat, or a toque trimmed with a pouf of polka-dotted veiling is just enough to make us feel as if we were living in another, romantic age. 
               <a href="news.html">read more <i class="fa fa-angle-right"></i></a>
               </h3>
          </div>
          <!-- End left column -->
             
          <!-- Start right image -->
          <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
             <div class="first">
             <div class="square wow fadeInDown" data-wow-delay=".5s"></div>
             </div>
             <img src="<?php echo get_template_directory_uri(); ?>/img/photo.jpg" alt="img" class="photo-home"/> 
          </div>
          <!-- End right image -->

          <?php while(have_posts()) : the_post(); ?>
          <div class="row">
              <div class="col-md-6">
                  <h1><?php the_title(); ?></h1>
                  <p><?php the_content(); ?></p>
              </div>
              <div class="col-md-6">
                  <?php the_post_thumbnail(); ?>
              </div>
          </div>
          <?php endwhile; ?>

          <!-- Start footer -->
          <div class="footer col-md-6 col-xs-offset-3">
             <h5>Copyright 2016
                 <a href="#"><i class="fa fa-facebook fa-1x icon1"></i></a>
                 <a href="#"><i class="fa fa-twitter fa-1x icon1"></i></a>
                 <a href="#"><i class="fa fa-instagram fa-1x icon1"></i></a>
             </h5>
          </div>
          <!-- End footer -->
          
      </div>
      <!-- End col-md-12 -->

   </div>
   <!-- End wrapper -->

      
   <!-- jQuery Version 1.11.0 -->
   <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.0.js"></script>
   <!-- Boostrap JS -->
   <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
   <!-- Smooth scroll JS -->
   <script src="<?php echo get_template_directory_uri(); ?>/js/smoothscroll.js"></script>
   
   <!-- Wow JavaScript -->
   <script src="<?php echo get_template_directory_uri(); ?>/js/wow.js"></script>
    
   <script>
   new WOW().init();
   </script>

   <?php wp_footer(); ?>

</body>
</html>
