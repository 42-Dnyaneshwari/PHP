<?php

//scopes of variable 
//local scope
//global scope
echo "welcome to scopes of variables";
$a=10;
//declared a global variable
function printvalue(){
    global $a;
    $a=30;
    // $a=20 declared a local variable
    echo "the value of a is $a";
}

echo $a;
echo "<br>";

printvalue();
echo "<br>";


//if we change a global variable after ordering then its value gets changed everywhere.
echo var_dump($GLOBALS["a"]);

?>