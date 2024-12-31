<!-- array_sorting()->sorting means asc order -->
<!-- sort()->index sorting,
rsort()->index reverse sorting,
asort()-> value associative soting,
arsort()-> reverse associative sorting,
ksort()->key ni sorting mate associative,
krsort()->key ni sorting mate associative reverse,
natcasesort()->natural order sorting,
nasort()->natural order sorting,
array_multisort()->maltipal array sort, and  banne array ma value number same hova joia
array_reverse()->reverse array,-->

<?php

$a = ["orange","apple","garps","banana"];
$food =[22,15,3,65];

// sort($a);=>asc order
// rsort($a);=>dec order

// echo "<pre>";
// print_r($a);
// echo "</pre>"."</br>";

$food1 = array("d"=>"lemon","a"=>"orange","b"=>"banana","c"=>"apple");
sort($food1);
// rsort($food1);

echo "<pre>";
print_r($food1);
echo "</pre>"."</br>";

// $array1 = array("Img12.png","Img10.png","img2.png","img1.png");i capital hovathi parfet kam na kare

// natsort($array1);
// echo "<pre>";
// print_r($array1);
// echo "</pre>"."</br>";

$array1 = array("Img12.png","Img10.png","img2.png","img1.png");
 natcasesort($array1);
echo "<pre>";
print_r($array1);
echo "</pre>"."</br>";

array_multisort($food1,$array1);
echo "<pre>";
print_r($food1);
echo "</pre>"."</br>";
echo "<pre>";
print_r($array1);
echo "</pre>"."</br>";




?>