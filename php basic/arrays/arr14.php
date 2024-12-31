<!-- array_flip()->inter change key to value,value to key
array_change_key_case()->lowercase to upper case,uppercase to lower case -->

<?php
$a = array(
    "Bill"=>10,
    "joe"=>20,
    "Peter"=>30
);
// $newarray = array_flip($a);

//  echo "<pre>";
// print_r($newarray);
// echo "</pre>";
$newarray = array_change_key_case($a,CASE_UPPER);

 echo "<pre>";
print_r($newarray);
echo "</pre>";

?>