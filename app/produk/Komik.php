<?php

class Komik extends Produk implements InfoProduk
{
    public $jmlHalaman;

    public function getInfo()
    {
        $str = "{$this->judul} | {$this->getLabel()}, (Rp. {$this->getHarga()})";
        return $str;
    }

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk()
    {
        $str = "Komik : " . $this->getInfo() . " {$this->jmlHalaman} Halaman.";
        return $str;
    }
}