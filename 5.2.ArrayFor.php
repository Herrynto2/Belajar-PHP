<?php
$Angka = [21, 22, 90, 100, 50, "Haii"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
    <style>
        .box {
            background-color: salmon;
            width: 100px;
            height: 100px;
            line-height: 100px;
            color: white;
            text-align: center;
            float: left;
            margin: 5px;
            transition: 1s;
        }

        .box:hover {
            transform: rotate(360deg);
            border-radius: 50px;
            background-color: green;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>
    <?php for ($i = 0; $i < 5; $i++) { ?>
        <div class="box"><?php echo $Angka[$i]; ?></div>
    <?php  } ?>

    <div class="clear"></div>
    <!-- Fungsi count() Untuk melakukan perhitungan otomatis -->
    <?php for ($i = 0; $i < count($Angka); $i++) { ?>
        <div class="box"><?php echo $Angka[$i]; ?></div>
    <?php  } ?>

    <div class="clear"></div>

    <?php foreach ($Angka as $satu) { ?>
        <div class="box"><?php echo $satu; ?></div>
    <?php } ?>
</body>

</html>