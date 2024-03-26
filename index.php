<?php

class Manusia {
    // Properti
    public $nama;
    public $umur;

    // Metode
    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function setUmur($umur) {
        $this->umur = $umur;
    }

    public function getInfo() {
        return "Nama: " . $this->nama . ", Umur: " . $this->umur;
    }
}

// Membuat objek
$orang = new Manusia();
$orang->setNama("Isabella");
$orang->setUmur(19);
echo $orang->getInfo();  // Output: Nama: Isabella, Umur:19
