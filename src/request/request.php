<?php
    define('HOST', 'mysql');
    define('USR', 'root');
    define('PWD', 'root');
    try {
        $db = new PDO('mysql:host='.HOST.';dbname=classicmodels;port=3306', USR, PWD);
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch(Exception $e) {
        echo $e->getMessage();
        exit;
    }
?>

