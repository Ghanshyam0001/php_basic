<!-- two type of php programing patterns
 [1]=> procedural/core php,
 [2]=>object oriented-->
 <!-- use of oop 
[1]=>code more modular and reusable
[2]=>well organisad code
[3]=> Easier to debug
[4]=>best for medium to larg website projects-->

<?php

class calculation{
    public $a,$b,$c;
    function sum(){
     $this->c = $this->a + $this->b;
     return $this->c;

    }
    function sub(){
        $this->c = $this->a - $this->b;
        return $this->c;
   
       }
}
$c1 = new calculation();
$c1->a = 20;
$c1->b = 10;

$c2 = new calculation();
$c2->a = 50;
$c2->b = 30;

echo " sum is:". $c1->sum()."<br>";
echo " sub is:". $c1->sub()."<br>";

echo "sub is:". $c2->sub();

?>