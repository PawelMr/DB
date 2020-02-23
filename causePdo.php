<?php
namespace DB;

use PDO;

class causePdo
{
    public function causePdo(){
        $config = require( __DIR__.'\config.php');
        $user = $config['user'];
        $pass = $config['pass'];
        $typeDb = $config['typeDb'];
        $host = $config['host'];
        $dbname= $config['dbname'];
        $dsn = $typeDb.':host='.$host.';dbname='.$dbname ;

        $pdo= new PDO($dsn,$user,$pass);
        return $pdo;
    }
}