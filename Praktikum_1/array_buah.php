<?php
    $nama_buah = ["apel", "belimbing", "ceri", "durian"];
    $nilai_siswa = ["nim "=>"0110121142", "uts "=>90, "uas "=>90, "tugas "=>100];
    foreach ($nama_buah as $buah){
        echo $buah . "<br>";
    }
    foreach ($nilai_siswa as $nilai => $value){
        echo $nilai . $value . "<br>";
    }
?>