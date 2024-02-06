<?php

    echo "This is For Each Loop in PHP<br>";
    $arr=array("hii","hello","greet","namaste");
    for($i=0;$i<=count($arr);$i++)
    {
        echo $arr[$i];
        echo "<br>";
    }
    echo "<br>";
#do it by
foreach ($arr as  $value) {
    # code...
    echo "$value<br>";
}
?>