<?php
echo "welcome to the stage where we ready to get connect to the database<br>";
//connect to  db
//1.MySQLi extention
//2.PDO

$servername='localhost';
$username="root";
$password="";

//connection object creation
$conn=mysqli_connect($servername,$username,$password);
//Die
if(!$conn){
    die("Sorry we failed to connect ".mysqli_connect_error());
}

echo "connection successfull!<br>";


?>