<?php
// ! SOAL 9 – Static & Constant
// ? membuat penerapan static dan constant
class Statis
{
    // ? constant
    const NAMA = "Amelia Akhila";
    const NIM = "1234567890";
    // ? static property
    public static $prodi = "Teknik Informatika";
    // ? static method
    public static function getInfo()
    {
        return "Statis Method :" . PHP_EOL .
            "Nama: " . self::NAMA . PHP_EOL .
            "NIM: " . self::NIM . PHP_EOL .
            "Prodi: " . self::$prodi . PHP_EOL . PHP_EOL;
    }
}

// ? memanggil constant dan static method
echo Statis::getInfo();

class Constant
{
    // ? constant
    const SEKOLAH = "Bootcamp CJ";
    const ALAMAT = "Jakarta";

    // ? method untuk menampilkan constant
    public function showSchoolInfo()
    {
        return "Constant Method :" . PHP_EOL .
            "Sekolah: " . self::SEKOLAH . PHP_EOL .
            "Alamat: " . self::ALAMAT . PHP_EOL;
    }
}

// ? membuat object dari class Constant
$infoSekolah = new Constant();
echo $infoSekolah->showSchoolInfo();
?>