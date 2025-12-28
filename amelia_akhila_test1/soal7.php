<?php
// ! SOAL 7 – OOP Dasar
// ? Class Mahasiswa.
class Mahasiswa
{
    // ? property
    public $nama;
    public $nim;
    public $prodi;

    // ? method
    public function perkenalan()
    {
        echo "Halo, nama saya $this->nama" . PHP_EOL;
        echo "NIM saya $this->nim" . PHP_EOL;
        echo "Saya dari prodi $this->prodi" . PHP_EOL;
    }
}
// ? membuat object dari class Mahasiswa
$mahasiswa1 = new Mahasiswa();
$mahasiswa1->nama = "Yang Mulia Ratu";
$mahasiswa1->nim = "1234567890";
$mahasiswa1->prodi = "Teknik Informatika";
$mahasiswa1->perkenalan();
?>