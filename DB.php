<?php
//$user = 'root';
//$pass = '';
//$dns = 'mysql:host=localhost;dbname=DBuser';
//require 'config.php';
//$pdo= new PDO($dns,$user,$pass);

require ('vendor/autoload.php');

use DB\causePdo;

$pdo = new causePdo();

$pdo->causePdo();
$pdo = $pdo->causePdo();

$query = file_get_contents(__DIR__.'/create_user_table.sql');
var_dump($pdo->query($query));
//var_dump($pdo->causePdo()->query($query));