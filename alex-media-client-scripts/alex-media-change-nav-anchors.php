<?php

/**
 * @wordpress-plugin
 * Plugin Name: alex-media-change-nav-anchors
 */

function loadChangeMenuAnchor()
{
  write_log('this is the dir: ' . plugins_url('scripts/change-anchors.js', __FILE__));
  wp_enqueue_script('change-anchors', plugins_url('scripts/change-anchors.js', __FILE__));
}

add_action('init', 'loadChangeMenuAnchor', 20);
