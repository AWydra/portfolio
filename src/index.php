<?php
require_once 'shadow/db.php';

$address = getHostByName(getHostName());
$illegalLimit = 3;
$explodedValue = 3;
$illegal = false;

if(strpos($address, '192.168') !== false) { //If site works on localhost
  $_SERVER["SERVER_NAME"] = "$address:3000/portfolio/dist";
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
  $file = 'error404';
  include 'layout.php';
  exit;
} else if (sizeof($urlExploded) === $illegalLimit - 1){ //If there is no slug
  $page = 'home.php';
  $file = 'home';

  include 'layout.php';
  exit;
}

$slug = $urlExploded[$explodedValue];

$stmt = $pdo->prepare("SELECT * FROM portfolio WHERE slug=:slug");
$stmt->execute(['slug' => $slug]);
$data = $stmt->fetch();

if(!$data) {
  $page = '404.php';
  $file = 'error404';
  include 'layout.php';
  exit;
}

$heading = $data['heading'];
$details = unserialize($data['details']);
$description = $data['description'];
$images = unserialize($data['images']);
$code = $data['code'];
$live = $data['live'];
$technologies = unserialize($data['technologies']);

$page = 'project.php';
$file = 'project';
include 'layout.php';
?>