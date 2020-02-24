<?php
namespace Table;


use ConnectDB\PdoCause;
require ('vendor/autoload.php');
class TableCreation
{
    public function createTable()
    {
    $pdo = new PdoCause();

        $pdo->causePdo();
        $connect = $pdo->causePdo();

        $query = file_get_contents(__DIR__.'/create_user_table.sql');
        $connect->query($query);
//        var_dump($connect->query($query));
    //    //var_dump($pdo->causePdo()->query($query));
    }
}