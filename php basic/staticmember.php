<?php

class base
{
    public static $name = "Ghanshyam Patel";
    public static function show(){
        echo self::$name;
    }


}

class derived extends base
{
    public static function show()
    {
        echo parent::$name;
    }
}
$test = new base();
$test2 = new derived();
$test2->show();
$test->show();


// echo base::$name;
// echo "<br>";
// base::show();
