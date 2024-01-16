<?php

session_start();
include "controller/connection.php";

if (isset($_SESSION["login"])) {
    header("location:dashboard.php");
}

if (isset($_POST["login"])) { // jika button login ditekan maka lakukan code blok dibawah
    // inisialisasi nilai varianle dari inputan user
    if (isset($_POST['captcha']) && $_SESSION['captcha_string'] === $_POST['captcha']) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        // query select data berdasarkan username yang diinput user
        $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
        if (mysqli_num_rows($result) === 1) { // cek apakah terdapat username dengan username yang sama dari inputan user
            $row = mysqli_fetch_array($result);
            // cek apakah password yang diinput cocok dengan password yang di-hash yang disimpan di database
            if (password_verify($password, $row["password"])) {
                // jika sama maka lakukan code block dibawah
                $_SESSION["username"] = $username; // pass variable username agar dapoat digunakan di halaman lain
                $_SESSION["login"] = true; // tandai bahwa user telah login
                header("location:dashboard.php"); // arahkan user ke halaman index
            } else { // jika password tidak sesuai berikan alert
                alert("danger", "Wrong Username or Password");
            }
        } else { // jika tidak ada username di tabel maka berikan alert
            alert("danger", "Username Does'nt Exist");
        }
    } else {
        alert("danger", "Wrong Captcha");
    }
}

// alert message
function alert($type, $message)
{
    echo
    "<div class=\"alert alert-$type alert-dismissible fixed-top m-2 fade show\" role=\"alert\">
        <strong>$message</strong> 
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Home</title>
</head>

<body>
    <section class="bg-login d-flex justify-content-center align-items-center vh-100">
        <div class="px-4 py-5 px-md-5 text-center text-lg-start rounded" style="background-color: rgb(245, 245, 245); backdrop-filter: blur(5px);">
            <div class="container">
                <div class="row gx-lg-5 align-items-center">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <h1 class="my-5 display-5 fw-bold ls-tight">
                            PAUDQu <br />
                            <span style="color:rgb(0, 95, 212)">Assabiqunal Awwalun</span>
                        </h1>
                        <p style="color: rgb(150, 150, 150)">
                            Sistem Pengelolaan Peserta Didik dan Pendaftaran Peserta Didik Baru
                        </p>
                    </div>
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <div class="card">
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="true">Sign In</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="register.php">Sign Up</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body py-5 px-md-5">
                                <form id="form-login" method="POST" action="">
                                    <!-- Username -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="username">Username</label>
                                        <input type="text" id="username" name="username" class="form-control" />
                                    </div>
                                    <!-- Password -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="password">Password</label>
                                        <input type="password" id="password" name="password" class="form-control" />
                                    </div>
                                    <!-- Captcha -->
                                    <div class="mb-3">
                                        <label for="captcha">Please enter the code shown in the image:</label>
                                        <img src="controller/captcha.php" alt="CAPTCHA Image">
                                        <input type="text" id="captcha" name="captcha" required>
                                    </div>
                                    <!-- Submit -->
                                    <button type="submit" name="login" class="btn btn-primary btn-block mb-4">
                                        Login
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/0caa192f1e.js" crossorigin="anonymous"></script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>