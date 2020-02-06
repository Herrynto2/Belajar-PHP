<?php
//Cara 1
$_GET = [1, "Heri", "Axel"];
//Cara 2
$_GET = ["ID" => 1, 
        "Nama" => "Heri", 
        "Brand" => "Axel"];
//Cara 3
$_GET["ID"] = 1;
$_GET["Nama"] = "Heri";
$_GET["Brand"] = "Axel";

//Cara 4
//Ketikkan ?nama=Heri Heryanto&Brand=Axel
//Untuk menampilkan ke _GET

var_dump($_GET);

?>