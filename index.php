<?php
// Main Template
$timber = new \Timber\Timber();

use Tofino\ThemeOptions as TO;

if (is_singular()) {
  $data         = Timber::get_context();
  $data['post'] = new TimberPost();
} else {
  $data          = Timber::get_context();
  $data['posts'] = Timber::get_posts();
}

$data['opt']['notifcation_top'] = TO\notification('top');
$data['opt']['menu_sticky']     = TO\menu_sticky();
$data['opt']['menu_position']   = TO\menu_position();
$data['opt']['footer_sticky']   = (get_theme_mod('footer_sticky') === 'enabled' ? true : false);

if (is_single()) {
  $data['page'] = 'single';
  $template     = 'single';
} elseif (is_page()) {
  $data['page'] = 'page';
  $template     = 'index';
} elseif (is_home()) {
  $data['page'] = 'home';
  $template     = 'index';
} elseif (is_category()) {
  $data['archive_title']       = get_cat_name(get_query_var('cat'));
  $data['archive_description'] = term_description();
  $data['page']                = 'archive';
  $template                    = 'archive';
}

// render using Twig template index.twig
Timber::render('twig/' . $template . '.twig', $data);
