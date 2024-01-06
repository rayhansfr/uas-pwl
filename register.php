<?php

session_start();
include "controller/connection.php";

if (isset($_POST['submit'])) { // jika button register ditekan maka lakukan code blok dibawah
    // mengamankan dan sql injection
    $username = strtolower(stripslashes($_POST["username"])); // ubah username menjadi lowercase 
    $name = stripslashes($_POST["nama"]);
    $name = mysqli_real_escape_string($conn, $_POST["nama"]);
    $password = stripslashes($_POST["password"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $confPass = stripslashes($_POST["confirmPassword"]);
    $confPass = mysqli_real_escape_string($conn, $_POST["confirmPassword"]);

    // insialisasi username yang ada pada table
    $existUsername = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    //validasi
    if (mysqli_fetch_assoc($existUsername)) { // jika username sama dengan username yang sudah ada maka beri alert
        alert("danger", "Username already exist");
    } elseif ($password !== $confPass) { // jika password tidak sama dengan confirmation password maka beri alert
        alert("danger", "Password Doesnt Match!");
    } else { // jika validasi selesai maka lakukan blok code dibawah
        $password = password_hash($password, PASSWORD_DEFAULT); // hashing password
        try {
            $result = mysqli_query($conn, "INSERT INTO user VALUES ('','$name', '$username', '$password')"); // query insert
            if ($result) { // jika berhasil arahkan ke halaman login
                header('location:login.php');
            } else { // jika tidak tampikan error
                throw new Exception("Registration Failed: " . mysqli_error($conn));
            }
        } catch (Exception $e) { // tampilkan error message
            echo $e->getMessage();
        }
    }
}

// alert message
function alert($type, $message)
{
    echo
    "<div class=\"alert alert-$type alert-dismissible fade show\" role=\"alert\">
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
                                        <a class="nav-link" href="login.php">Sign In</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="true" href="#">Sign Up</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body py-5 px-md-5">
                                <form id="form-login" method="POST" action="">
                                    <!-- nama -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="nama">Nama</label>
                                        <input type="text" id="nama" name="nama" class="form-control" placeholder="Enter your name" required />
                                    </div>
                                    <!-- Username -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="username">Username</label>
                                        <input type="text" id="username" name="username" class="form-control" placeholder="Enter your username" required />
                                    </div>
                                    <!-- Password -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="password">Password</label>
                                        <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required />
                                    </div>
                                    <!-- Confirm Password -->
                                    <div class="mb-3">
                                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Enter your password again" required>
                                    </div>
                                    <!-- Captcha -->
                                    <div class="mb-3">
                                        <label for="captcha">Please enter the code shown in the image:</label>
                                        <img src="controller/captcha.php" alt="CAPTCHA Image">
                                        <input type="text" id="captcha" name="captcha" required>
                                    </div>
                                    <!-- Submit -->
                                    <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">
                                        Signup
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