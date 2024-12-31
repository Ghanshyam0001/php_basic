<!-- php operator -->
<?php
// Arithmetic 
$x= 5;
$y = 7;
echo $x+$y;
echo "<br>";
echo $x-$y;
echo "<br>";
echo $x*$y;
echo "<br>";
echo $x/$y;
echo "<br>";
echo $x%$y;
echo "<br>";
echo $x**$y;
echo "<br>";

// assigment
echo $x = $x+$y;
echo "<br>";
echo $x = $x-$y;
echo "<br>";
echo  $x =$x*$y;
echo "<br>";
echo  $x =$x/$y;
echo "<br>";
echo  $x =$x%$y;
echo "<br>";
echo  $x =$x**$y;
echo "<br>";

// compression
$x = 100;  
$y = "100";

var_dump($x === $y); // returns false because types are not equal
echo $x == $y;
echo "<br>";
echo $x === $y;
echo "<br>";
echo $x != $y;
echo "<br>";
echo $x <> $y;
echo "<br>";
echo $x !== $y;
echo "<br>";
echo $x > $y;
echo "<br>";
echo $x < $y;
echo "<br>";
echo $x >= $y;
echo "<br>";
echo $x <= $y;
echo "<br>";


//  tarnary
$a = 17;
$b = 15;
$c = $a<$b? "true":"false";
echo $c;
echo "<br>";

// increment/decriment
$x = 10;  
echo ++$x;

// ++$x;  increment $x by one then return $x
// $x++;   return $x then increment $x by one
// --$x;  decremnent $x by one then return $x
// $x--;  return $x then decremnent $x by one

// logical 
$x = 100;  
$y = 50;

if ($x == 100 and $y == 50) {
    echo "Hello world!";
}
echo $x and $y;
echo $x or $y;
echo $x xor $y;
echo $x && $y;
echo $x || $y;
echo !$x 


?>