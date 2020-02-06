<?php
// echo "HERI HERYANTO";
// print "HERI HERYANTO";
// var_dump("HERI HERYANTO");
// echo true;
// Variable
// tidak boleh diawali dengan angka tapi, boleh mengandung angka
//$nama = "HER HERYANTO";

// operator aritmatika
// $x = 10;
// $y = 100;
// echo $x * $y;

// Membuat enter
// echo "<br><br>";

// penggabungan string
// $a = "AXEL";
// $b = "Official";
// echo $a . " " . $b;

// operator assignment
// $hasil = 2;
// $hasil -= 5;
// echo $hasil;
// $nama = "<b>Heri</b>";
// $nama .=" ";
// $nama .="Yanto";
// echo $nama;

// Operator perbandingan
// $nilai = 2;
// var_dump($nilai > 4 && $nilai == 2);
?>
<?php
$nama = "HERI";
$nama .= " YANTO";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>SELMAT DATANG <?php echo $nama; ?></h1>
    <div> <?php echo "Di Channel Gua"; ?>   </div>
    <?php echo "<h1> wkwkwkwk </h1>"; ?>
    <?php var_dump($nama == "HERI YANTO"); ?>
  </body>
</html>