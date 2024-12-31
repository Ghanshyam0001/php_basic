<!-- php regular expression -->
<?php
// using preg_match()
$str = "visit w3school";
$pattern = "/w3school/i";
echo preg_match($pattern,$str);
echo "<br>";

// using preg_match_all()
$strr = "The rain in spain falls main on the main";
$patternn = "/ain/i";
echo preg_match_all($patternn,$strr);
echo "<br>";

// using preg_replace()
$strrr = "visit microsoft";
$patternnn = "/microsoft/i";
echo preg_replace($patternnn,"w3school",$strrr);
echo "<br>";

?>