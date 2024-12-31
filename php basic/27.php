<!-- Filter validation -->
<?php
// integer
// $var = 45;
// var_dump(filter_var($var,FILTER_VALIDATE_INT));
// $option = array(
//     "options" => array(
//         "main_range"=>20,
//         "max_range"=>30)
//     );
// if((filter_var($var,FILTER_VALIDATE_INT,$option))){
//     echo "<br>$var is integer";

// }
// else{
//     echo "<br>$var is not integer";
// }

// // float
// $var = 45.4;
// var_dump(filter_var($var,FILTER_VALIDATE_FLOAT));

// if((filter_var($var,FILTER_VALIDATE_FLOAT))){
//     echo "<br>$var is FLOAT";

// }
// else{
//     echo "<br>$var is not FLOAT";
    
// }

// boolean
// $var = 45.4;
// var_dump(filter_var($var,FILTER_VALIDATE_BOOLEAN,FILTER_NULL_ON_FAILURE));

// if((filter_var($var,FILTER_VALIDATE_BOOLEAN))){
//     echo "<br>$var is boolean";

// }
// else{
//     echo "<br>$var is not boolean";
    
// }

// Email
// $var = "ghan@email.com";
// var_dump(filter_var($var,FILTER_VALIDATE_EMAIL));

// if((filter_var($var,FILTER_VALIDATE_EMAIL))){
//     echo "<br>$var is email";

// }
// else{
//     echo "<br>$var is not email";
    
// }


// URL
// $var = "https://www.ghanshyam.net?a=1";
// // var_dump(filter_var($var,FILTER_VALIDATE_URL,FILTER_FLAG_PATH_REQUIRED));

// if((filter_var($var,FILTER_VALIDATE_URL,FILTER_FLAG_QUERY_REQUIRED))){
//     echo "<br>$var is url";

// }
// else{
//     echo "<br>$var is not url";
    
// }

// IP
// $var = "192.168.1.0";
// // var_dump(filter_var($var,FILTER_VALIDATE_IP));

// if((filter_var($var,FILTER_VALIDATE_IP))){
//     echo "<br>$var is valid  ip";

// }
// else{
//     echo "<br>$var is not valid ip";
    
// }
// MAC
$var = "FA-F9-DD-B2-SE-0D";
var_dump(filter_var($var,FILTER_VALIDATE_MAC));

if((filter_var($var,FILTER_VALIDATE_MAC))){
    echo "<br>$var is valid  mac";

}
else{
    echo "<br>$var is not valid mac";
    
}
?>