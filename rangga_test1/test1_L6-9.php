<?php

//6. program BMI
$berat = 70;
$tinggi = 1.75; 
function hitungBMI($berat, $tinggi) {
    return $berat / ($tinggi * $tinggi);
}

function kategoriBMI($bmi) {
    if ($bmi < 18.5) return "Kurus";
    if ($bmi < 24.9) return "Normal";
    if ($bmi < 29.9) return "Gemuk";
    return "Obesitas";
}

function hasilBMI($berat, $tinggi) {
    $bmi = hitungBMI($berat, $tinggi);  
    echo "berat badan = " . $berat . PHP_EOL;
    echo "Kategori = " . kategoriBMI($bmi) . PHP_EOL;
}



?>