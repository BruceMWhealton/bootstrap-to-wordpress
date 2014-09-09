
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">

    <title>
      <?php wp_title('|', true, 'right'); ?>
      <?php bloginfo('name'); ?>
    </title>


    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">

    <?php wp_head(); ?>

  </head>
<!-- NAVBAR
================================================== -->
  <body <?php body_class(); ?>>
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
            </div>
            <div class="navbar-collapse collapse">

             <?php 
                  $args = array(
                    'menu' => 'header-menu',
                    'menu_class' => 'nav navbar-nav',
                    'depth' => 1,
                    'container' => 'div'
                    );
                  wp_nav_menu( $args);
             ?>


            </div><!--/.navbar-collapse-->
          </div>
        </div>

      </div>
    </div>