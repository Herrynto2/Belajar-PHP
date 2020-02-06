<?php
//koneksi file CRUD dengan file koneksi
require 'Koneksi.php';
$select = select("SELECT * FROM datamahasiswa ORDER BY ID DESC");

//
if (isset($_POST["cari"])) {
    $select = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>

<head>
    <title>Document</title>
</head>

<body>
    <div class="header">
        <h1>Index</h1>
    </div>

    <div class="content">
        <a href="Insert.php"><button type="submit" name="submit">Tambah Data</button></a>

        <form action="" method="post">
            <input type="text" name="keyword" placeholder="Cari ..." size="20" autofocus>
            <button type="submit" name="cari">Cari</button>
        </form><br>

        <table border="1" cellpadding="7" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>Aksi</th>
                <th>Foto</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach ($select as $data) { ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><a href="Hapus.php?ID=<?php echo $data["ID"] ?>"> Delete </a><br>
                        <a href="Edit.php?ID=<?php echo $data["ID"] ?>"> Edit </a></td>
                    <td><img src="img/<?php echo $data["Foto"]; ?>" alt="" width="80px" height="80px"></td>
                    <td><?php echo $data["NIM"]; ?></td>
                    <td><?php echo $data["Nama"]; ?></td>
                    <td><?php echo $data["Email"]; ?></td>
                    <td><?php echo $data["Jurusan"]; ?></td>
                </tr>
                <?php $i++; ?>
            <?php } ?>

        </table>
    </div>


</body>

</html>