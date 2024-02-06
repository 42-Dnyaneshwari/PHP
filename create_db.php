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
//Die is connection is not successfull.
if(!$conn){
    die("Sorry we failed to connect ".mysqli_connect_error());
}

echo "connection successfull!<br>";

//create Database
$sql="create database dbdemo";
$res=mysqli_query($conn,$sql);

//check for DB creation success
if($res=='TRUE'){
    echo "the result is: <br>";
    echo var_dump($res);
}
else{
    echo "DB creation fails ".mysqli_error($conn);
}

//returns false or true
//




?>