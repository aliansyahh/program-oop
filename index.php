<?php

class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga;

    public function __construct($judul, $penulis, $penerbit, $harga)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel()
    {
        return "{$this->penulis}, {$this->penerbit}";
    }

    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->getLabel()}, (Rp. {$this->harga})";
        return $str;
    }
}

class Game extends Produk
{
    public $wktMain;

    public function __construct($judul, $penulis, $penerbit, $harga, $wktMain)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->wktMain = $wktMain;
    }

    public function getInfoProduk()
    {
        $str = "Game : " . parent::getInfoProduk() . " {$this->wktMain} Jam.";
        return $str;
    }
}

class CetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()}, (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Game("Mobile Legend", "Moonton", "Playstore", 2000, 2);
echo $produk1->getInfoProduk();