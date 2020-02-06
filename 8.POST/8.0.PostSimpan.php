<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>

<body>
    <div class="box">
        <?php if (isset($_POST["submit"])) { ?>
        <h1> Selamat Datang <?php echo $_POST["username"]; ?></h1>
        <?php  } ?>
        <form action="8.0.PostSimpan.php" method="post">
            <div><label for="username">Username : </label><input type="text" name="username" id="username" /></div>
            <div><input type="submit" value="Masuk" name="submit" />
            </div>
        </form>
    </div>

</body>

</html>