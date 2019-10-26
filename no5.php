<?php
function generate($n)
{
    $chars = [1,2,3,4,5,6,7,8,9,0,'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
    $code = '';
    $max = count($chars)-1;
    for($x = 0; $x < $n; $x++)
    {
        for($y = 0; $y < 16; $y++)
        {
            $code .= (!($y % 4) && $y ? '-' : '').$chars[rand(0, $max)]; 
        }   
    }
    $codes = str_split($code, 19);
    echo "<pre>";
    print_r($codes);
    echo "</pre>";
}
generate(5);
?>