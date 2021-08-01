<?php
include "../koneksi.php";
session_start();

if (isset($_POST['update'])) {
    $id = $_SESSION['id'];
    $username = $_POST['username'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $sql = "UPDATE user SET username = '$username', nama_lengkap = '$nama_lengkap', password = '$password', email = '$email'
            WHERE iduser = $id";

    $a = $koneksi->query($sql);
    if ($a === true) {
        $_SESSION['username'] = $username;
        echo "<script>
            alert ('Profil Berhasil Di-Update'); 
            window.location.href=('profil.php');
            </script>";
    } else {
        echo "<script>
            alert ('Profil Gagal Di-Update');
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
    <title>Profil</title>
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

    <div class="center lebar">
        <h1>Profil <?php echo $_SESSION['username']; ?></h1>
        <form action="" method="POST">
            <?php
            $username = $_SESSION['username'];
            $sql = "SELECT * FROM user where username = '$username'";
            $a = $koneksi->query($sql);
            while ($c = $a->fetch_array()) {
                $_SESSION['id'] = $c['iduser'];
            ?>
                <div class="txt_field">
                    <input type="text" name="username" value="<?php echo $c['username']; ?>">
                </div>
                <div class="txt_field">
                    <input type="text" name="nama_lengkap" value="<?php echo $c['nama_lengkap']; ?>">
                </div>
                <div class="txt_field">
                    <input type="password" name="password" value="<?php echo $c['password']; ?>">
                </div>
                <div class="txt_field">
                    <input type="text" name="email" value="<?php echo $c['email']; ?>">
                </div>
                <input type="submit" value="Update Profil" name="update">
            <?php
            }
            ?>
        </form>
    </div>
</body>

</html>