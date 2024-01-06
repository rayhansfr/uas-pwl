<?php
$currentPage = 'dashboard.php';
session_start(); // fungsi untuk memulai atau melanjutkan sesi yang sudah ada
if (!isset($_SESSION["login"])) { // cek apakah user telah melakukan login atau belum
    header("Location: login.php"); // jika belum maka arahkan ke halaman login
}
$username = $_SESSION["username"]; // insialisasi varibale username dari session saat ini

$menuItems = [
    ['icon' => 'fa-briefcase', 'text' => 'Dashboard', 'link' => 'dashboard.php'],
    ['icon' => 'fa-list', 'text' => 'Siswa', 'link' => 'siswa.php'],
    ['icon' => 'fa-list', 'text' => 'Pendaftar', 'link' => 'pendaftar.php'],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <Style>
        body,
        html {
            height: 100%;
        }

        body {
            display: flex;
        }

        main {
            flex: 1;
            padding: 20px;
        }
    </Style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Dashboard</title>
</head>

<body>
    <div class="d-flex">
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-login" style=" width: 280px;">
            <a href="home.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <span class="fs-4">PAUDQu</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto ">
                <?php foreach ($menuItems as $menuItem) : ?>
                    <li class="nav-item">
                        <a href=" <?= $menuItem['link'] ?>" class="nav-link text-white <?= ($currentPage == $menuItem['link']) ? 'active' : '' ?>">
                            <i class="fas fa-solid <?= $menuItem['icon'] ?>"></i>
                            <?= $menuItem['text'] ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <div class="dropdown user-center">
                <a href="#" class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php
                    echo '<strong>' . $username . '</strong>'
                    ?>
                </a>
                <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser1">
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#logoutModal">Sign out</a></li>
                </ul>
            </div>
        </div>

        <main class="flex-shrink-0">
            <!-- Your content goes here -->
            <h1 class="mt-2">Dashboard</h1>
        </main>
        <!-- modal -->
        <div class="modal fade" id="logoutModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Are you sure want to logout?</h5>
                    </div>
                    <div class="modal-body">
                        Your session will be ended
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-outline-danger" href="logout.php">Logout</a>
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- font awesome -->
        <script src="https://kit.fontawesome.com/0caa192f1e.js" crossorigin="anonymous"></script>
        <!-- bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>