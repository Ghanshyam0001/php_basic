<!-- php callback -->
<!-- array_map() -->
<?php

// function square($n,$m){
//     // return "$n = $m";
//     return [$n => $m ]; //multtidimensnal
// }
// $a = [1,2,3,4];
// $b = ['lemon','banana','apple','guava'];
// $newarray = array_map('square',$a,$b);

// echo "<pre>";
// print_r($newarray);
// echo "</pre>";

// associative array

function square($n){
    return strtoupper($n); 
}
$a = array("one"=>"apple","two"=>"banana","three"=>"orange");
$newarray = array_map('square',$a);

echo "<pre>";
print_r($newarray);
echo "</pre>";




?>