<?php
require '9.2.Koneksi.php';

$id = $_GET["ID"];

if (hapus($id) > 0) {
    echo "
        <script>
            alert('Data berhasil dihapus'); 
            document.location='9.1.index.php';
        </script>";
} else {
    echo "Delete gagal";
}
?>