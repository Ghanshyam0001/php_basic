<?php
require 'm1.php';
require 'm2.php';
function wow(){
    echo "This function is in index file"."<br>";
}

use pro\v1\command as cmd;
$obj = new cmd\product();

// pro\wow();
$obj1 = new cmd\product();




?>