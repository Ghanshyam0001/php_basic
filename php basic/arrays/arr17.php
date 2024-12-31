<!-- array_fill()->navo array banavi value natkvani che,syntex=>array_fill(index,number,value)
array_fill_keys()->index array che tema value nakhvani che badha ma same value hase ,syntex=> array_fill_keys(array,value)
 -->
 <?php
 $a = array("a","b","c","d");
//   $newarray = array_fill_keys($a,"Testing");
//   echo "<pre>";
//   print_r($newarray);
//   echo "</pre>";
  $newarray = array_fill(3,4,"testing");
    echo "<pre>";
  print_r($newarray);
  echo "</pre>";




 ?>