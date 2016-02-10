<?php
/**
 * @package Mina Byggnader Data Plugin
 * @version 1.0
 */
/*
Plugin Name: Mina Byggnader Data Plugin
Description: Delivers a file structure to the client (HTML/JS).
Author: Benjamin Berglund
Version: 1.0
*/

function mina_byggnader_data($content){
	$content = $content . '';
	return $content;
}

add_filter('the_content', 'mina_byggnader_data');