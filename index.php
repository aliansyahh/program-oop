<?php
require_once "app/init.php";

// $produk1 = new Game("Mobile Legend", "Moonton", "Playstore", 2000, 2);
// $produk2 = new Komik("Naruto", "Mashasi", "Shanon Jump", 4000, 100);
// $produk1->setDiskon(100);
// // echo $produk1->getInfoProduk();
// // echo "<hr>";
// // echo $produk2->getInfoProduk();
// $cetak = new CetakInfoProduk();
// $cetak->tambahproduk($produk1);
// $cetak->tambahproduk($produk2);
// echo $cetak->cetak();

// use app\produk\Test;

// new Test();
// echo "<hr>";

// use  app\service\Test as asw;

// new asw;

class contoh
{
    const ANGKA = 1;
    public function halo()
    {
        echo "Halo " . self::ANGKA . "<br>";
    }
}

$contoh = new contoh;
$contoh->halo();