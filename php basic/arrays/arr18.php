<!-- array_walk()-> darek array mate function run thay,syntex=>array_walk(array,function,parameter),parameter is optional,work index,associative
array_walk_recursive()->maulidaimansioal -->
<?php
// $fruits = array(
//     "a"=>"Lemon",
//     "b"=>"orange",
//     "c"=>"Banana",
//     "d"=>"Apple"
// );
// array_walk($fruits,"myfunction","is a key of");

function myfunction($value,$key,$param){
    echo "$key $param $value"."</br>";


};

// maltidiamantional

$veggie = array("1"=>"carrot","2"=>"Tomatoes");

$fruits = array(
    $veggie,
    "a"=>"Lemon",
    "b"=>"Orange",
    "c"=>"Banana",
    "d"=>"Apple"
);
array_walk_recursive($fruits,"myfunction","is a key of");



?>