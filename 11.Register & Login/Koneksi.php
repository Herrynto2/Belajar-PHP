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
        
        $Foto = uploadfile();
        if (!$Foto) {
            return false ;
        }
        $NIM = htmlspecialchars($data["NIM"]);
        $Nama = htmlspecialchars($data["Nama"]);
        $Email = htmlspecialchars($data["Email"]);
        $Jurusan = htmlspecialchars($data["Jurusan"]);

        $insert = "INSERT INTO datamahasiswa VALUES ('','$Foto','$NIM','$Nama','$Email','$Jurusan')";
        mysqli_query($conn, $insert);

        return mysqli_affected_rows($conn);
    }

function uploadfile() {
        $namafile = $_FILES["Foto"]["name"];
        $sizefile = $_FILES["Foto"]["size"];
        $error = $_FILES["Foto"]["error"];
        $tmpname = $_FILES["Foto"]["tmp_name"];
        
        //Cek apakah tidak ada gambar yang diupload
        if ($error === 4) {
            echo "
            <script>
                alert('Upload gambar terlebih dahulu'); 
            </script>";
            return false;
        }

        //Cek apakah yang diupload adalah gambar
        $ekstensiAll = ["jpg", "jpeg", "png"]; 
        $ekstensi = explode(".", "$namafile"); //memecah namafile menjadi array
        $ekstensi = strtolower(end($ekstensi)); //mengecilkan semua huruf dan ambil array yang terakhir
        if (!in_array($ekstensi, $ekstensiAll)) { //cek apakah ada string dalam array ekstensiALL
            echo "
            <script>
                alert('File bukan gambar'); 
            </script>";
            return false;
        }

        //Cek apakah ukurannya > 1 MB
        if ($sizefile > 1000000) {
        echo "
            <script>
                alert('File terlalu besar'); 
            </script>";
        return false;
        }

        //Membuat nama baru
        $namafilebaru = uniqid();
        $namafilebaru .= ".";
        $namafilebaru .= $ekstensi;

        //Pemindahan file ke direktory
        move_uploaded_file($tmpname, "img/" . $namafilebaru);
        return $namafilebaru;
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
        $NIM = htmlspecialchars($data["NIM"]);
        $Nama = htmlspecialchars($data["Nama"]);
        $Email = htmlspecialchars($data["Email"]);
        $Jurusan = htmlspecialchars($data["Jurusan"]);
        $FotoLama = htmlspecialchars($data["FotoLama"]);

        //Cek apakah user uppload gambar baru 
        if ($_FILES["Foto"]["error"] === 4) {
            $Foto = $FotoLama;
        } else {
            $Foto = uploadfile();
        }

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

function register($data) {
    global $conn;

    $Username = strtolower($data["username"]);
    $Password = mysqli_real_escape_string($conn, $data["password"]);
    $Confirm = mysqli_real_escape_string($conn, $data["confirm"]);

    //Cek apakah username sudah ada
    $result = mysqli_query($conn, "SELECT username FROM user where username='$Username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
            alert('username sudah ada');
        </script>";
        return false;
    }

    //cek apakah password sama dengan confirm
    if ($Password !== $Confirm) {
        echo "<script>
            alert('Password Konfirmasi tidak sama');
        </script>";
        return false;
    }

    //enkrpsi password (acak password)
             // $enkripsi = md5($Password);
    $enkripsi = password_hash($Password, PASSWORD_DEFAULT);

    //Tambah ke database
    mysqli_query($conn, "INSERT INTO user VALUES ('', '$Username', '$enkripsi')");
    return mysqli_affected_rows($conn);
}

function login($datas) {
    global $conn;
    $Username = $datas["username"];
    $Password = $datas["password"];
    $result = mysqli_query($conn, "SELECT * FROM user WHERE username='$Username'");

    //cek username benar atau tidak
    if (mysqli_num_rows($result) === 1) {
        //cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($Password, $row["password"])) {
            return mysqli_affected_rows($conn);
        }
    }
}

?>