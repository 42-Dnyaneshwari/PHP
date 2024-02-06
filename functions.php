<?php

echo "Welcome to  Functions in PHP<br>";

function marks($i)
{
    $sum=0;
    foreach($i as $j)
    {
        $sum +=$j;
    }
    return $sum;
}
$Dnyaneshwari=[100,83,73,64,95];
$summarks=marks($Dnyaneshwari);
echo "Total marks scored by Dnyaneshwari is $summarks<br>";
#~#~#~#~#~#~#~#~#~#~#~#~#~#~#~#~#~#~#~#~#~#~#~#~#~#~#~#~#~#~#~#~#~#~#~#~#~#~#~#~#~#~#~#~#~#~#~#~#
$Prachi=[56,82,73,64,76];
$summarks=marks($Prachi);
echo "Total marks scored by Prachi is $summarks<br>";

?>