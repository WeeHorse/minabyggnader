<?php
/**
 * @package Admin-Plugin
 * @version 1.0
 */
/*
Plugin Name: Admin-Plugin
Description: This plugin is an example of how to write a plugin that modifies different aspects of the editor/admin GUI
Author: Thomas Frank
Version: 1.0
*/

// Examples of using the content_edit_pre filter


function removeManyDirtyWords($content){
  // Put some dirty words in an array
  $dirtyWords = [
    "fuck",
    "damn",
    "shit",
    "bullocks"
  ];
  // Remove dirty word from content
  foreach($dirtyWords as $dirtyWord){
   $content = str_replace($dirtyWord,"***",$content);
  }
  // Return modified content
  return $content;
}
add_filter("content_edit_pre","removeManyDirtyWords");

function removeDirtyWord($content){
  // Remove dirty word from content
  $content = str_replace("fuck","",$content);
  // Return modified content
  return $content;
}

add_filter("content_edit_pre","removeDirtyWord");








function makeWCMSred($content){
  // Make every occurence of WCMS red
  $content = str_replace(
    'WCMS',
    '<span style="color:red">WCMS</span>',
    $content
  );
  // Return modified content
  return $content;
}
add_filter("content_edit_pre","makeWCMSred");


// Example of using the title_edit_pre filter

function makeAllTitlesAllCapitals($content){
  return strtoupper($content);
}
add_filter("title_edit_pre","makeAllTitlesAllCapitals");


// Example of using the views_edit-post filter

function makePostEditLinksIntoButtons($names){
  // Please note the ampersand (&) before
  // $name - this means use $name as a reference
  // i.e. change the original element in the array
  // $names as well when I change something in a $name
  foreach($names as &$name){
    $name = '<button>'.$name.'</button>';
  }
  return $names;
}
add_filter("views_edit-post","makePostEditLinksIntoButtons");

// Example of using the the_content filter
// (doesn't change anything in edit mode but changes the
// final output on the page when viewing it)
function addBuyButton($content){
  // Replace the short code [buy] with a buy button
  $content = str_replace(
    "[buy]",
    '<button>Buy</button>',
    $content
  );
  return $content;
}


function addAdvancedBuyButton($content){
  // Replace the short code [buy XX] with a buy button
  // where XX is price

  $content = explode("[buy ",$content);
  $first = true;
  $newContent = "";
  foreach($content as $part){
    if($first){
      $newContent.= $part;
    }
    else {
      $part = explode("]",$part);
      $newContent.='<button class="buy">Buy '.$part[0].'</button>'.$part[1];
    } 
    $first = false;
  }
  return $newContent;
}

add_filter("the_content", "addAdvancedBuyButton");

// Also add a JavaScript that makes something happen
// when I click a buy button
wp_enqueue_script(
  // a name for my script (should preferably be unique)
  "buyButtonClick",
  // plugins_url is a WordPress method that finds
  // the path down to the plugin folder
  plugins_url("admin_plugin/js/clickBuyButton.js"),
  // if we have dependencies (other script that need
  // to be loaded before my script, then specify
  // them in an array)
  ["jquery-core"]
);






