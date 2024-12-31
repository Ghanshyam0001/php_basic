<!-- inheritance  -->
<!-- class b use class a properties -->
<!-- class a is base class and class b is derived class -->
<?php

class employee{
    public $name;
    public $age;
    public $salary;
     function __construct($n,$a,$s){
       $this->name = $n;
       $this->age = $a;
       $this->salary = $s;
     }
  
     function info(){
        echo "<h3>Manager profile</h3>";
        echo "Name is :".$this->name."<br>"."Age is". $this->age."<br>"."Salary is".$this->salary."<br>";
     }
}
class manager extends employee{
    public $ta = 1000;
    public $phone  = 300;
    public $totalsalary;
    function info(){
        $this->totalsalary = $this->ta + $this->phone +$this->salary;
        echo "<h3>Employee profile</h3>";
        echo "Name is :".$this->name."<br>"."Age is". $this->age."<br>"."Salary is".$this->totalsalary."<br>";
     }
}
$e1 = new manager("ram",25,20000);
$e2 = new employee("krishna",33,2000);

$e1 ->info();
$e2->info();
?>