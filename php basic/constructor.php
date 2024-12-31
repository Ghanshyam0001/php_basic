<?php

class person{
    // public $name,$age;
    public $name = "No Name";
    public $age = "0";//we can set default value

    function __construct($n = "No Name",$a = 0){
        $this->name = $n;
        $this->age = $a;

    }

    function show(){
        echo $this->name."-".$this->age."<br>";
    }
}
$p1 = new person();
$p2 = new person("rohan",21);
$p3 = new person("Hiren",20);


$p1->show();
$p2->show();
$p3->show();


?>