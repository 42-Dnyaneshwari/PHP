<?php
echo "Hello To Multidiamentional array!!";
echo "<br>";
$multid=array(array(1,2,3),
              array(4,5,6),
              array(7,8,9));
echo "<br>";
$i;
$j;
echo "<br> The Multidiamentional array is:<br>";
for($i=0;$i<count($multid);$i++)
{
    
    echo var_dump($multid[$i]);
    echo "<br>";

}

echo "<br>";
for($i=0;$i<count($multid);$i++)
{
    for($j=0;$j<count($multid[$i]);$j++)
    {
        echo $multid[$i][$j];
        echo " ";
    }
}



?>