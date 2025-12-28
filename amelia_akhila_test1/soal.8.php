<?php
// ! SOAL 8 – Inheritance
// ? Override hitungGaji.
class Pegawai
{
    public $nama;
    public $gajiPokok;

    public function __construct($nama, $gajiPokok)
    {
        $this->nama = $nama;
        $this->gajiPokok = $gajiPokok;
    }

    public function hitungGaji()
    {
        return $this->gajiPokok;
    }
}
class Manager extends Pegawai
{
    public $tunjangan;
    public function __construct($nama, $gajiPokok, $tunjangan)
    {
        parent::__construct($nama, $gajiPokok);
        $this->tunjangan = $tunjangan;
    }

    public function hitungGaji()
    {
        return $this->gajiPokok + $this->tunjangan;
    }
}

class Admin extends Pegawai
{
    public $bonus;
    public function __construct($nama, $gajiPokok, $bonus)
    {
        parent::__construct($nama, $gajiPokok);
        $this->bonus = $bonus;
    }
    public function hitungGaji()
    {
        return $this->gajiPokok + $this->bonus;
    }
}

$pegawai1 = new Manager("Amelia Akhila", 5000000, 1000000);
echo "Nama Manager : " . $pegawai1->nama . PHP_EOL;
echo "Gaji Manager : " . $pegawai1->hitungGaji() . PHP_EOL;
$pegawai2 = new Admin("Annezetya", 3000000, 500000);
echo "Nama Admin : " . $pegawai2->nama . PHP_EOL;
echo "Gaji Admin : " . $pegawai2->hitungGaji() . PHP_EOL;
?>