<!-- sorting array -->
<?php
$cars = array("volvo","bmw","audi");
echo (sort($cars));

$clength = count($cars);

for($x=0;$x<$clength;$x++)
{
    echo $cars[$x];
    echo "<br>";
}
echo "<br>";


// number sorting
$num = array(4,5,444,6,778,2,1,-9);
echo (sort($num));
$slength = count($num);

for($m = 0;$m<$slength;$m++)
{
    echo $num[$m];
    echo "<br>";
}

// rsort
// ksort
// asort

?>