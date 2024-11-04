<?php
$pemasukan="50000000";
$hutangA="16500000";
$bungahutangA=0.05*$hutangA;
$hutangB="9500000";
$bungahutangB=0.045*$hutangB;

// berapa sisa uang //
$bungatotal=$bungahutangA+$bungahutangB;

// total hutang //
$totalhutang=$hutangA+$hutangB+$bungatotal;

// sisa uang //
$sisauang=$totalhutang-$pemasukan;

echo "jumlah bunga total Rp." . number_format($bungatotal,0,',',',')."<br>";
echo "jumlah total hutang Rp." . number_format($totalhutang,0,',',',')."<br>";
echo "jumlah sisa uang Rp." . number_format($sisauang,0,',',',')."<br>";
?>