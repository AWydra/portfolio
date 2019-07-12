<?php
$illegalLimit = 3;
$explodedValue = 3;
$illegal = false;

if(strpos($_SERVER["SERVER_NAME"], '127.0.0.1') !== false) {
  $_SERVER["SERVER_NAME"] = 'localhost:3000/portfolio/dist';
  $illegalLimit = 5;
  $explodedValue = 3;
}

$url = $_SERVER['REQUEST_URI'];
$urlExploded = explode('/', $url);

if(sizeof($urlExploded) > $illegalLimit) {
  $illegal = true;
}

if ($illegal) {
  $page = '404.php';
  include 'layout.php';
  exit;
}

$page = 'project.php';
include 'layout.php';

$url = $urlExploded[$explodedValue];
?>