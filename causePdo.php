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


//        $opt = [     // как понял переменная на ошибки но не понял как и зачем
//            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
//            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//            PDO::ATTR_EMULATE_PREPARES   => false,
//        ];

        $pdo= new PDO($dsn,$user,$pass/*,$opt*/);
        return $pdo;
    }
}