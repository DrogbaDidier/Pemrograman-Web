<?php
include "../koneksi.php";
include "../fungsi.php";
session_start();

$id=$_GET['id'];

$sql = "DELETE FROM postingan WHERE idpostingan = $id";

$a = $koneksi->query($sql);

if ($a === true) {
    // $_SESSION['username'] = $username;
    echo "<script>
            alert ('Postingan Sukses Dihapus'); 
            window.location.href=('postingan.php');
            </script>";
} else {
    echo "<script>
        alert ('Postingan Gagal Dihapus');
        window.location.href=('postingan.php');
        </script>";
}