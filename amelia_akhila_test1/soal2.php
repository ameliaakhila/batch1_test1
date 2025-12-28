<?php
// ! SOAL 2 – Percabangan
// Menentukan grade nilai.

// ? menentukan grade nilai
$nilai = 90;
$grade = "";
$status = "";
// ? logikanya
if ($nilai >= 90) {
    $grade = "A";
    if ($nilai >= 95 && $nilai <= 100) {
        $grade = "A+";
        $status = "Wah kamu pinter bingut gils dapet nilai {$grade}";
    } else {
        $status = "Selamat nilai kamu {$grade}";
    }
} elseif ($nilai >= 80) {
    $grade = "B";
    if ($nilai >= 85 && $nilai >= 89) {
        $grade = "B+";
        $status = "Nilai kamu {$grade}";
    }
} elseif ($nilai >= 70) {
    $grade = "C";
    $status = "Nilai kamu {$grade}";
} else {
    $grade = "C";
    $status = "Belajar yang semanngat lagi ya";
}

// ? cetak nilainya
echo "Nilai kamu : $nilai" . PHP_EOL;
echo "Grade : $grade" . PHP_EOL;
echo "Keterangan : $status" . PHP_EOL;
