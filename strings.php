<?php
#string Datatype  in detail

echo "Strings in PHP";
$name="Dnyaneshwari";
echo "is CS student in SCOE kopergaon";
echo "<br>";
echo "<br>";
echo "My name is $name";
echo "<br>";
echo "<br>";

#strlen():-get lenght of string
echo "Getting lenght of  given String";
echo "The lenght of  $name is ".strlen($name);
echo "<br>";
echo "<br>";

#if u want to join/concatenate two string use . operator
#eg :
echo "this is my "."strings lecture in php";
echo "<br>";
echo "<br>";

#strrev():- reverse a string
echo "Reverse a string<br>";
echo strrev($name);
echo "<br>";
echo "<br>";

#strpos():- position return karega starts with 0
echo "Getting postion of a string<br>";
echo strpos($name,"ri");
echo "<br>";
echo "<br>";

#str_replace():-
echo "Replacing a string<br>";
echo str_replace("Dnyaneshwari","Guddii",$name);
echo "<br>";
echo "<br>";

#str_repeat():-
echo str_repeat($name,4);
echo "<br>";
echo "<br>";

#rtrim():-remove extra space from right
echo rtrim("<pre>         Dnyaneshwari is a good Girl      </pre>");
echo "<br>";
echo "<br>";

#ltrim():-remove extra space from left
echo ltrim("<pre>         Dnyaneshwari is a good Girl           </pre>");
echo "<br>";
echo "<br>";

?>