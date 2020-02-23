<?php
namespace DB;

use PDO;

class causePdo
{
    public function causePdo(){
        require 'return.php';

        $pdo= new PDO($dns,$user,$pass);
        return $pdo;
    }
}