<?php
//function foo($velue)
//{
//    if($velue == 1)
//        return 1;
//    else
//        return $velue *= foo($velue - 1);;
//}


//function foo3($vel1, $vel2){
//    if($vel1 > $vel2)
//        return $vel1;
//    else
//        return $vel2;
//}
//function foo4($vel1, $vel2){
//    return $vel1 * $vel1 + $vel2 * $vel2;
//}
//function foo5($vel1){
//    if($vel1 <= 1000000)
//    {
//        echo $vel1 . '<br>';
//        foo5($vel1 * 10);
//    }
//    else
//        echo "Вы достигли предела <br>";
//
//}
//function foo6($value)
//{
//    if($value <= 5)
//    {
//        echo $arr[] = mt_rand(1,20) . "<br>";
//        foo6($value + 1);
//    }
//}
//function foo7($val1)
//{
//    for($i = 0; $i < 4; $i++)
//    {
//        $sum += $val1[$i];
//    }
//    return $sum / count($val1);
//}
//function foo8($val1)
//{
//    $arr = explode(' ', $val1);
//    return $str_count = count($arr);
//}
//function foo9($velue)
//{
//    if($velue == 0)
//        return 0;
//    if($velue == 1)
//        return 1;
//    else
//    {
//        return foo9($velue - 1) + foo9($velue - 2);
//    }
//}

//function foo10(&$arr)
//{
//    for($i = 0; $i < mt_rand(6,11); $i++)
//    {
//        $val[$i] = mt_rand(1,20);
//        echo $val[$i] . ' ';
//    }
//}

function foo11($val)
{
    for($i = strlen($val); $i >= 0; $i--)
    {
        echo mb_substr($val, $i, 1);
    }

}
function foo12($val1)
{
    $val1 .= '|';
    $i = 0;
    while($val1[$i] != '|')
    {
        $coutn++;
        $i++;
    }
    return $coutn;
}
function foo13($val1)
{
    for($i = 0; $i < foo12($val1); $i++)
    {
        echo "$val1[$i] <br>";
    }
}

//$a = 4;
//$b = 3;
//
//echo foo3($a, $b) . '<br>';
//echo foo4($a, $b) . '<br>';
//foo5(10);
//foo6(1);
//$arr = ['1', '5', '9', '14'];
//echo foo7($arr) . "<br>";
//$str = 'Создать функцию, которая принимает строку';
//echo foo8($str) . "<br>";
//for($i = 0; $i < 8;$i++)
//    echo foo9($i) . "<br>";
//$arr = 0;
//echo foo10($arr);
$str = 'HTML, CSS, PHP, BITRIX';
//echo foo11($str) . '<br>';
echo foo12($str) . '<br>';
echo foo13($str) . '<br>';
