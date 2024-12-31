<!-- array_slice() -->
<!-- variable,start,lenth -->
<?php
$color =  ["red","green","blue","yellow","brown"];
$newarray = array_slice($color,1,3);
echo "<pre>";
print_r($newarray);
echo "</pre>";

?>