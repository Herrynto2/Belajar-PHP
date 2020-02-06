<?php

if (!isset($_GET["Foto"]) || 
    !isset($_GET["Nama"]) ||
    !isset($_GET["ID"]) ||
    !isset($_GET["Jurusan"]) ||
    !isset($_GET["Email"])) {
   header("Location: 7.2.GETSend.php");
   exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .box {
        border: 2px solid black;
        border-radius: 20px 0px;
        width: 200px;
        padding: 5px 0px;
        margin: 5px 20px;
        float: left;
    }

    .clear {
        clear: both;
    }
</style>

<body>

    <h1>Daftar Mahasiswa</h1>
    <div class="box">
        <ul>
            <li><img src="img/<?php echo $_GET["Foto"]; ?>" alt=""></li>
            <li><?php echo $_GET["ID"]; ?></li>
            <li><?php echo $_GET["Nama"]; ?></li>
            <li><?php echo $_GET["Jurusan"]; ?></li>
            <li><?php echo $_GET["Email"]; ?></li>
        </ul>
    </div>

    <div class="clear"></div>

    <h3><a href="7.2.GETSend.php">Back to Home</a></h3>


</body>

</html>