<!-- array_rand()-> random values aapva mate,($color= array,2=ketli value batavi)
 & shuffle()->arry potani position change karse -->
 <?php
 $color = ["red","green","blue","orange","brown"];
 $newarray = array_rand($color,2);
 shuffle($color);

 echo "<pre>";
print_r($newarray);
echo "</pre>";

// echo $color[$newarray];
 ?>