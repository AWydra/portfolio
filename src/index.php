<?php
$illegalLimit = 3;
$explodedValue = 3;
$illegal = false;

if(strpos($_SERVER["SERVER_NAME"], '127.0.0.1') !== false) { //If site works on localhost
  $_SERVER["SERVER_NAME"] = 'localhost:3000/portfolio/dist';
  $illegalLimit = 5;
  $explodedValue = 3;
}

$url = $_SERVER['REQUEST_URI'];
$urlExploded = explode('/', $url);

if(sizeof($urlExploded) > $illegalLimit) {
  $illegal = true;
}


if ($illegal) { //If slug is incorrect
  $page = '404.php';
  include 'layout.php';
  exit;
} else if (sizeof($urlExploded) === $illegalLimit - 1){ //If there is no slug
  $page = 'home.php';
  include 'layout.php';
  exit;
}

//Connect with DB here;

$page = 'project.php';
include 'layout.php';

$url = $urlExploded[$explodedValue];
?>