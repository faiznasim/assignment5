<?php
$arr = [];
$carry = 0;
$str1 = "74658908765431673485612846573865719743567891536475";
$str2 = "84657687137203846506873981723756713947485618349805";

//$str1 = "8457849";
//$str2 = "1098";

//$str1 = "12345678912345678912345678912345678912345678912345";
//$str2 = "98765432198765432198765432198765432198765432198765";

$len1 = strlen($str1);
$len2 = strlen($str2);
$len1 > $len2 ? $n = $len1-1 : $n = $len2-1;
$m = $len2 - 1;
for ($i = $n, $j=0; $i >= 0; $i--,$j++)
{
    if ($m >= 0)
        $arr[$j] = $str1[$i] + $str2[$m] + $carry;
    else
        $arr[$j] = $str1[$i] + $carry;
    if ($arr[$j] > 9)
    {
        $p = $arr[$j];
        $arr[$j] = $p % 10;
        $carry = (int)($p / 10);
    }
    else
        $carry = 0;
    $m--;
}
$arr[$j] = $carry;
var_dump(array_reverse($arr));