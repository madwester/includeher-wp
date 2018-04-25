<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <?php wp_head(); ?>
    <title>Include Her | Where Female Developer Meets</title>
  </head>
  <body <?php body_class($class); ?>
    <header>
      <nav class="navbar navbar-light navbar-expand-lg">
        <a class="navbar-brand" href="http://localhost:8888/"><img src="<?php bloginfo('template_directory')?>/build/images/include-logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-align-right navigationSymbol"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ml-auto">
          <?php 
              wp_nav_menu(array( 
                'theme_location' => 'header-menu',
                'walker' => new Custom_Walker_Nav_Menu_Top
                ) ); 
      ?>
            <!--<li class="nav-item">
              <a class="nav-link" href="#">Forum</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Meet</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Connect</a>
              </li>-->
          </ul>
          <button type="button" class="btn navBtn">Register/Login</button>
        </div>
      </nav>
    </header>