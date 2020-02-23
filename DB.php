<?php
//$user = 'root';
//$pass = '';
//$dns = 'mysql:host=localhost;dbname=DBuser';
//require 'return.php';
//$pdo= new PDO($dns,$user,$pass);

require ('vendor/autoload.php');

use DB\causePdo;

$pdo = new causePdo();

$pdo->causePdo();

//$s =$_POST['dano'];
//var_dump($s);
//var_dump((double)$s);
//var_dump(is_double((double)$s));
//var_dump(strlen((double)$s));


$query = file_get_contents('./create_user_table.sql', true);
var_dump($pdo->query($query));