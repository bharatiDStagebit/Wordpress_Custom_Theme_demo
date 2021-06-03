<!DOCTYPE html>
<html>

<head>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="sticky-top">
    <div class="container">

      <?php wp_nav_menu(array(
        'theme_location' => 'header',
        'menu_class' => 'nav-menu',

        'fallback_cb' => false
      )); ?>

    </div>
  </header>