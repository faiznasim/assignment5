<?php
$n = 100;
for ($p = 2; $p <= $n; $p++)
{
    $b = $p / 2;
    $k = (int)$b;
    $flag = 0;
    for ($i = 2; $i <= $k; $i++)
    {
        if ($p % $i == 0)
        {
            $flag = 1;
            break;
        }

    }
    if ($flag == 0)
        echo $p."<br/>";
}
