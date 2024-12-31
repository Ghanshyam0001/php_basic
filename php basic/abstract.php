<!-- abstract class -->
<?php

abstract class parentclass{
    public $name;

    abstract protected function cal($a,$b);

}
class childclass extends parentclass{
      
    public function cal($a,$b){
        echo $a + $b;
    }
}
$test =  new childclass();
$test->cal(10,20);
?>