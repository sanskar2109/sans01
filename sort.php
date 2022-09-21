<?php
$array=[10,20,30,40,80,50];
$array1=["sanskar"=>85,"tushar"=>56,"aman"=>45];
sort($array);//ascending
print_r($array);
echo "<br>";
rsort($array);//descending
print_r($array);
echo "<br>";
ksort($array);
print_r($array);
echo "<br>";
krsort($array);
print_r($array);
echo "<br>";
asort($arrry1);
print_r($array1);
echo "<br>";
natsort($arrry);//arrange according to ascii value
print_r($array);
echo "<br>";
natcasesort($arrry);//sort an array using natural order it is case sensitive
print_r($array);

?>