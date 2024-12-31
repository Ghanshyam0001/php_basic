<!-- array_values()->badhi value ne alag kari navo array banave che,aa function no use only associative arry sathe thay che
 and
  array_unique()->unique value show kare che -->
<?php
$color = array("a"=>"red","b"=>"green","c"=>"red","d"=>"yellow");
// $newarray = array_values($color);
$newarray = array_unique($color);




 
 echo "<pre>";
print_r($newarray);
echo "</pre>";


?>