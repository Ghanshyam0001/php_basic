<!-- array_reduce()->array ma je values che te badhi ak function mamokli ek value return kare che,syntex=>array_reduce(array,function,initial),initial is optional -->

<?php

// function myfunction($n,$m){
//     return $n . "-".$m;

// };
// $a  = ['orange','banana','apple'];

// $newarray = array_reduce($a,"myfunction",20);
// echo "<pre>";
// print_r($newarray);
// echo "</pre>";

function myfunction($n,$m){
    return $n +$m;

};
$a  = [10,20,30,40];

$newarray = array_reduce($a,"myfunction");
echo "<pre>";
print_r($newarray);
echo "</pre>";

?>