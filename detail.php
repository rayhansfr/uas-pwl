<?php
$currentPage = 'siswa.php';
session_start(); // fungsi untuk memulai atau melanjutkan sesi yang sudah ada
if (!isset($_SESSION["login"])) { // cek apakah user telah melakukan login atau belum
    header("Location: login.php"); // jika belum maka arahkan ke halaman login
}
$username = $_SESSION["username"]; // insialisasi varibale username dari session saat ini
$table = "siswa";

include "controller/connection.php";

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
            background-color: #f8f9fa;
        }

        body {
            display: flex;
        }

        main {
            flex: 1;
            padding: 20px;
        }

        .container {
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            border-radius: 10px;
        }

        .table th,
        .table td {
            background-color: #e2e8f0;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </Style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Detail</title>
</head>

<body>
    <?php include "components/sideNavbar.php" ?>

    <?php
    include "controller/connection.php";

    if (isset($_GET['id'])) {
        $studentId = $_GET['id'];
        $sql_detail = "SELECT * FROM siswa WHERE id = $studentId";
        $result_detail = mysqli_query($conn, $sql_detail);
        $studentData = mysqli_fetch_assoc($result_detail);

        if (!$studentData) {
            // Handle the case where the student with the specified ID is not found
            header("Location: siswa.php");
            exit();
        }
    } else {
        // Handle the case where the 'id' parameter is not provided
        header("Location: siswa.php");
        exit();
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Detail Siswa</title>
        <!-- Add your additional head content here -->
    </head>

    <body>
        <main class="flex-shrink-0">
            <div class="container mt-4 bg-white p-4 rounded">
                <h1 class="mb-4">Detail Siswa</h1>
                <div class="row justify-content-center g-2">
                    <div class="col">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th scope="row" class="w-25">Nama Lengkap</th>
                                    <td><?php echo $studentData['Nama_Lengkap']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">NIK</th>
                                    <td><?php echo $studentData['NIK']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">NIS</th>
                                    <td><?php echo $studentData['NIS']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">NISN</th>
                                    <td><?php echo $studentData['NISN']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Tingkat/Rombel</th>
                                    <td><?php echo $studentData['Tingkat_Rombel']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Tempat Lahir</th>
                                    <td><?php echo $studentData['Tempat_Lahir']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Tanggal Lahir</th>
                                    <td><?php echo $studentData['Tanggal_Lahir']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Jenis Kelamin</th>
                                    <td><?php echo $studentData['Jenis_Kelamin']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Agama</th>
                                    <td><?php echo $studentData['Agama']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Alamat Peserta Didik</th>
                                    <td><?php echo $studentData['Alamat_Peserta_Didik']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Anak ke</th>
                                    <td><?php echo $studentData['Anak_ke']; ?></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class="col">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th scope="row">Nama Ayah</th>
                                    <td><?php echo $studentData['Ayah']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Nama Ibu</th>
                                    <td><?php echo $studentData['Ibu']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Pekerjaan Ayah</th>
                                    <td><?php echo $studentData['Pekerjaan_Ayah']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Pekerjaan Ibu</th>
                                    <td><?php echo $studentData['Pekerjaan_Ibu']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Alamat Orang Tua</th>
                                    <td><?php echo $studentData['Alamat_Orang_Tua']; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>





                <p><a href="siswa.php" class="btn btn-primary">Kembali</a></p>
            </div>
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
        <!-- jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <!-- font awesome -->
        <script src="https://kit.fontawesome.com/0caa192f1e.js" crossorigin="anonymous"></script>
        <script src="script.js"></script>
        <!-- bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>

    </html>