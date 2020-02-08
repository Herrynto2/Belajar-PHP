<?php
require 'koneksi.php';

$id = $_GET["id"];

if (hapus($id) > 0) {
    echo "
        <script>
            alert('Data berhasil dihapus'); 
            document.location='index.php';
        </script>";
} else {
    echo "Delete gagal";
}
