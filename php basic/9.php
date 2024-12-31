<!-- loops -->

<?php

// while
$a = 1;
while($a<6){
    echo $a;
    $a++;
}
echo "<br>";
// do...while
// $b = 2;
// do{
//     echo $b;
//     $b++;
// }while($i<4);
echo "<br>";



// for loop
for($c=0;$c<=10;$c++){
    echo $c;
}
echo "<br>";

// foreach loop
$mambers = array("peter"=>"35","ben"=>"37");
foreach($mambers as $x=>$y){
    echo "$x : $y <br>"; 

}

// Break

for($d = 0; $d<10; $d++){
    if($d==4){
        break;
    }
    echo $d;
}
echo "<br>";
// continue
for($d = 0; $d<10; $d++){
    if($d==4){
        continue;
    }
    echo $d;
}
?>