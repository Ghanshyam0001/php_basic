<!-- key function -->
<!-- array_keys(),->nava array ma array ni navi key return kare che
array_key_first(),->array ni first key return kare che
array_key_last(),->array ni last key return kare che
array_exists(),->search kevvu hoy ke aa key exists kere che ke nai
key_exists()->search kevvu hoy ke aa key exists kere che ke nai return 0 and 1>

 <?php

$color =[
    "first"=>"red",
    "second"=>"green",
    "third"=>"blue",
    "fourth"=>"yellow",

];
// $new = array_keys($color);
 $new = array_key_first($color);
 $new = array_key_last($color);
 $new = array_key_exists("third",$color);




echo "<pre>";
print_r($new);
echo "</pre>";


 ?>