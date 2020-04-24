<?php

  header("Cache-Control: no-cache");
  header("Content-Type: text/event-stream");
  
  //Insert code for dynamic content here, like MySQL queries, json etc
  
  $example = date('Ymd His');
  $content = 'Time: '.$data.'.';

  echo "data: {$content}\n\n";
  flush();

?>
