<?php
$framework=require('lib/base.php');
$framework->route('GET /', 
  function() {
    echo 'Hello, world!';
  }
);
$framework->run();
