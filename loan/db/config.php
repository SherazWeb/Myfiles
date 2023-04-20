<?php

$hostname = 'http://localhost/loan';
try{
    $dsn = "mysql:host=localhost;dbname=loan";
    $pdo = new PDO($dsn, 'root', '');
    $pdo -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
    throw new PDOException('Connection with the database failed!' . $e -> getMessage());
}



















?>