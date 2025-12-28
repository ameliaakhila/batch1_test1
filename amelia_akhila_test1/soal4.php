<?php
// ! SOAL 4 – Nested Loop
// ?Membuat pola bintang.
for ($b = 5; $b >= 1; $b--) {
    for ($d = 1; $d <= $b; $d++) {
        // ? cetak pola bintang setelah di loop
        echo "*";
    }
    echo PHP_EOL;
}

?>