<?php
$file = fopen("readme.txt","r");
if(is_file("readme.txt")){
    echo "yes"."<br>";
}else{
    echo "no"."<br>";
}
if(is_dir("readme.txt")){
    echo "yes"."<br>";
}else{
    echo "no"."<br>";
}
if(is_writable("readme.txt")){
    echo "yes"."<br>";
}else{
    echo "no"."<br>";
}
if(is_readable("readme.txt")){
    echo "yes"."<br>";
}else{
    echo "no"."<br>";
}
if(is_executable("readme.txt")){//.exe file as exetubale 
    echo "yes"."<br>";
}else{
    echo "no"."<br>";
}

?>