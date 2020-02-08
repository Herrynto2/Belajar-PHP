<?php
//koneksi file CRUD dengan file koneksi
require 'koneksi.php';
$select = select("SELECT * FROM datakaryawan ORDER BY ID DESC");
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

        <form action="tambah.php">
            <button type="submit">ADD</button>
        </form>
        </a>
    </div>
    <div class="data">
        <table>
            <tr>
                <th>Name</th>
                <th>Work</th>
                <th>Salary</th>
                <th>Action</th>
            </tr>

            <?php foreach ($select as $data) { ?>
                <tr>
                    <td><?php echo $data["name"]; ?></td>
                    <td><?php echo $data["work"]; ?></td>
                    <td><?php echo $data["salary"]; ?></td>
                    <td>
                        <div class="icon">
                            <a href="edit.php?id=<?php echo $data["id"] ?>"><img src="edit.png" alt=""></a>
                            <a href="hapus.php?id=<?php echo $data["id"] ?>"><img src="kotak.png" alt=""></a>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>