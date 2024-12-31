<!-- Constant -->
<!-- constant are like variable,execept that once they are defined they cannot be changed or undefined -->

<?php
define ("greeting","gkpatel");
echo greeting;

// magic constant
// __class__
// if used inside a class the class name is returned

class Fruits {
    public function myValue(){
      return __CLASS__;
    }  
  }
  $kiwi = new Fruits();
  echo $kiwi->myValue();
  echo "<br>";

//   __DIR__
// the directory of the file
echo __DIR__;
echo "<br>";

// __file__
// THe file name including the full path
echo __file__;
echo "<br>";

// __function__
// if inside the function function name returned

function myv(){
return __FUNCTION__;
}
echo myv();
echo "<br>";

// __LINE__
// thecurrent line number
echo __LINE__;
echo "<br>";    


// __METHOD__
// if used inside a function that belongs to a class both class and function name is returned

class apple {
    public function myVa(){
      return __METHOD__;
    }
  }
  $kiwi = new apple();
  echo $kiwi->myVa();
  echo "<br>";

//   __namespace__
// if used inside a namespace the name of the namespace is returned
namespace myArea;

function myV(){
  return __NAMESPACE__;
}

echo myV();
?>