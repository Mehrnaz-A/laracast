<?php

/*require 'core/bootstrap.php';

require Router::load('routes.php')
    ->direct(/Request.php::uri(), Request::method());*/

$servername = "localhost";
$username = "root";
$password = "3eznyRPCzADUfi";
$dbname="todos";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//$sql = "select * from users";
/*
$sql = "INSERT INTO users (name)
VALUES ( 'Said')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
/*try{
    $pdo=new PDO('mysql:host=127.0.0.1,dbname=todos','root','3eznyRPCzADUfi');
}catch (PDOException $e){
    die('</br>Could not connect. ');
}
$pdo->prepare('INSERT INTO users (id, name) VALUES (10,"Mehr10")');
echo "</br>Etter Database." ;
echo "</br>befor database connection" ;*/
