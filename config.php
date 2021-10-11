<?php

    define('USER', 'ahalliday');
    define('PASSWORD', 'Password12');
    define('HOST', 'localhost');
    define('DATABASE', 'ahalliday_FurtherWeb');

    try
    {
        $conn = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
    }
    catch (PDOException $e)
    {
        exit("Error: ". $e->getMessage());
    }

?>