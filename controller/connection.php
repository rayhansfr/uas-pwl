<?php
$db_host = 'localhost'; // inisialisasi host database localhost ke variable db_host
$db_pass = ''; // inisialisasi password database ke variable db_pass
$db_user = 'root'; // inisialisasi user root database ke variable db_user
$db_name = 'paudqu';  // inisialisasi nama database ke variable db_name
// lakukan control error menggunakan try catch
try {
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name); // lakukan fungsi mysqli_connect untuk mengkoneksikan ke database mysql
    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
