<?php
function hitungKembalian($total, $input)
{
    $x5 = 0;
    $x2 = 0;
    $x1 = 0;
    $x05 = 0;
    $cb = 0;
    if($total > 200000)
    {
        $cb = $total * 0.1;
    }
    $totalsd = $total - $cb;
    $sisa = $input - $totalsd;
    if($sisa >= 50000){
    for($x = 0; $sisa >= 50000; $x++)
        {
            $x5++;
            $sisa= $sisa - 50000;
        }
    echo $x5 . " x 50000<br>";
    }
    if($sisa >= 20000){
    for($y = 0; $sisa >=20000; $y++)
        {
            $x2++;
            $sisa = $sisa - 20000;
        }
        echo $x2 . " x 20000<br>";
    }
    if($sisa >= 10000){
        for($z = 0; $sisa >=10000; $z++)
            {
                $x1++;
                $sisa = $sisa - 10000;
            }
            echo $x1 . " x 10000<br>";
        }
        if($sisa >= 5000){
    for($c = 0; $sisa >=5000; $c++)
        {
            $x05++;
            $sisa = $sisa - 5000;
        }
        echo $x05 . " x 5000<br>";
    }
    if($sisa < 5000){
        echo "Rp. " . $sisa . " disumbangkan.<br>";
        }
}
$jml = 210000;
$inp = 300000;

hitungKembalian($jml, $inp);
?>