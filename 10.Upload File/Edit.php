<?php
require 'Koneksi.php';

$id = $_GET["ID"];
$select = select("SELECT * FROM datamahasiswa where ID = $id ")[0];

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

<head>
    <title>Edit</title>
</head>
<style>
    .insert {
        margin: 100px auto;
        padding: 20px;
        width: 400px;
        border: 2px solid black;
        border-radius: 10px;
    }

    label {
        padding: 3px;
    }

    input,
    button {
        margin: 4px 10px;
        padding: 3px;
    }
</style>

<body>
    <div class="insert">
        <h1>Update Data</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="ID" value="<?php echo $select["ID"]; ?>">
            <input type="hidden" name="FotoLama" value="<?php echo $select["Foto"]; ?>">
            <label for="NIM">No. Induk :</label> <input type="text" name="NIM" id="NIM" required value="<?php echo $select["NIM"] ?>"><br>
            <label for="Nama">Nama :</label> <input type="text" name="Nama" id="Nama" required value="<?php echo $select["Nama"] ?>"><br>
            <label for="Jurusan">Jurusan :</label> <input type="text" name="Jurusan" id="Jurusan" required value="<?php echo $select["Jurusan"] ?>"><br>
            <label for="Email">Email :</label> <input type="text" name="Email" id="Email" required value="<?php echo $select["Email"] ?>"><br>
            <label for="Foto">Foto :</label> <br>
            <img src="img/<?php echo $select["Foto"]; ?>" width="70px" height="50px"><br>
            <input type="file" name="Foto" id="Foto"><br>

            <button type="submit" name="submit">Submit</button>
        </form>
        <h3><a href="index.php">Back To Home ...</a></h3>
    </div>

</body>

</html>