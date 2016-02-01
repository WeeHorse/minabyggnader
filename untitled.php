
<?php

function before_render_post($content){
  $delimiter = '<p><img';
  
  // $where = strpos($delimiter, $content);
  // $content = substr($content, $where);

  $images = explode($delimiter, $content['body']);
  $content['body'] = $delimiter + $images[0];
  return $content;
}



'<div>' + $content 