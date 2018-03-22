<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=<?php bloginfo('charset');?>>
    <title><?php bloginfo('name');?></title>
    <rel="pingback" href="<?php bloginfo('pingback_url')?>"> 
    <?php wp_head();?>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
   <?php get_nav_menu();?>
  </div>
</nav>
