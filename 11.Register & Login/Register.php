<?php
require 'Koneksi.php';

if (isset($_POST["submit"])) {
    if (register($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil Dibuat');
              </script>";
    } else {
        echo mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>

<head>
    <title>Register</title>
</head>

<body>
    <h1>Halaman Registrasi</h1>
    <form action="" method="post">
        <label for="username">Username : </label> <input type="text" name="username" id="username" autocomplete="off" autofocus required oninvalid="this.setCustomValidity('Username masih kosong')"><br>
        <label for=" password">Password : </label> <input type="password" name="password" id="password" required><br>
        <label for="confirm">Konfirmasi Password : </label> <input type="password" name="confirm" id="confirm" required><br>
        <button type="submit" name="submit">Submit</button>
    </form>
    <a href="Login.php">Login</a>
</body>

</html>