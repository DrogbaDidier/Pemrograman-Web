<?php
include "koneksi.php";
include "fungsi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title>Home</title>
</head>

<body>
    <!--Navigasi-->
    <div class="navigasi">
        <h1 class="judulweb">Kevinnaufalf WEB</h1>
        <div class="user">
            <ul>
                <li><a href="kelola/login.php">Login</a></li>
                <!-- <li><a href="daftar.php">Daftar</a></li> -->
            </ul>
        </div>
    </div>
    <!--Akhir Navigasi-->

    <!--Pembungkus halaman web-->
    <div class="pembungkus">
        <!--Bagian header-->
        <div class="header">
            <h1>Welcome</h1>
        </div>
        <div class="menu">
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
    <div class="konten clearfix">
        <!--Bagian kolom kiri-->
        <div class="kolomkiri">
            <?php
            $sql = "SELECT * FROM postingan ORDER BY idpostingan DESC";
            $a = $koneksi->query($sql);
            while ($c = $a->fetch_array()) {
            ?>
                <div class="artikel">
                    <h1 class="judulartikel"><?php echo $c['judul']; ?></h1>
                    <p class="tanggalposting"><?php echo $c['tanggal']; ?></p>
                    <div class="isiartikel">
                        <img src="img/<?php echo $c['gambar']; ?>" alt="logo linux" class="gambarisiartikel">
                        <p><?php echo potong_artikel($c['isi'], 400); ?> ....</p>
                    </div>
                    <a href="detail.php?id=<?php echo $c['idpostingan']; ?>" class="tombolselanjutnya">Selanjutnya</a>
                </div>

            <?php
            }
            ?>
        </div>
        <!--Akhir bagian kolom kiri-->
        <!--Bagian kolom kanan-->
        <div class="kolomkanan">
            <div class="tentangsaya">
                <div class="judulsidebar">
                    <p>About Me</p>
                </div>
                <div class="isisidebar">
                    <img src="img/kevin.jpg" class="gambartentang">
                    <p> Kevin Naufal Fahrezi, seorang mahasiswa di Universitas Islam Negeri Maulana Malik Ibrahim Malang.  
                                    Kevin adalah seorang mahasiswa yang berasal dari Ibukota Jakarta</p>
                </div>
            </div>
            <div class="artikelpopuler">
                <div class="judulsidebar">
                    <p>Artikel Populer</p>
                </div>
                <div class="isisidebar">
                    <ul>
                        <?php
                        $sql = "SELECT * FROM postingan ORDER BY idpostingan DESC";
                        $a = $koneksi->query($sql);
                        while ($c = $a->fetch_array()) {
                        ?>
                            <li><a href="detail.php?id=<?php echo $c['idpostingan']; ?>"><?php echo $c['judul']; ?></a></li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>

        </div>
        <!--Akhir bagian kolom kanan-->
    </div>
    <!--Akhir bagian konten-->

    <!--Bagian footer-->
    <div class="footer">
        <p>Copyright &#169;Kevinnaufalf Web</p>
    </div>
    <!--Akhir bagian footer-->

</body>

</html>