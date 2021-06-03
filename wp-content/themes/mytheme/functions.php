<?php

function load_Stylesheets()
{

  //bootsrap css
  wp_register_style('bootstrap_Style', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', array(), false, 'all');
  wp_enqueue_style('bootstrap_Style');
  //style css
  wp_register_style('mystyle', get_template_directory_uri() . '/style.css', array(), false, 'all');
  wp_enqueue_style('mystyle');
}

add_action('wp_enqueue_scripts', 'load_Stylesheets');
//first include jquery for document ready
function include_jquery()
{
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.6.0.min.js', '', 1, true);
  add_action('wp_enqueue_scripts', 'jquery');
}
add_action('wp_enqueue_scripts', 'include_jquery');

//load your custom scripts
function loadjs()
{
  wp_register_script('customjs', get_template_directory_uri() . '/js/script.js', '', 1, true);
  wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts', 'loadjs');

//menus
add_theme_support('menus');
register_nav_menus(array(
  'header' => 'Header menu',
  'footer' => 'Footer menu'
));
