<?php

echo 'processing... ';

// mirar por la variable GET

if (isset($_GET['name'])) {

  echo 'GET: your name is '. $_GET['name'];
  
  # code...
}
