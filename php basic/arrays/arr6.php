<!-- arry_merge()->index,associative
arry_merge_recursive()->Multidimensional associative
arry_combine()->index -->

<?php
$fruit  =['a'=>'orange','b'=>'banana','c'=>'apple','d'=>'graps'];
$vaggi = ['b'=>'carrot','e'=>'pea',55,44];
// b two time che to banana ni jgya a carrot aavi jse

$new = array_merge($fruit,$vaggi);
$new1 = array_merge_recursive($fruit,$vaggi);
// recursive b no navo array banavi banne value store karse

echo "<pre>";
print_r($new);
echo "</pre>";
echo "<pre>";
print_r($new1);
echo "</pre>";
$name = array("ram","mohan","salman");
$age = array("10","20","30");
$a = array_combine($name,$age);
echo "<pre>";
print_r($a);
echo "</pre>";




?>