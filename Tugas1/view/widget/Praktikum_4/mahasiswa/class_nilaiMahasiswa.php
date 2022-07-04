<?php
    class NilaiMahasiswa {
        var $matakuliah;
        var $nilai;
        var $nim;

        function __construct($matakuliah, $nilai, $nim){
            $this->matakuliah = $matakuliah;
            $this->nilai = $nilai;
            $this->nim = $nim;
        }

        function grade($nilai){
            if ($nilai >= 80){
                return "A";
            }elseif($nilai >= 65){
                return "B";
            }elseif($nilai >= 55){
                return "C";
            }elseif($nilai >= 34){
                return "D";
            }elseif($nilai >= 0){
                return "E";
            }else{
                return "I";
            }

        }


        
        function hasil($nilai){
            if ($nilai >= 80){
                return "Sangat Memuaskan";
            }elseif($nilai >= 760){
                return "Memuaskan";
            }elseif($nilai >= 55){
                return "Cukup";
            }elseif($nilai >= 34){
                return "Kurang";
            }elseif($nilai >= 0){
                return "Sangat Kurang";
            }else{
                return "Tidak Ada";
            }
        }
    }
?>