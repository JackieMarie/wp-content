<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <div class="container">
        <nav class="row">
          <div class="twelve columns"
            <?php if(get_header_image() == ''){?>
              <h1><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></h1><?php
            }else{?>
              <a href="<?php echo home_url('/'); ?>"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="Logo" /></a>
            <?php } ?>
          </div>
        </nav>
        <nav class="row">
          <div class = "twelve columns">
            <?php wp_nav_menu(array(
                'theme_location'   =>  'header-menu',
                'container-class'  =>  'menu-header'
              ));
            ?>
          </div>
       </nav>
      </div>
    </header>
