<?php
function sort_array($ary)
{
foreach($ary as $arrai)
{
    for($x = 0; $x < count($arrai); $x++)
    {
        for($y = 0; $y < count($arrai)-1; $y++)
        {
            if($arrai[$y] > $arrai[$y+1])
            {
                $temp = $arrai[$y+1];
                $arrai[$y+1] = $arrai[$y];
                $arrai[$y] = $temp;
            }
        }
    }
    echo "<pre>";
    print_r($arrai);
    echo "<pre>";
}
}

$arr = [['b','c','a','m','e','g'],['f','d','h','j','l','k','i'], ['n','m','q','o','s','r','v','u','x','t']];
sort_array($arr);
echo "<pre>";
?>