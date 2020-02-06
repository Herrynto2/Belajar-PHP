<?php
//Cek apakah button submit sudah di tekan atau belum
if (isset($_POST["submit"])) {
    //Cekk username dan Password
    if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
        //Jika Benar Masuk ke halaman admin
        header("Location:8.2.PostAdmin.php");
        exit;
    } else {
        //Jia salah
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<style>
    .box {
        width: 300px;
        height: 250px;
        margin: 50px auto;
        border: 2px solid black;
        font-family: century gothic;
    }

    h1 {
        color: blueviolet;
    }

    .input,
    .submit {
        margin: 15px;
        margin-left: 17px;
    }

    .submit input {
        background-color: blueviolet;
        color: white;
        width: 70px;
        height: 40px;
        font-family: century gothic;
    }

    .error {
        margin-left: 20px;
        font-style: italic;
        color: red;
        font-size: 15px;
    }
</style>

<body>
    <div class="box">
        <h1 align="center"> LOGIN</h1>

        <form action="" method="post">
            <div class="input"><label for="username">Username : </label><input type="text" name="username" id="username" /></div>
            <div class="input"><label for="password">Passowrd : </label><input type="password" name="password" id="password" /></div>
            <div class="submit"><input type="submit" value="Masuk" name="submit" />
            </div>
        </form>
        <?php if (isset($error)) : ?>
            <div class="error">Username & password salah !</div>
        <?php endif; ?>
    </div>

</body>

</html>