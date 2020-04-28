<?php

/*
Plugin Name: alexmedia-write-log
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: writes logs
Version: The Plugin's Version Number, e.g.: 1.0
Author: Liran Cohen
Author URI: http://URI_Of_The_Plugin_Author
License: A "Slug" license name e.g. GPL2
*/


if ( ! function_exists('write_log')) {
   function write_log ( $log )  {
      if ( is_array( $log ) || is_object( $log ) ) {
         error_log( print_r( $log, true ) );
      } else {
         error_log( $log );
      }
   }
}