<?php 
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cccwabcms_db";
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$server;dbname=$dbname;charset=$charset;";
    try {
        $conn = new PDO($dsn, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        throw new PDOException($e->getMessage());
    }

    require_once 'classes/Authentication.php';
    $account = new Authentication($conn);


?>