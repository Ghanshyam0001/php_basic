<!-- statement -->

<?php

// if 
$t = 14;
if($t<20){
    echo "Have a nice day";
}
echo "<br>";

// if with operator

$a = 200;
$b = 33;
$c = 50;
 if($a>$b && $c<$a){
    echo "Both condition is true";
 }

//  if...else

$f = ("h");
if($f <"a"){
    echo "have a goood day";
    echo "<br>";
}
else{
    echo "good night";
    echo "<br>";
}

// elseif

$d = 18;
if($d<10){
    echo "a is true";
}
    elseif($d<9){
        echo "b is true";
    }
    elseif($d<20){
        echo "c is true";
    }   

else{
    echo "all statment is false";
}

// shorthand if and if..else
$x  = 13;
$y = $x<16? "hello":"good bye";
echo $y;
echo "<br>";

// Nested if and if inside if

$m  = 19;
if($m>10){
    echo "above 10";

if($a>20){
    echo "and also above 20";
}
else{
    echo "but not above 20";
}
}

// switch

$favcolor = "red";

switch($favcolor){

    case "blue":
        echo "Your fav color is blue";
        break;

        case "red":
            echo "Your fav color is red";
            break;

            default:
            echo "Your fav color is not red or blue";
}

?>