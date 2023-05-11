<?php

class Mobil{
    public $kondisi;
    public $merk;
    public $nama;
    public $warna;
    public $kecepatan;

    public function setkondisi($kondisi){
        $this->kondisi=$kondisi;
    }
    public function setmerk($merk){
        $this->merk=$merk;
    }
    public function setnama($nama){
        $this->nama=$nama;
    }
    public function setwarna($warna){
        $this->warna=$warna;
    }
    public function setkecepatan($kecepatan){
        $this->kecepatan=$kecepatan;
    }
    public function Echo(){
        echo "Kondisi Mobil ".$this->kondisi."<br>";
        echo "Merk Mobil: ".$this->merk."<br>";
        echo "Nama Mobil : ".$this->nama."<br>";
        echo "Warna Mobil : ".$this->warna."<br>";
        echo "Kecepatan Mobil : ".$this->kecepatan."<br>";
        echo "<br>===================<br>";
    }
}
$data = new Mobil;
$data->setkondisi("Maju");
$data->setmerk("Toyota");
$data->setnama("Fortuner");
$data->setwarna("Hitam");
$data->setkecepatan("250");
$data->Echo();

$file = new Mobil;
$file->setkondisi("Mundur");
$file->setmerk("Honda");
$file->setnama("Brio");
$file->setwarna("Hijau");
$file->setkecepatan("100");
$file->Echo();
