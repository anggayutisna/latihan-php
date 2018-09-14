<?php
$hari = 50000;
$makanan = 25000;
$minuman = 10000;
$hasil = $hari - $makanan - $minuman;
$belanja = $makanan + $minuman;

echo "Hari mempunyai uang sebesar : $hari <br>";
echo "Hari membelanjakan uang nya untuk membeli <br>";
echo "Makanan : $makanan <br> 
      Minuman : $minuman  <br>";
echo "Hari membelanjakan uangnya sebesar : $belanja <br>";

if ($hasil >= 0){
    echo "Sisa uang harry : $hasil <br> <h2> Hari hemat uang <h2>";
} else
    echo "Sisa uang harry : $hasil <br> <h2> Hari boros uang <h2>";