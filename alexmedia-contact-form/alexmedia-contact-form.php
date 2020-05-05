<?php

/**
 * @wordpress-plugin
 * Plugin Name: alex-media-contact-form
 */

function initPlugin()
{
  defined('ABSPATH') or die('Direct script access disallowed.');

  define('ACF_WIDGET_PATH', plugin_dir_path(__FILE__) . '/widget');
  define('ACF_ASSET_MANIFEST', ACF_WIDGET_PATH . '/build/asset-manifest.json');
  define('ACF4_INCLUDES', plugin_dir_path(__FILE__) . '/includes');
  write_log(ACF4_INCLUDES);

  defined('ABSPATH') or die('Direct script access disallowed.');
  require_once(ACF4_INCLUDES . '/enqueue.php');
  // require_once(ACF4_INCLUDES . '/shortcode.php');
}

add_action('init', 'initPlugin', 20);
