<?php
/**
 * @package My-Plugin
 * @version 1.0
 */
/*
Plugin Name: My-Plugin
Description: This plugin is an example
Author: Benjamin Berglund
Version: 1.0
*/

function nvnve($value){
  //error_reporting(E_ALL);
  if(is_single()){
    $metaHtml = '<div class="meta">';
    $metaHtml .= get_the_date();
    $metaHtml .= '<br>';
    $metaHtml .= get_the_author();
    $metaHtml .= '</div>';
    return $metaHtml . $value;
  }
  return $value;
}


add_filter('the_content', 'nvnve');

