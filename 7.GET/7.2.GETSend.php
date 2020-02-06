<?php
$Mahasiswa = [
    [
        "ID" => "1",
        "Nama" => "Captain America",
        "Jurusan" => "Teknik Sains Ninja",
        "Email" => "boruto22@gmail.com",
        "Foto" => "CA.jpg"
    ],

    [
        "ID" => "2",
        "Nama" => "Hawkay",
        "Jurusan" => "Ilmu Kelautan",
        "Email" => "lufy@gmail.com",
        "Foto" => "hawkay.jpg"
    ],

    [
        "ID" => "3",
        "Nama" => "Black Widow",
        "Jurusan" => "Ilmu Magic",
        "Email" => "@gmail.com",
        "Foto" => "mrs.jpg"
    ]
];
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
</style>

<body>

    <h1>Daftar Mahasiswa</h1>
    <div class="box">
        <ul>
            <?php foreach ($Mahasiswa as $key) { ?>
                <li><a href="7.3.GETReceive.php?Foto=<?php echo $key["Foto"]; ?>&ID=<?php echo $key["ID"]; ?>&Nama=<?php echo $key["Nama"]; ?>&Jurusan=<?php echo $key["Jurusan"]; ?>&Email=<?php echo $key["Email"]; ?>">
                    <?php echo $key["Nama"]; ?></a>
                </li>
            <?php } ?>
        </ul>
    </div>


</body>

</html>