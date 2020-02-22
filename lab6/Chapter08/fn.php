<?php
/**
 * Simple Templating function for the blogtease
 * @return string - Output of the template file. Likely HTML.
 */
function template( $file, $args ){
  
   // Make values in the associative array easier to access by extracting them
   if ( is_array( $args ) ){
    extract( $args );
  }

    // buffer the output (including the file is "output")
  ob_start();
    include $file;
  return ob_get_clean();
}