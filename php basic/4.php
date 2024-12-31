<!-- php casting -->
<?php
// cast to string

$a =  5;
$b = 4.55;
$c = "hello";
$d = true;
$e = NULL; 
 
$a = (string)$a;
$b = (string)$b;
$c = (string)$c;
$d = (string)$d;
$e = (string)$e;

var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($c);
echo "<br>";
var_dump($d);
echo "<br>";
var_dump($e);

 
$a = (int)$a;
$b = (float)$b;
$c = (bool)$c;
$d = (array)$d;
$e = (object)$e;

var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($c);
echo "<br>";
var_dump($d);
echo "<br>";
var_dump($e)




?>