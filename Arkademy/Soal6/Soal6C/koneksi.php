<?php
$conn = mysqli_connect("localhost", "root", "", "arkademi");

//Select
function select($query)
{
    //Agar $conn bisa dipake di scope function
    global $conn;
    //Siapkan table
    $table = mysqli_query($conn, $query);
    //Siapkan kotak untuk ambil data di table
    $rows = [];
    //Proses pengambilan data satuan $row ke dalam kotak $rows
    while ($row = mysqli_fetch_assoc($table)) {
        $rows[] = $row;
    }
    //Kembalikan kotak yang sudah dipakai
    return $rows;
}


function insert($data)
{
    global $conn;

    $name = htmlspecialchars($data["name"]);
    $work = htmlspecialchars($data["work"]);
    $salary = htmlspecialchars($data["salary"]);

    $insert = "INSERT INTO datakaryawan VALUES ('','$name','$work','$salary')";
    mysqli_query($conn, $insert);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    $delete = "DELETE FROM datamahasiswa WHERE ID = $id";
    mysqli_query($conn, $delete);
    return mysqli_affected_rows($conn);
}

function update($data)
{
    global $conn;

    $id = $data["id"];
    $name = htmlspecialchars($data["name"]);
    $work = htmlspecialchars($data["work"]);
    $salary = htmlspecialchars($data["salary"]);

    $update = "UPDATE datakaryawan SET name ='$name', work ='$work', salary ='$salary' WHERE id = $id ";
    mysqli_query($conn, $update);

    return mysqli_affected_rows($conn);
}
