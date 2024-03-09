<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head() ?>

</head>
<body <?php body_class(); ?>>

  <header class="site-header bg-primary">
    <div class="container">
      <div class="site-header__content-container">

        <div class="site-header__logo-container">
          <a href="/" class="site-header__logo-link">
            CRPS Website
            <!-- <img class="site-header__logo" src="#"> -->
          </a>
        </div>

        <div class="site-header__menu-container">
          <nav class="site-header__main-nav">
            <ul class="site-header__menu-group">
              <li class="site-header__menu-item menu-item"><a href="#" class="site-header__menu-item-link">One</a></li>
              <li class="site-header__menu-item menu-item"><a href="#" class="site-header__menu-item-link">Two</a></li>
              <li class="site-header__menu-item menu-item"><a href="#" class="site-header__menu-item-link">Three</a></li>
              <li class="site-header__menu-item menu-item"><a href="#" class="site-header__menu-item-link">Four</a></li>
            </ul>
          </nav>
        </div>

      </div>
    </div>
  </header>