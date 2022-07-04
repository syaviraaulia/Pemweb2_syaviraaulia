<?php

class Dispenser {
    protected $volume;
    protected $hargaSegelas;
    private $volumeGelas = 250;
    public $namaMinuman;

    public function isi ($vol){
        $this->volume = $vol;
    }

    public function hargaSegelas ($harga){
        $this->hargaSegelas = $harga;
    }
    
    public function namaMinuman ($nama) {
        $this->namaMinuman = $nama;
    }

    public function beli() {
        $this->volume -= $this->volumeGelas;
        if ($this->volume >= 0) {
            echo "Selamat menikmati minuman $this->namaMinuman <br>";
        } else {
        echo "Maaf, minuman $this->namaMinuman sudah habis terjual <br>";
        }
    }
}

$jusJeruk = new Dispenser();
$jusJeruk ->isi(1000);
$jusJeruk->hargaSegelas(5000);
$jusJeruk->namaMinuman = "Jus Jeruk Al";

$jusJeruk->beli();
?>