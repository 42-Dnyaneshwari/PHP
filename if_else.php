<?php
echo "<h1>If Else in PHP<h1>";
$a=5;
$b=10;
$c=15;
 if($a > $b) 
    echo "a is greter than b <br>";
else
    echo "b is greter than a<br>";

$age=4;
echo "<br>";

if($age>18)
    echo "U can Vote Now<br>";
elseif($age>23)
    echo "U can Marry now<br>";
else
    echo "U can Go now<br>";
echo "Done:)<br>";

#quiz:create an if else using omire than 1 if else 
//write a program to allow a driver to drive only when his age is greter than 25 and less than 65

#a funtion which will perform if else:)
function drive($driver_age)
{

if ($driver_age >=25 && $driver_age <= 65)
{
    echo "You can drive!<br>";
}
elseif($driver_age >= 65)
{
    echo "Youbare too old to drive!<br>";
}
else
{
    echo "You are too young to Drive!<br>";
}
}
drive(23);#False
drive(45);#True
drive(67);#false
?>


