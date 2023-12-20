<?php
function theme_setup()
{
  add_theme_support('wp-block-styles');
  add_theme_support('align-wide');
  add_theme_support('editor-styles');
  add_editor_style('style.css');


  register_nav_menus(array(
    'primary' => __('Primary Menu', 'theme'),
  ));
}




add_action('after_setup_theme', 'theme_setup');


