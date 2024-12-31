<!-- Access Modifieres -->
<!-- 3 type of access modifiers
1=>public
2=>protected
3=>private -->


<?php

// public

// class base{
//     public $name;
//     public function __construct($n){
//         $this->name = $n;
//     }
//     public function show(){
//         echo "your name :",$this->name."<br>";
//     }
// }
// $test = new base("Ghanshyam Patel");
// $test->name = "patel";
// $test->show();

// protected
// class base{
//     protected $name;
//     public function __construct($n){
//         $this->name = $n;
//     }
//     protected function show(){
//         echo "your name :",$this->name."<br>";
//     }
// }
// class derived extends base{
//     public function get(){
//         echo "your name :",$this->name."<br>";
//     }
// }
// $test = new derived("Ghanshyam Patel");
// $test->get();

// privet
class base{
    private $name;
    public function __construct($n){
        $this->name = $n;
    }
    public function show(){
        echo "your name :",$this->name."<br>";
    }
}
class derived extends base{
    public function get(){
        echo "your name :",$this->name."<br>";
    }
}
$test = new base("Ghanshyam Patel");
$test->show();

?>