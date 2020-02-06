<?php
$conn = mysqli_connect("localhost", "root", "", "mahasiswa");

//Select
function select($query) {
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

function insert($data) {
        global $conn;
        
        $Foto = htmlspecialchars($data["Foto"]);
        $NIM = htmlspecialchars($data["NIM"]);
        $Nama = htmlspecialchars($data["Nama"]);
        $Email = htmlspecialchars($data["Email"]);
        $Jurusan = htmlspecialchars($data["Jurusan"]);

        $insert = "INSERT INTO datamahasiswa VALUES ('','$Foto','$NIM','$Nama','$Email','$Jurusan')";
        mysqli_query($conn, $insert);

        return mysqli_affected_rows($conn);
    }

function hapus($id) {
        global $conn;
        $delete = "DELETE FROM datamahasiswa WHERE ID = $id";
        mysqli_query($conn, $delete);
        return mysqli_affected_rows($conn);
    }

function update($data)
{
        global $conn;

        $id = $data["ID"];
        $Foto = htmlspecialchars($data["Foto"]);
        $NIM = htmlspecialchars($data["NIM"]);
        $Nama = htmlspecialchars($data["Nama"]);
        $Email = htmlspecialchars($data["Email"]);
        $Jurusan = htmlspecialchars($data["Jurusan"]);

        $update = "UPDATE datamahasiswa SET Foto ='$Foto', NIM ='$NIM', Nama ='$Nama', Email ='$Email', Jurusan ='$Jurusan'  WHERE ID = $id ";
        mysqli_query($conn, $update);

        return mysqli_affected_rows($conn);
}

function cari($keyword) {
    global $conn;
    $cari = "SELECT * FROM datamahasiswa WHERE NIM LIKE '%$keyword%'
                                            OR Nama LIKE '%$keyword%'
                                            OR Email LIKE '%$keyword%'
                                            OR Jurusan LIKE '%$keyword%'
                                            ORDER BY ID DESC";
    return select($cari);
}
?>