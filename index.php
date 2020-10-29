<?php

    $dsn = "mysql:host=localhost; dbname=udh";
    $user = "root";
    $pass = "";

try {
    $conn = new PDO($dsn, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES 'UTF8'"));

}catch (Exception $e){
    echo "Error: ".$e->getMessage();
}
?>