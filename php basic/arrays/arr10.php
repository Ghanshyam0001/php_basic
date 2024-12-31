<!-- intersect matlab 2 ke tethi vadhare array mathi cimmon item nikalvi -->
<!-- intersect function -->
<!-- array_intersect()->common value batavse
array_intersect_key()->common key value batavse
array_intersect_assoc()->common key and value ne match karse
array_intersect_uassoc()->jate banavenlu function pass karvama aave che ane te 2 array ni aalue compare kare che
array_intersect_ukey()->same key  vali value return kari che
array_uintersect()->value j same batavse
array_uintersect_assoc()
array_uintersect_uassoc() -->
<?php

function compare($a,$b){
    if($a === $b){
        return 0;
        // return 0->banne value match thai che
        // return 1->a ni value b thi moti che
        // return -1-> a ni value b thi nani che


    }
    return ($a>$b)? 1 : -1;
};
function comparevalue($a,$b){
    if($a === $b){
        return 0;
        // return 0->banne value match thai che
        // return 1->a ni value b thi moti che
        // return -1-> a ni value b thi nani che


    }
    return ($a>$b)? 1 : -1;
};

$a1 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");

$a2 = array("a"=>"red","f"=>"green","d"=>"purple");
// $a3 = array("a"=>"red","b"=>"black","h"=>"yellow");

//  $newarray = array_intersect($a1,$a2,$a3);
// $newarray = array_intersect_key($a1,$a2);
// $newarray = array_intersect_assoc($a1,$a2);
// $newarray = array_intersect_uassoc($a1,$a2,"compare");
// $newarray = array_intersect_ukey($a1,$a2,"compare");
// $newarray = array_uintersect($a1,$a2,"compare");
$newarray = array_uintersect_uassoc($a1,$a2,"compare","comparevelue");






 echo "<pre>";
print_r($newarray);
echo "</pre>";







?>