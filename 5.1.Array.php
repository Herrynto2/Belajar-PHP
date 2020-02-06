<?php
$Hari = ["Senin","Selasa","Rabu"];
$Bulan = ["Januari","February","March","April"];
$Hari[] = "Kamis";  //untuk menambahkan key baru
$Tanggal = [[1,2,3],[4,5,6],[7,8,9]];

var_dump($Hari);
echo "<br><br>";    
print_r($Bulan);
echo "<br><br>";
echo $Hari[2];
echo "<br><br>";
echo $Tanggal[1][2];
?>