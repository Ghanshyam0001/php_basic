<!-- in_array(),arry_search() -->
<!-- in array return 1/0
search return index/key -->
<?php
$food = array('orange','banana','apple','55','graps');
// array ma 55 string che and in_array ma integer value che to cant find batavse ana mate 3 parameter true pass karvu pade
if(in_array(55,$food,true)){
    echo 'find successfully';
}
else{
    echo 'cant find';
}

$a = array(array('p','h'),array('p','r'),'o');
if(in_array(array('p','h'),$a,true)){
    echo 'find successfully'.'</br>';
}
else{
    echo 'cant find';
}

$food1 = array('orange','banana','apple','55','graps');
echo array_search('apple',$food1);







?>