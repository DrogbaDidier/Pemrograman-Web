<?php
include "../koneksi.php";
include "../fungsi.php";
session_start();

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

    <div style="display: flex; justify-content: center;">
        <div class="tengah">
            <h1>Daftar Postingan</h1>
            <a class="tombol" href="postingan_tambah.php">Tambah Postingan</a>
            <table class="content-table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Judul</th>
                        <th>Tanggal</th>
                        <th>Gambar</th>
                        <th>Isi</th>
                        <th>Tombol</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $sql = "SELECT * FROM postingan";
                    $a = $koneksi->query($sql);
                    while ($c = $a->fetch_array()) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $c['judul']; ?></td>
                            <td><?php echo $c['tanggal']; ?></td>
                            <td><img src="../img/<?php echo $c['gambar']; ?>" alt=""></td>
                            <td><?php echo potong_artikel($c['isi'], 500); ?> ....</td>
                            <td>
                                <div class="tombol2">
                                    <a class="tombol" href="postingan_update.php?id=<?php echo $c['idpostingan']; ?>">Update</a>
                                    <a class="tombol" href="postingan_delete_aksi.php?id=<?php echo $c['idpostingan']; ?>">Delete</a>
                                </div>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>