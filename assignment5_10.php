<?php
$a = array(
	Array( 2, 9, 6, 8, 4),
	Array( 4, 3, 8, 11, 38),
	Array( 38, 0, -84, 4)
);

$n = -84;
$flag = 0;
$p = sizeof($a);
$row=0;
$column=0;

for ($i = 0; $i < $p; $i++)
{
    $q = sizeof($a[$i]);
    for ($j = 0; $j < $q; $j++)
    {
        if ($a[$i][$j] == $n)
        {
            $row = $i + 1;
            $column = $j + 1;
            $flag = 1;
            break;
        }
    }
    if ($flag == 1)
        break;
}
if ($flag == 0)
    echo "Element not found<br/>";
else
    echo "Row : ".$row."\t Column : ".$column;