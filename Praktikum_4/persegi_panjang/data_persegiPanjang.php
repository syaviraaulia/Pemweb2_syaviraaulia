<?php

    require_once "class_persegiPanjang.php";

$LuasPersegi=new __persegipanjang();
echo "panjang :".$LuasPersegi->setpanjang(65);
echo "<br>";
echo "lebar :".$LuasPersegi->setLebar(20);
echo "<br>";
echo $LuasPersegi->luas();
echo "<br>";
echo $LuasPersegi->keliling();

?>