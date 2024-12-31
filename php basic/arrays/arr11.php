<!-- difference function -->
<!-- array_diff()->value ne compare karava mate,diff function pela array ne bija array sathe compare karse ane diffrence batavse pela array me deffrence hase te j batavse
array_diff_key()->key ne compare karava mate
array_diff_assoc()->value and key ne compare karava mate
array_diff_uassoc()->user difine function na use thi arry compare karay
array_diff_ukey()->match key
array_udiff_assoc()
array_udiff_uassoc()
array_udiff()
 -->

<?php

function compare($a,$b){
    if($a === $b){
        return 0;
    }
    return ($a>$b)? 1:-1;
}

$a1 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2 = array("a"=>"red","f"=>"green","d"=>"purpal");
// $a3 = array("a"=>"red","b"=>"black","h"=>"yellow");


//  $newarray = array_diff($a1,$a2,$a3);
// $newarray = array_diff_key($a1,$a2);
// $newarray = array_diff_assoc($a1,$a2);
$newarray = array_diff_uassoc($a1,$a2,"compare");



 
 echo "<pre>";
print_r($newarray);
echo "</pre>";


?>