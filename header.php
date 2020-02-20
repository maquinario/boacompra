<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <title><?php bloginfo('name'); ?></title>
  <link id="page_favicon" href="<?php bloginfo('template_url')?>/favicon.png" rel="icon" type="image/x-icon" />
  <link rel="stylesheet" href="https://use.typekit.net/mrj8ybr.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <?php wp_head(); ?>
</head>
<body>

<header>
  <div class="container">
    <h1 class="logo">
      <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
    </h1>
    <div class="menus">
      <nav class="topMenu">
        <?php wp_nav_menu(array('theme_location' => 'top_menu')); ?>
      </nav>
      <nav class="navigation">
        <?php wp_nav_menu(array('theme_location' => 'navigation')); ?>
      </nav>
    </div>
  </div>
</header>
