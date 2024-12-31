<!-- Arrays -->
<?php

$cars = array("volvo","bmw","audi");
// INDEXED ARRAY

// access insexed array
echo $cars[0];
echo "<br>";

// change value

$cars[1] = "ford";
var_dump($cars);
echo "<br>";

// loop through an indexed array

foreach($cars as $x){
    echo "$x <br>";
}

// push
array_push($cars,"ford");
var_dump($cars);
echo "<br>";


// associative array

$car = array("brand"=>"ford","model"=>"mastang","year"=>"1964");
echo $car["model"];
echo "<br>";

// change value

$car["year"] = 2014;
var_dump($car);


// key value

$carm = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

foreach ($carm as $x => $y) {
  echo "$x: $y <br>";
};

// create array
$ss= array("volvo","bmw","audi");


// multi line

$ab = ["volvo","audi","jaguar"];

// array key
$ac = [0=>"volvo",1=>"audi",2=>"jaguar"];

$mycar = ["brand"=>"ford","model"=>"mastang","year" =>"1964"];

// multidimensional array

$tata = array(array("volvo",22,18),
array("volvo",22,18),
array("volvo",22,18));
echo var_dump($tata);













?>