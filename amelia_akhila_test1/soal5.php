<?php
// ! SOAL 5 – Function
// Membuat function untuk menghitung luas persegi panjang.

// ? function hitungnya
function hitung($panjang, $lebar)
{
    echo $panjang * $lebar;
}
// ? Menghitung luas persegi panjang.
$jml_p = 10;
$jml_l = 5;
echo "Hitung luas persegi";
echo PHP_EOL;
echo "Panjang : $jml_p";
echo PHP_EOL;
echo "Lebar : $jml_l";
echo PHP_EOL;
echo "Totalnya adalah : ";
echo hitung($jml_p, $jml_l);