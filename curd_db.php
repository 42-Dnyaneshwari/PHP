<?php
echo "welcome to the stage where we ready to get connect to the database<br>";
//connect to  db
//1.MySQLi extention
//2.PDO

$servername='localhost';
$username="root";
$password="";
$databse="dbdemo";
//connection object creation
$conn=mysqli_connect($servername,$username,$password,$databse);
//Die is connection is not successfull.
if(!$conn){
    die("Sorry we failed to connect ".mysqli_connect_error());
}

echo "connection successfull!<br>";


//creating table
// $sql="create table `trip`(`sno` int(6) not null auto_increment, `name` varchar(12) not null
// , `dest` varchar(6) not null,primary key(`sno`))";

// $res=mysqli_query($conn,$sql);

// //check for table creation success
// if($res=='TRUE'){
//     echo "the result is: <br>";
//     echo var_dump($res);
// }
// else{
//     echo "table creation fails ".mysqli_error($conn);
// }

//inserting records
$name='abc';
$dest='xyz';
$sql="insert into `trip`(`name`,`dest`) values('$name','$dest')";

$res=mysqli_query($conn,$sql);

//check for insert  success
if($res=='TRUE'){
    echo "the Record is inserted successfully: <br>";
    echo var_dump($res);
}
else{
    echo "insertion creation fails ".mysqli_error($conn);
}

?>