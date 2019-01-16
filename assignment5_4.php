<?php
$n = 3;
$res = 1;
for ($i = $n; $i > 0; $i--)
{
    $res = $res * $i;
}

echo "Factorial of $n is : ".$res;