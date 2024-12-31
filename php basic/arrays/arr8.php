<!-- array_splice() -->
<!-- array,start,lenth,array -->
<?php
$color =  ["red","green","blue","yellow","brown"];
$fruit = ["graps","apple"];
// $newarray = array_splice($color,1);
// 1 index thi badhi value delete kari nakhse
// $newarray = array_splice($color,2,1);
// 2 index thi 1 value delete karse atle ke itself
// $newarray = array_splice($color,1,-1);
// minus ma function udhu kam kare che jene rakhvana hoy tene kadi nakhe che
$newarray = array_splice($color,2,2,$fruit);
// blue and yellow ne remove kari fruit ni value ne nakhi dese



echo "<pre>";
print_r($newarray);
echo "</pre>";

?>