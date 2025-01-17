<!-- 
Consider the string “PHP stands for PHP : Hypertext Preprocessor” and
write a PHP script to perform the following operation –
a. Display the length of the string
b. Convert the string to all upper-case
c. Find the maximum and minimum length words with their
corresponding length
d. The array constructed in the previous question (c) construct a string
“PHP-stands-for-PHP-:-Hypertext-Preprocessor”
e. In the original string find the location of “PHP”
f. Replace “PHP” with “XYZ” 
-->

<?php
$str = "PHP stands for PHP : Hypertext Preprocessor";

$str_len = strlen($str);
echo "String Length: ".$str_len;

$str_upper = strtoupper($str);
echo "<br>"."Uppercase Is: ".$str_upper;

$arr = explode(" ", $str);
$arr_cnt = count($arr);

$str_new = str_replace(" ","-",$str);
echo "<br>"."Replacing String Is: ".$str_new;

$ind_php = strpos($str, "PHP");
echo "<br>"."PHP Word Location Is: ".$ind_php;

$rep_php = str_replace("PHP","XYZ",$str);
echo "<br>"."Replacing String Is: ".$rep_php;

?>