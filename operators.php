<?php
//operators in php
echo "Operators in PHP";
echo "<br>";
echo "<br>";
echo "Types of Operator";
echo "<br>";
echo "<br>";
echo "  1 Arithmatic Operator<br>
        2 Assignmnet Operator <br>  
        3 Comparision Operator<br>
        4 Logical Operator<br>";
        echo "<br>";
        echo "<br>";
$a=10;
$b=5;
echo "***ARITHMATIC OPERATOR***";
echo "<br>";
echo "<br>";
echo " For a + b the result is ".($a + $b);
echo "<br>";
echo "<br>";
echo " For a - b the result is ".($a - $b);
echo "<br>";
echo "<br>";
echo " For a * b the result is ".($a * $b);
echo "<br>";
echo "<br>";
echo " For a / b the result is ".($a / $b);
echo "<br>";
echo "<br>";
echo " For a % b the result is ".($a % $b);
echo "<br>";
echo "<br>";
echo " For a ** b the result is ".($a ** $b);
echo "<br>";
echo "<br>";

//Assignment Operator
echo "***ASSIGNMENT OPEARETOR***" ;
echo "<br>";
echo "<br>";
$x=$a;
echo "For x the value is".$x;
echo "<br>";
echo "<br>";

echo "***COMPARISON OPERATOR***";
$s=100;
$p=87;
echo "<br>";
echo "<br>";
echo "For s==p".var_dump($s==$p);
//null it will for false
$s=100;
$p=87;
echo "<br>";
echo "For s<=p".var_dump($s<=$p);
//it will return null
echo "<br>";
$s=100;
$p=87;
echo "For s>=p".var_dump($s>=$p);
// it will return true
echo "<br>";
echo "***Logical OPERATOR***";
echo "<br>";
echo "<br>";
$m=true;
$n=false;
echo "For m and n".var_dump($m and $n);
echo "<br>";
echo "For m or  n".var_dump($m or $n);
echo "<br>";
echo "For m && n".var_dump($m && $n);
echo "<br>";
echo "For m ||  n".var_dump($m || $n);
echo "<br>";
//not : ye swap kr dega dono ko
//      1.true - false
//      2.false-true
echo "For !m".var_dump(!$m);
echo "<br>";
echo "For !n".var_dump(!$n);
echo "<br>";
?>