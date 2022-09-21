<?php
echo"<table  align='center' style='border:2px solid black;border-collapse: collapse'>";
for($row=0;$row<=8;$row++)
{
    echo"<tr>";
    for($column=0;$column<8;$column++)
    {
        if(($row+$column)%2==0){
            echo "<td style='background-color: #050003;height:200px;width:200px'> </td>";
        }


        else{echo "<td style='background-color: #faf8fc;height:200px;width:200px'></td>";
        }
    }
    echo "</tr>";
}
echo"</table>";

