<!-- array_replace,array_replace_recursive -->
<!--array_replace work on index,associative
recursive work on maltidemensional  -->
<?php
$fruit  =['orange','banana','apple','graps'];
$vaggi = ['carrot','pea'];
$color = ['red','green','blue'];


$newarray = array_replace($fruit,$vaggi,$color);
echo "<pre>";
print_r($newarray);
echo "</pre>";

$array1 = array(
    "a"=>array("red"),
    "b"=>array("green","pink"));

$array2 = array(
    "a"=>array("yellow"),
    "b"=>array("blue"));

$new =  array_replace_recursive($array1,$array2);
echo "<pre>";
print_r($new);
echo "</pre>";

?>