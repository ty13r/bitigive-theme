<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title>
      <?php bloginfo('name'); ?> |
      <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>
    <link rel="shortcut icon" href="http://bitgivefoundation.org/wp-content/uploads/2014/07/favicon.ico" type="image/x-icon">
    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <?php wp_head(); ?>
    <?php if(is_front_page()) : ?>
      <style>
        .showcase{
          background-image:url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/showcase.jpg'); ?>);
        }
        @media (max-width: 767px) {
          .showcase{
            background-image:url(<?php echo get_theme_mod('showcase_image_mobile', get_bloginfo('template_url').'/img/showcase-mobile.jpg'); ?>);
            background-color: white;
          }
        }
      </style>
    <?php endif; ?>

  </head>
  <body <?php body_class($post->post_name); ?>>
    <div class="blog-masthead">
      <header class="hidden-xs">
        <div class="container">
          <div class="row vertical-align">
            <div class="col col-sm-3">
              <a href="<?php echo get_home_url(); ?>"><span class="logo"></span></a>
            </div>
            <div class="col col-sm-6">
              <span class="logo-phrase">Leveraging Bitcoin & Blockchain for Global Philanthropy</span>
            </div>
            <div class="col col-sm-3 social-logos">
              <a class="facebook-logo" href="https://www.facebook.com/BitGive/"><img class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/img/facebook-logo.png" alt=""></a>
              <!-- <a class="googleplus-logo" href="#"><img class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/img/google-plus-logo.png" alt=""></a> -->
              <a class="twitter-logo" href="https://twitter.com/BitGiveOrg"><img class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/img/twitter-logo.png" alt=""></a>
            </div>
          </div>
        </div>
      </header>
      <div class="container">
        <nav class="blog-nav navbar navbar-default">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand visible-xs" href="<?php echo get_home_url(); ?>"></a>
            </div>
              <?php
               wp_nav_menu( array(
                   'menu'              => 'primary',
                   'theme_location'    => 'primary',
                   'depth'             => 2,
                   'container'         => 'div',
                   'container_class'   => 'navbar-collapse collapse',
                   'container_id'      => 'navbar',
                   'menu_class'        => 'nav navbar-nav',
                   'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                   'walker'            => new wp_bootstrap_navwalker())
               );
              ?>
        </nav>
      </div>
    </div>

      <div class="blog-header">
        <h2 class="blog-title"><?php bloginfo('name'); ?></h2>
        <p class="lead blog-description"><?php bloginfo('description'); ?></p>
      </div>
