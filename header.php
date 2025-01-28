<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/ico"
   href="<?php bloginfo("template_directory");?>/assets/images/favicon.ico"/>
  <title>Traverse</title>
  <?php wp_head();?>
</head>

<body data-spy="scroll" data-target=".navbar" data.offset="60" style="background-color: white;">

  <nav class="navbar navbar-expand-xl navbar-light fixed-top">
    <a class="navbar-brand" href="<?php site_url();?>">
      <img
        src="<?php bloginfo("template_directory");?>/assets/images/logo.svg"
        class="logo" alt="traverse">
    </a>
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar-list-2"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      <span class="my-1 mx-2 close">X</span>
    </button>
 

    <?php 
        wp_nav_menu(
          array(

            'theme_location' => 'main-menu',
            'container' => 'div', 
            'container_class' => 'collapse navbar-collapse',
            'container_id'  => 'navbar-list-2',
            'menu_class' => 'navbar-nav'
            
          )
          );
      ?>
  </nav>