<?php

use Table\TableCreation;
require ('vendor/autoload.php');
$table= new TableCreation();
$table->createTable();
//$table = $table->createTable();
header( "Location: http://db.loc/form/filling_table.php" );
