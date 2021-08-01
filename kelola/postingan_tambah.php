<?php
include "../koneksi.php";
include "../fungsi.php";
session_start();

if (isset($_POST['tambah'])) {
    $judul = $_POST['judul'];
    $tanggal = $_POST['tanggal'];
    $isi = $_POST['isi'];

    $gambar_name = $_FILES['gambar']['name'];
    $gambar_temp = $_FILES['gambar']['tmp_name'];
    $gambar_size = $_FILES['gambar']['size'];

    $sql = "INSERT INTO postingan (judul, tanggal, gambar, isi) 
            VALUES ('$judul', '$tanggal', '$gambar_name', '$isi')";

    $a = $koneksi->query($sql);
    if ($a === true) {
        $location = "../img/";
        move_uploaded_file($gambar_temp, $location . $gambar_name);
        echo "<script>
            alert ('Postingan sukses ditambahkan'); 
            window.location.href=('postingan.php');
            </script>";
    } else {
        echo "<script>
            alert ('Postingan gagal ditambahkan');
            </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Postingan</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <script>
        function logout() {
            var x = confirm('Apakah anda yakin ingin logout?');

            if (x == true) {
                window.location.href = ('login.php');
            }
        }
    </script>

    <div class="navigasi">
        <!-- <div class="user">
            <h1><?php echo $_SESSION['username']; ?></h1>
        </div> -->
        <div class="menu">
            <ul>
                <li><a href="postingan.php">Daftar Postingan</a></li>
                <li><a href="profil.php">Profil</a></li>
            </ul>
        </div>
        <div class="logout">
            <button class="btn-logout" onclick="logout();">Logout</button>
        </div>
    </div>

    <div class="center tabel">
        <h1>Tambah Postingan</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="txt_field">
                <label for="">Judul : </label><br><br>
                <input type="text" name="judul" required>
            </div>
            <div class="txt_field">
                <label for="">Tanggal : </label><br><br>
                <input type="date" name="tanggal" required>
            </div>
            <div class="txt_field">
                <label for="">Gambar : </label><br><br>
                <input type="file" name="gambar" required>
            </div>
            <div class="txt_field">
                <label for="">Isi : </label><br><br>
                <textarea name="isi" id="" cols="150" rows="4"></textarea>
            </div>
            <input type="submit" value="Tambah" name="tambah" style="width: 200px; border-radius: 10px;">
            <a class="tombol" href="postingan.php">Kembali</a>
        </form>
    </div>

</body>

</html>