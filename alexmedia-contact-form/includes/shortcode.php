<?php
// This file enqueues a shortcode.

defined('ABSPATH') or die('Direct script access disallowed.');

add_shortcode('acf_widget', function ($atts) {
  $default_atts = array();
  $args = shortcode_atts($default_atts, $atts);
  return "<div id='alexmedia-contact-form'></div>";
});
