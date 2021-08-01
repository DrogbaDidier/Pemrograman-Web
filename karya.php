<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title>Karya</title>
</head>

<body>
    <!--Navigasi Menu-->
    <div class="navigasi">
        <h1 class="judulweb">Kevinnaufalf WEB</h1>
        <div class="user">
            <ul>
                <li><a href="kelola/login.php">Login</a></li>
            </ul>
        </div>
    </div>
    <!--Akhir Navigasi-->

    <!--Pembungkus halaman web-->
    <div class="pembungkus">
        <!--Bagian header-->
        <div class="header">
            <h1>Foto</h1>
        </div>
        <div class="menu" style="width: 100%;">
            <ul>
                <?php
                $sql = "SELECT * FROM menu";
                $a = $koneksi->query($sql);
                while ($c = $a->fetch_array()) {
                ?>
                    <li><a href="<?php echo $c['alamat']; ?>"><?php echo $c['nama_menu']; ?></a></li>
                <?php
                }
                ?>
            </ul>
        </div>
        <!--Akhir bagian header-->
    </div>
    <!--Akhir bagian pembungkus halaman web-->

    <!--Bagian konten-->
    <?php
    $sql = "SELECT * FROM karya";
    $a = $koneksi->query($sql);
    while ($c = $a->fetch_array()) {
    ?>
        <div class="konten">
            <div class="isikonten karya">
                <h1 class="judulartikel"><?php echo $c['judul'];?></h1>
                <p class="tanggalposting"><?php echo $c['tahun'];?></p>
                <div class="isiartikel">
                    <img src="<?php echo $c['gambar'];?>" class="gambarkarya">
                </div>
            </div>
        </div>
    <?php
    }
    ?>
    <!--Akhir bagian konten-->

    <!--Bagian footer-->
    <div class="footer">
        <p>Copyright &#169;Kevinnaufalf Web</p>
    </div>
    <!--Akhir bagian footer-->

</body>

</html>