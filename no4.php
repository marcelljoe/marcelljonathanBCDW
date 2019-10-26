<?php

function hitungVoucher($c, $i)
{
    if($c=="DumbWaysAsik" && $i < 20000)
    {
        echo "Belanja lagi bos, jadi gk bisa pake voucher.";
    }elseif($c=="DumbWaysMantap" && $i < 50000)
    {
        echo "Belanja lagi bos, jadi gk bisa pake voucher.";
    }
    
if($c=="DumbWaysAsik")
{
    $disc = $i * 0.5;
    if($disc > 20000)
    {
        $disc = 20000;
    }
}
if($c=="DumbWaysMantap")
{
    $disc = $i * 0.3;
    if($disc > 40000)
    {
        $disc = 40000;
    }
}
$sisa = $i - $disc;
echo "Uang yang harus dibayar: " . $sisa;
echo "<br>Diskon: " . $disc;
echo "<br>Kembalian: " . $disc;
}


hitungVoucher("DumbWaysAsik", 20000);
?>