<!-- destructor-->
<!-- object nu kam puru thai atle last ma autometically destructor call thai che-->

<?php
class abc{
    public function __construct(){
     echo "This is construct function<br>";
    }
    public function hello(){
        echo "hi am i inside a abc class<br>";
       }
       public function __destruct(){
        echo "This is destructor function<br>";
       }
}
$test = new abc();
$test->hello();
$test->hello();
$test->hello();
$test->hello();
$test->hello();


?>
