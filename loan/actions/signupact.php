<?php

include_once __DIR__ . "/../db/config.php";

$fname = filter_var($_POST['fname'], FILTER_SANITIZE_STRING);
$lname = filter_var($_POST['lname'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

$query = "INSERT INTO ouruser
        (first_name, last_name, email, password) 
        VALUES(:fname, :lname, :email, :pass)";
        
$stmt = $pdo -> prepare($query);
$stmt -> bindParam(':fname', $fname);
$stmt -> bindParam(':lname', $lname);
$stmt -> bindParam(':email', $email);
$stmt -> bindParam(':pass', $pass);

try{
    if($stmt -> execute()){
    header("Location:{$hostname}/signin.php");
    }
} catch (PDOException $e){
    throw new PDOException('Failed Executing statement' . $e -> getMessage());
}



?>