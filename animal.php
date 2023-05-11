<?php
    class Hewan{
        public $nama;
        public $habitat;
        private $bobot;
    
    public function setNama($nama){
       echo"Nama hewannya adalah ".$this->$nama=$nama;
    }
    public function setHabitat($habitat){
       echo"habitatnya adalah di ".$this->$habitat=$habitat;
    }
    public function setbobot($bobot){
        echo "bobotnya adalah ".$this->$bobot = $bobot;
    }
}
    $hewan = new Hewan();
    $hewan->setNama("gajah");
    echo "<br>";
    $hewan->setbobot("100kg");    
    echo "<br>";
    $hewan->setHabitat("sabana");
    
?>