<html>

<head>
    <!-- <title>Koneksi Database MySQL</title> -->
</head>

<body>
    <?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "web_tugas2";
    $koneksi = mysqli_connect($host, $username, $password, $database);

    if ($koneksi) {
        // echo "OK";
    } else {
        echo "Server not connected";
    }
    ?>
</body>

</html>