<?php
include "../koneksi.php";
session_start();

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND 
            password='$password'");

    if (mysqli_num_rows($sql) == 1) {
        $a = $sql->fetch_array();
        $_SESSION['username'] = $username;
        echo "<script>
        alert ('Selamat datang $username!!');
        window.location.href=('profil.php');
        </script>";
    } else {
        echo "<script>
        alert ('Maaf password atau username salah!!');
        window.location.href=('login.php');
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
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="center">
        <h1>Login</h1>
        <form action="" method="POST">
            <div class="txt_field">
                <input type="text" placeholder="Username" name="username" required>
            </div>
            <div class="txt_field">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <input type="submit" value="Login" name="login">
            <div class="daftar">
                <a href="../home.php">Back to home</a>
            </div>
        </form>
    </div>
</body>

</html>