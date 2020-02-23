<?php

require ('vendor/autoload.php');

use DB\causePdo;

$pdo = new causePdo();

$pdo->causePdo();
$connect = $pdo->causePdo();

$query = file_get_contents(__DIR__.'/create_user_table.sql');
var_dump($connect->query($query));
//var_dump($pdo->causePdo()->query($query));