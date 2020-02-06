<?php
$Mahasiswa = [
    ["1", "Heri Heryanto", "Teknik Komputer", "Herryheryanto22@gmail.com"],
    ["2", "Michael Angelo", "Teknik Perninjaan", "michaelangelo22@gmail.com"],
    ["3", "Monkey Lufy", "Ilmu Kelautan", "lufy@gmail.com"],
    ["4", "Asta", "Ilmu Magic", "lufy@gmail.com"]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
    <style>
        .tabel {
            border: 2px solid black;
            text-align: center;
        }

        th {
            background-color: salmon;
            color: white;
            padding: 5px;
        }

        td {
            padding: 2px 20px;
        }
    </style>
</head>

<body>
    <table class="tabel">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Mayor</th>
            <th>Email</th>
        </tr>
        <?php foreach ($Mahasiswa as $submhs) { ?>
            <tr>
                <td><?php echo $submhs[0]; ?></td>
                <td><?php echo $submhs[1]; ?></td>
                <td><?php echo $submhs[2]; ?></td>
                <td><?php echo $submhs[3]; ?></td>
            </tr>
        <?php } ?>
    </table>
    <br>
    <table class="tabel">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Mayor</th>
            <th>Email</th>
        </tr>
        <?php foreach ($Mahasiswa as $submhs) { ?>
            <tr>
                <?php foreach ($submhs as $child) { ?>
                    <td><?php echo $child; ?></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
</body>

</html>