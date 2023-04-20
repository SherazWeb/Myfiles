<?php

include_once __DIR__ . '/../db/config.php';

$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$password = $_POST['password'];

$query = "SELECT email, password FROM ouruser WHERE email = :email";

$stmt = $pdo -> prepare($query);
$stmt -> bindParam(':email', $email);
// $stmt -> bindParam(':pass', $password);

if($stmt -> execute()){
    echo 'Executed';
    $row = $stmt -> fetch();
    if($row && password_verify($password, $row['password'])){
        echo 'Redirecting';
        header("Location:{$hostname}/index.php");
    }else{
        session_start();
        $_SESSION['error'] = 'Invalid Email or Password';
        header("Location:{$hostname}/signin.php");
    }
}
















?>