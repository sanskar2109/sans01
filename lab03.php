<?php
$data_one=[1,2,3,6,8,9];
$new_data=range($data_one[0],max($data_one));
print_r(array_diff($new_data,$data_one));
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<table align='center' style='border: 3px solid red; align='center' border=1<br>";

for($row = 2; $row<=10; $row++) {
    echo "<tr>";
    for($col = 1; $col <= 10; $col++) {
        echo "<td align='center' height='20px'>".$row." * ".$col." = ".$row*$col."</td>";
    }
    echo "</tr>";
}

echo "</table>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<table align='center' style='border: 3px solid red; align='center' border=1<br>";
for($row = 2; $row<=10; $row++) {
    echo "<tr>";
    for($col = 1; $col <= 10; $col++) {
        echo "<td align='center' height='20px'>".$row." * ".$col." = ".$row*$col."</td>";
    }
    echo "</tr>";
}
