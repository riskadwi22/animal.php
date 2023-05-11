<?php
    class Sekolah {

        private $nama;

        public $alamat;

        public function tampilNama(){
            echo $this->nama = "wikrama";
        }

    }
    $sekolah1  =new Sekolah ();
    echo $sekolah1->tampilNama();
?>