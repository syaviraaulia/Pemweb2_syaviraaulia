<?php
 class Mahasiswa {
   var $ipk, $nama, $nim, $prodi, $thn_angkatan;
   function __construct($ipk, $nama, $nim, $prodi, $thn_angkatan){
    $this->ipk = $ipk;
    $this->nama = $nama;
    $this->nim =$nim;
    $this->prodi = $prodi;
    $this->thn_angkatan = $thn_angkatan;
  }


  
    function predikat_ipk(){
        if ($this->ipk <2.0) 
          return "Cukup";
        elseif ($this->ipk >=2.0 && $this->ipk <3.0)
          return  "Baik";
        elseif ($this->ipk >= 3.0 && $this->ipk < 3.75)
          return   "Memuaskan";
        elseif ($this->ipk >= 3.75 && $this->ipk <= 4)
          return  "Cum Laudre";
      }
    }

?>