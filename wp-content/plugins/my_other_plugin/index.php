<?php
/**
 * @package My-Other-Plugin
 * @version 1.0
 */
/*
Plugin Name: My-Other-Plugin
Description: This plugin is an example
Author: Benjamin Berglund
Version: 1.0
*/

function xxx2($content){
  
  //var_dump(get_adjacent_post());
  $adjPage = get_adjacent_post();

  $content .= '<a href="' . $adjPage->guid . ' ">NEXT page</a>';

  return $content;
}


add_filter('the_content', 'xxx2');