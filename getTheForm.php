<?php
require ('vendor/autoload.php');

use ConnectDB\PdoCause;
use CheckForm\CheckForm;


$pdo = new PdoCause();

//$pdo->causePdo();
$connect = $pdo->causePdo();

$error= new CheckForm();
$error = $error -> validationForm($_POST);
If ($error != null){
    echo ('<h3>'.$error.'</h3><br><a href="http://db.loc/form/filling_table.php">заполнить форму занова</a> ');
}
else {

    $query = $connect->exec('INSERT INTO user ( login, password, name, email, sex, education, year, rule) VALUES(
                                                           '.$connect->quote( $_POST['login']) .' ,
                                                           ' .$connect->quote( $_POST['password']) . ', 
                                                           ' .$connect->quote( $_POST['name'] ). ', 
                                                           ' .$connect->quote( $_POST['email']) . ', 
                                                           ' .$connect->quote( $_POST['sex']) . ', 
                                                           ' .$connect->quote( $_POST['education']) . ', 
                                                           ' .$connect->quote( $_POST['year']) . ', 
                                                           ' .$connect->quote( $_POST['rule']) . ')');
    //$query = $connect -> exec('INSERT INTO user (login, password, name, email, sex, education, year, rule) VALUES(123,123, 123, 123,123, 123,123, 123)');
    //var_dump($query);
    echo ('<h3><a href="http://db.loc/form/filling_table.php">запись добавлена вернуться к форме</a> </h3>');
}