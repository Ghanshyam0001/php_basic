<!-- php string -->

<?php

$x = "Patel Ghanshyam";
// strtoupper case
echo strtoupper($x);
echo "<br>";

// strtolowercase;
echo strtolower($x);
echo "<br>";

// str_replace
echo str_replace("Patel","satel",$x);
echo "<br>";

// reverse
echo strrev($x);
echo "<br>";

// trim
echo trim($x);
echo "<br>";

// slicing
$x = "Patel Ghanshyam";
echo substr($x,6,5); // 6 index ti start ane 5 latter
echo "<br>";

// slice to end
echo substr($x,6);
echo "<br>";

// slice from the end
echo substr($x,-5,3);


?>