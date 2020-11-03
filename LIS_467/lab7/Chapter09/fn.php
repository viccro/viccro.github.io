<?php
/**
 * Simple Templating function for the blogtease
 * $file - a path to the HTML snippet
 * $args - an array of parameters to be passed to the HTML template
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