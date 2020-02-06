<?php
require 'Koneksi.php';

if (isset($_POST["submit"])) {
    if (login($_POST) > 0) {
        header("Location:index.php");
        exit;
    } else {
        echo "<script>
            alert('Login gagal');
        </script>";
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
        <button type="submit" name="submit">Submit</button>
    </form>

</body>

</html>