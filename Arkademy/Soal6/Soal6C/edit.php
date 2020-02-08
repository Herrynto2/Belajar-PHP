<?php
require 'koneksi.php';

$id = $_GET["id"];
$select = select("SELECT * FROM datakaryawan where id = $id ")[0];

if (isset($_POST["submit"])) {
    if (update($_POST) > 0) {
        echo "
        <script>
            alert('Data berhasil diubah'); 
            document.location='index.php';
        </script>";
    } else {
        echo "Edit gagal";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arkademy</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="CSSClear.css">
    <link rel="stylesheet" href="CSSReset.css">
</head>

<body>
    <div class="header">
        <img src="arkademy.png" alt="">
        <h1>ARKADEMY BOOTCAMP</h1>
        <form action="index.html">
            <button type="submit">Home</button>
        </form>
    </div>
    <div class="data2">
        <form action="" method="post">
            <h2>ADD DATA</h2>
            <ul>
                <li><input type="text" placeholder="Name ..." name="name"></li>
                <li><input type="text" placeholder="Work ..." name="work"></li>
                <li><input type="text" placeholder="Salary ..." name="salary"></li>
                <li><button name="submit">ADD</button></li>
            </ul>
        </form>
    </div>
</body>

</html>