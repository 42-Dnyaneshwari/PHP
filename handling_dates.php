<?php

    echo "Handling Dates in PHP<br>";
    $day=date(" d j l");
    $d=date(" d S Fy");
    echo "Todays Date & Day is: $d<br>";

    echo "Todays Date & Day is: $day<br>";
    #3examples
    #1.Current Time
    echo 'Now: <br>'. time();
    #2 The MySQl datetime:
    $today = date("Y-m-d H:i:s");   
    echo "<br>The MySQl datetime: $today<br>";
    #3 Current Date
    $Today= date("j, n, Y");                       
    echo "Todays date is:$Today<br>";
?>