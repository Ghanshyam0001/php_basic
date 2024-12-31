<!-- function -->
<?php

function sum($x,$y){
    $z = $x + $y;
    return $z;
}

echo "5+10=".sum(5,10)."<br>";

echo "<br>";

function fname($fname,$year){
    echo "$fname Refsnes.Born is $year <br>";
}
fname("harry","1922");
fname("carry","1972");
fname("marry","1952");

?>
