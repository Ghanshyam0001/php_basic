<!-- array_column()->koi maltidimantional array che tema 3 array che to temathi key no alag arry banava mate 
array_chunk()->koi index array che to teni 2 value na par banava mate use thay che te maltidimantional array banave che -->

<?php
// $array = array(array("id"=>2201,"first_name"=>"Anil","last_name"=>"Kapoor"),
// array("id"=>2202,"first_name"=>"salman","last_name"=>"Khan"),
// array("id"=>2203,"first_name"=>"jhon","last_name"=>"abraham"),
// );

// $newarray = array_column($array,"first_name","id");

//  echo "<pre>";
// print_r($newarray);
// echo "</pre>";

$color = array("a","red","b","green","c","red","d","yellow");

$newarray = array_chunk($color,2);

 echo "<pre>";
print_r($newarray);
echo "</pre>";

?>