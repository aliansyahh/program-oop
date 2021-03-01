<?php 

class Game extends Produk implements InfoProduk
{
    public $wktMain;

    public function getInfo()
    {
        $str = "{$this->judul} | {$this->getLabel()}, (Rp. {$this->getHarga()})";
        return $str;
    }

    public function __construct($judul, $penulis, $penerbit, $harga, $wktMain)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->wktMain = $wktMain;
    }

    public function getInfoProduk()
    {
        $str = "Game : " . $this->getInfo() . " {$this->wktMain} Jam.";
        return $str;
    }
}