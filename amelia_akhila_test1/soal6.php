<?php
// ! SOAL 6 – Modularisasi
// ?  Program BMI.
function rumusBMI($berat, $tinggi)
{
    $total = $berat / ($tinggi * $tinggi);
    if ($total < 18.5) {
        return "Kurus";
    } elseif ($total < 25) {
        return "Normal";
    } elseif ($total < 30) {
        return "Obesitas Banget bjir";
    }
}

// ? ini data inputnya
$berat = 44; // dalam kg
$tinggi = 1.5; // dalam meter

// ? cetak hasilnya
echo "Berat : $berat kg";
echo PHP_EOL;
echo "Tinggi : $tinggi cm";
echo PHP_EOL;
echo "Status BMI : " . rumusBMI($berat, $tinggi);
?>