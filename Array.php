<?php

echo "Welcome to Associative array in php<br>";
// Associative array
$favCol = array(
    'Guddi' => 'Red',
    'Prachi' => 'Green',
    'Puja' => 'White',
    13 => 'This'
);

echo $favCol['Guddi'];
echo "<br>";
echo $favCol['Prachi'];
echo "<br>";
echo $favCol['Puja'];
echo "<br>";
echo $favCol[13];
echo "<br>";

foreach ($favCol as $i => $j) {
    echo "<br>Fav color of $i is $j";
}


?>