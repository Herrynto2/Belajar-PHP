<?php
require '9.2.Koneksi.php';

$id = $_GET["ID"];
$select = select("SELECT * FROM datamahasiswa where ID = $id ")[0];

if (isset($_POST["submit"])) {
    if (update($_POST) > 0) {
        echo "
        <script>
            alert('Data berhasil diubah'); 
            document.location='9.1.index.php';
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
        <form action="" method="post">
            <input type="hidden" name="ID" value="<?php echo $select["ID"]; ?>">
            <label for="NIM">No. Induk :</label> <input type="text" name="NIM" id="NIM" required value="<?php echo $select["NIM"] ?>"><br>
            <label for="Nama">Nama :</label> <input type="text" name="Nama" id="Nama" required value="<?php echo $select["Nama"] ?>"><br>
            <label for="Jurusan">Jurusan :</label> <input type="text" name="Jurusan" id="Jurusan" required value="<?php echo $select["Jurusan"] ?>"><br>
            <label for="Email">Email :</label> <input type="text" name="Email" id="Email" required value="<?php echo $select["Email"] ?>"><br>
            <label for="Foto">Foto :</label> <input type="text" name="Foto" id="Foto" required value="<?php echo $select["Foto"] ?>"><br>
            <button type="submit" name="submit">Submit</button>
        </form>
        <h3><a href="9.1.index.php">Back To Home ...</a></h3>
    </div>

</body>

</html>