<?php
$fruit  =['orange','banana','apple','graps'];

array_shift($fruit);
array_unshift($fruit,"mango");
echo "<pre>";
print_r($fruit);
echo "</pre>";
?>