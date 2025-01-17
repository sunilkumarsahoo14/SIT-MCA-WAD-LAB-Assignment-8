<!-- 
Construct a numeric array with a minimum of 10 numbers and perform
the following operation – (Use loops only to perform any display operation of the array)
a. Find the number of elements present in the array
b. Find the largest and smallest number
c. Reverse the array and display it
d. Sort the array and display it
e. Sort the array in reverse order and display it.
f. Search if 10 is present in the array or not. If present display the
index.
-->

<?php
$arr = array(3,5,1,8,12,9,4,11,0,6);
$arr_cnt = count($arr);
echo "<br>"."No of element present in the array is: ".$arr_cnt;
echo "<br>"."Largest Element In The Array Is:" .max($arr);
echo "<br>"."Largest Element In The Array Is:" .min($arr);
echo "<br>"."Array Element In Reverse Order: ";
$arr_rev = array_reverse($arr);

for($i = 0; $i < $arr_cnt; $i++){
    echo $arr_rev[$i]." ";
}

echo "<br>"."Array Element In Sorted Order: ";
sort($arr);
for($i = 0; $i < $arr_cnt; $i++){
    echo $arr[$i]." ";
}

echo "<br>"."Array Element In Reverse Sorted Order: ";
rsort($arr);
for($i = 0; $i < $arr_cnt; $i++){
    echo $arr[$i]." ";
}
?>