<?php
/**
 * @package My-Buildings
 * @version 1.0
 */
/*
Plugin Name: My-Buildings
Description: This plugin is an example of a shortcode plugin. It parses and loops over directories and files and returns html with a list of links for navigating the file structure.
Author: Benjamin Berglund
Version: 1.0
*/


function my_buildings_fn($attributes){ 
// $attributes is not in use now, but read about its usage at https://codex.wordpress.org/Shortcode_API
  
  // put the path properties for wordpress upload directory in the $path variable  
  $path = wp_upload_dir(); 

  // declare $my_buildings_current_path as an empty string
  $my_buildings_current_path = '';

  // if some directory has been clicked, we get that (sub)path from
  // the url:
  // http://localhost/wcms/?my_buildings_current_path=denmark
  // isset checks if the property 'my_buildings_current_path' exists at all (in the url)
  if(isset($_GET['my_buildings_current_path'])){
    // if it does exist, make it the current path (and prepend it with a /)
    $my_buildings_current_path = '/' . $_GET['my_buildings_current_path'];
  }

  // scandir gives us a list of files and directories. 
  // http://php.net/manual/en/function.scandir.php
  // As argument we use our current path, concatenated from: 
  //   $path['basedir'] . '/buildings' . $my_buildings_current_path
  // Here we put that list in the $currentDirectory variable
  $currentDirectory = scandir($path['basedir'] . '/buildings' . $my_buildings_current_path);

  // Separately we also need to concatenate a url for the direct link to any html-documents
  $currentUrl = $path['baseurl'] . '/buildings' . $my_buildings_current_path;

  // define $html as an empty string
  $html = '';

  // OK, now let's loop over the list and get something done!
  // http://php.net/manual/en/control-structures.foreach.php
  foreach($currentDirectory as $file){

    // if $file does not start with a dot (.) 
    if( strpos($file, '.') !== 0 ){ // http://php.net/manual/en/function.strpos.php
      // if $file contains .html
      if( strpos($file, '.html') > -1 ){
        // create and concatenate the found html-link to our $html variable
        $html .= '<a href="' . $currentUrl . '/' . $file . '">' . $file . '</a><br>';
      }else{
        // $file does not contain html
        $html .= '<a href="?my_buildings_current_path=' . $my_buildings_current_path . '/' . $file . '">' . $file . '</a><br>';
      }
    }
  }

  return $html; // send the $html back to wordpress to handle
}



/**
 *  put [my_buildings] as short code in a post and the
 *  function above (referenced below as 'my_buildings_fn') will run
 */
add_shortcode('my_buildings', 'my_buildings_fn', 1);
















