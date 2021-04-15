<?php

$servername = "localhost";
$username = "root";
$password = "3eznyRPCzADUfi";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
try{
    $pdo=new PDO('mysql:host=127.0.0.1,dbname=todos','root','3eznyRPCzADUfi');
}catch (PDOException $e){
    die('</br>Could not connect. ');
}
$pdo->prepare('INSERT INTO users (id, name) VALUES (6,"Joe")');
echo "</br>Etter Database." ;
echo "</br>befor database connection" ;