<?php
/**
 * @package Limit-Project
 * @version 1.0
 */
/*
Plugin Name: Limit-Project
Description: This plugin is an example
Author: Benjamin Berglund
Version: 1.0
*/

function limitProjectSize($str){
  $delimiter = '<p>';
  $pos = strpos($str, $delimiter);
  if($pos === FALSE){
    return $str;
  }
  $arr = explode($delimiter, $str);
  if(empty($arr[0])){
    array_shift($arr);
  }
  return $delimiter . $arr[0];
}

add_filter('the_content', 'limitProjectSize');