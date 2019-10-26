<?php

function cetak_gambar($idx)
{
    for($x=1; $x <= $idx; $x++)
    {
        for($y=1; $y <= $idx; $y++)
        {
            if($x == 1 || $x == $idx || $y == 1 || $y == $idx || $x%2 == 1 )
            {
                echo "* ";
            }else
            {
                echo "= ";
            }
        }
        echo "<br />";
    }
}
cetak_gambar(9);

?>