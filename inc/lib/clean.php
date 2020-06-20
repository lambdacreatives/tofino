<?php
/**
 * Load CSS and JS files
 *
 * @package Tofino
 * @since 3.0.0
 */

namespace Tofino\Clean;


// Remove default post from admin menu bar
function remove_default_post_type_menu_bar($wp_admin_bar) {
  $wp_admin_bar->remove_node('new-post');
}
add_action('admin_bar_menu', __NAMESPACE__ . '\\remove_default_post_type_menu_bar', 999);


// Remove draft widget from dashboard
function remove_draft_widget(){
  remove_meta_box('dashboard_quick_press', 'dashboard', 'side');
}
add_action('wp_dashboard_setup', __NAMESPACE__ . '\\remove_draft_widget', 999);


// Remove comments from admin menu
function remove_comments_admin_menus() {
  remove_menu_page('edit-comments.php');
}
add_action('admin_menu', __NAMESPACE__ . '\\remove_comments_admin_menus');


// Remove comment support from post and pages
function remove_comment_support() {
  remove_post_type_support('post', 'comments');
  remove_post_type_support('page', 'comments');
}
add_action('init', __NAMESPACE__ . '\\remove_comment_support', 100);


// Remove comments from admin bar
function remove_comments_admin_bar_render() {
  global $wp_admin_bar;
  $wp_admin_bar->remove_menu('comments');
}
add_action('wp_before_admin_bar_render', __NAMESPACE__ . '\\remove_comments_admin_bar_render');


// Remove script version
function remove_script_version($src) {
  $parts = explode('?ver', $src);
  return $parts[0];
}
add_filter('script_loader_src', __NAMESPACE__ . '\\remove_script_version', 15, 1);
add_filter('style_loader_src', __NAMESPACE__ . '\\remove_script_version', 15, 1);


// Fully Disable Gutenberg editor.
add_filter('use_block_editor_for_post_type', '__return_false', 10);


// Don't load Gutenberg-related stylesheets.
function remove_block_css() {
  wp_dequeue_style('wp-block-library'); // WordPress core
  wp_dequeue_style('wp-block-library-theme'); // WordPress core
  wp_dequeue_style('wc-block-style'); // WooCommerce
  wp_dequeue_style('storefront-gutenberg-blocks'); // Storefront theme
}
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\remove_block_css', 100);


function remove_json_api () {
  // Remove the REST API lines from the HTML Header
  remove_action('wp_head', 'rest_output_link_wp_head', 10);
  remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);

  // Remove the REST API endpoint.
  remove_action('rest_api_init', 'wp_oembed_register_route');

  // Turn off oEmbed auto discovery.
  add_filter('embed_oembed_discover', '__return_false');

  // Don't filter oEmbed results.
  remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);

  // Remove oEmbed discovery links.
  remove_action('wp_head', 'wp_oembed_add_discovery_links');

  // Remove oEmbed-specific JavaScript from the front-end and back-end.
  remove_action('wp_head', 'wp_oembed_add_host_js');

  // Remove all embeds rewrite rules.
  // add_filter('rewrite_rules_array', 'disable_embeds_rewrites');
}
add_action('after_setup_theme', __NAMESPACE__ . '\\remove_json_api');



// Remove gunk in header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10);
remove_action('wp_head', 'parent_post_rel_link', 10);
remove_action('wp_head', 'adjacent_posts_rel_link', 10);

// Remove emojis
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');


// Defer scripts
// if (!is_admin()) {
// 	function add_defer_attribute($tag, $handle) {
//     return str_replace(' src', ' defer src', $tag);	
// 	}
// 	add_filter('script_loader_tag', __NAMESPACE__ . '\\add_defer_attribute', 10, 2);
// }