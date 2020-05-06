<?php

$host = 'awydra.pl:3306';
$dbname = 'wydra_portfolio';
$username = 'wydra_demo';
$passwd = 'DeMo12!@';

try
{
   $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $passwd);
   $pdo->exec("set names utf8");
}
catch(Exception $e)
{
   die('DB conn error');
}