<!-- local,global and $GLOBALS use  -->

<?php

echo "welcome to scope and local/global vars and in  php<br>";
$a = 64; //global variable
$b = 7;

function printvalue(){
  //  $a = 97;//local variable
  global $a,$b;//giave me the access to this global variable
  $a  =100;
  $b = 155;
 echo "the value of tha your varriable is $a and b is $b";
}

echo $a;
echo "the value of tha your varriable is $a and b is $b";
echo "<br>";
echo var_dump($GLOBALS["a"]);
echo var_dump($GLOBALS["b"]);
printvalue();
?>