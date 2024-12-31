<!-- array:Traverding
next
prev
end
each
pos
current
key
reset -->
<?php

$food = array('orange','banana','apple','graps');

echo current($food)."</br>";
echo prev($food)."</br>";
echo end($food)."</br>";
echo "<pre>";
print_r(each($food));
echo "</pre>"."</br>";
echo pos($food)."</br>";
echo key($food)."</br>";
echo reset($food)."</br>";



?>