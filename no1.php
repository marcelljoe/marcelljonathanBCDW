<?php

function Check($txt)
{
    $dataKey = ['dumb', 'ways', 'the', 'best'];
    $jmlKey = count($dataKey);
    for($i=0; $i<$jmlKey; $i++)
    {
    if(stristr($txt, $dataKey[$i]))
    {
        echo $dataKey[$i]." => True<br>";
    }else
    {
        echo $dataKey[$i]." =>  False<br>";
    }
    }
}


$word = 'dumbways';
Check($word);
?>