<?php
require '9.2.Koneksi.php';

if (isset($_POST["submit"])) {
    if (insert($_POST) > 0) {
        echo "
        <script>
            alert('Data berhasil ditambah'); 
            document.location='9.1.index.php';
        </script>";
    } else {
        echo "Insert gagal";
    }
}
?>

<!DOCTYPE html>

<head>
    <title>Insert</title>
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
        <h1>Insert Data</h1>
        <form action="" method="post">
            <label for="NIM">No. Induk :</label> <input type="text" name="NIM" id="NIM" required><br>
            <label for="Nama">Nama :</label> <input type="text" name="Nama" id="Nama" required><br>
            <label for="Jurusan">Jurusan :</label> <input type="text" name="Jurusan" id="Jurusan" required><br>
            <label for="Email">Email :</label> <input type="text" name="Email" id="Email" required><br>
            <label for="Foto">Foto :</label> <input type="text" name="Foto" id="Foto" required><br>
            <button type="submit" name="submit">Submit</button>
        </form>
        <h3><a href="9.1.index.php">Back To Home ...</a></h3>
    </div>

</body>

</html>