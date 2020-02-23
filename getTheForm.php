<?php
require ('vendor/autoload.php');

use DB\causePdo;

$pdo = new causePdo();

$pdo->causePdo();
$connect = $pdo->causePdo();
var_dump($_POST['login']);
var_dump($_POST['password']);
var_dump($_POST['name']);
var_dump($_POST['email']);
var_dump($_POST['sex']);
var_dump($_POST['education']);
var_dump($_POST['year']);
var_dump($_POST['rule']);

$query = $connect -> exec('INSERT INTO user (login, password, name, email, sex, education, year, rule) VALUES('.$_POST['login'].','.$_POST['password'].', '.$_POST['name'].', '.$_POST['email'].', '.$_POST['sex'].', '.$_POST['education'].', '.$_POST['year'].', '.$_POST['rule'].')');
//$query = $connect -> exec('INSERT INTO user (login, password, name, email, sex, education, year, rule) VALUES(123,123, 123, 123,123, 123,123, 123)');

var_dump($query);