<?php
$dsn = 'mysql:host=localhost;dbname=assignmenttrackerdb';
$username = 'assignment';
$password = 'assignment';

try{
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    $error = "Database Error: ";
    $error .= $e->getMessage();
    include('view/error.php');
    exit(); 
}