<?php
 $file = fopen("readme.txt","r");//r == only red
// //  echo fread($file,10)."<br>"; //fread jetla carcter joia atle aape che 
// //  echo fread($file,filesize("readme.txt"))."<br>";//aakhi file read thase

//  echo fgets($file)."<br>"; // read only first line
//  echo ftell($file);//return cursior position
 echo fgets($file)."<br>";
 echo ftell($file);//return cursior position
 echo fpassthru($file);//jya cursior hase thyathi last subhi contain print kari dese and size pan aapse
// fseek($file,15);//edit cursior position
// echo fgets($file)."<br>";

// rewind($file); //cursion staarting position par jay che
// echo fgets($file)."<br>";

// feof() -  > file end of file,1-1 line print karse
// echo "<ul>";
// while(!feof($file)){
//     $line = fgets($file);
//     echo "<li>".$line."</li>"."<br>";
// }
// echo "</ul>";

// echo fgetc($file);// ak j caracter return kare che

// echo "<pre>";
// print_r(file("readme.txt"));//file bathi line return kare che
// echo "</pre>";






?>