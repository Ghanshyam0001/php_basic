<!-- count(),sizeof() -->
<!-- return array size  same work  -->
<?php

$food = array('orange','banana','apple','graps');
echo count($food);
// return 4
// echo sizeof($food);
// return 4

$food1 =  array(
    'fruit'=>array('orange','banana','apple','graps'),
    'fruit1'=>array('orange','banana','apple','graps')

);
echo sizeof($food1);
echo count($food1);
// return 2

// maltidimantional arrays ni sachi value janva mate sizeof,count ma 2 value aave che 0 and 1 but 0 is bydefault
echo count($food1,1);
echo count($food1['fruit'],1);
echo "<pre>";
print_r(array_count_values($food));

 echo "</pre>";






?>