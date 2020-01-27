<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class();?>>

<header>
  <div class="container-fluid top-menu-header justify-content-center">
    <div class="row">
      <div class="col-md-12">
        <!--Banner above navigation-->
        <?php dynamic_sidebar('banner-home'); ?>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 p-3" id="site-nav">
        <!--Navigation-->
        <?php wp_nav_menu(array(
          'theme_location' => 'header-menu',
          'container-class' => 'menu-header'
          ));
        ?>
      </div>
    </div>
  </div>
</header>
