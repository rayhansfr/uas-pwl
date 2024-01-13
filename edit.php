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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get values from the form
    $id = $_POST['id'];
    $namaLengkap = mysqli_real_escape_string($conn, $_POST['Nama_Lengkap']);
    $nis = mysqli_real_escape_string($conn, $_POST['NIS']);
    $tingkatRombel = mysqli_real_escape_string($conn, $_POST['Tingkat/Rombel']);
    $agama = mysqli_real_escape_string($conn, $_POST['Agama']);
    $alamatPesertaDidik = mysqli_real_escape_string($conn, $_POST['Alamat_Peserta_Didik']);
    $ayah = mysqli_real_escape_string($conn, $_POST['Ayah']);
    $pekerjaanAyah = mysqli_real_escape_string($conn, $_POST['Pekerjaan_Ayah']);
    $nisn = mysqli_real_escape_string($conn, $_POST['NISN']);
    $nik = mysqli_real_escape_string($conn, $_POST['NIK']);
    $tempatLahir = mysqli_real_escape_string($conn, $_POST['Tempat_Lahir']);
    $tanggalLahir = mysqli_real_escape_string($conn, $_POST['Tanggal_Lahir']);
    $jenisKelamin = mysqli_real_escape_string($conn, $_POST['Jenis_Kelamin']);
    $anakKe = mysqli_real_escape_string($conn, $_POST['Anak_ke']);
    $ibu = mysqli_real_escape_string($conn, $_POST['Ibu']);
    $pekerjaanIbu = mysqli_real_escape_string($conn, $_POST['Pekerjaan_Ibu']);
    $alamatOrangTua = mysqli_real_escape_string($conn, $_POST['Alamat_Orang_Tua']);

    // Update query
    $query = "UPDATE siswa SET
    id = '$id',
    Nama_Lengkap = '$namaLengkap',
    NIK = '$nik',
    Tempat_Lahir = '$tempatLahir',
    Tanggal_Lahir = '$tanggalLahir',
    Jenis_Kelamin = '$jenisKelamin',
    Agama = '$agama',
    Anak_ke = '$anakKe',
    Alamat_Peserta_Didik = '$alamatPesertaDidik',
    Ayah = '$ayah',
    Ibu = '$ibu',
    Alamat_Orang_Tua = '$alamatOrangTua',
    Pekerjaan_Ayah = '$pekerjaanAyah',
    Pekerjaan_Ibu = '$pekerjaanIbu',
    NIS = '$nis',
    NISN = '$nisn',
    Tingkat_Rombel = '$tingkatRombel'
    WHERE id = '$id' ";

    // Execute the query
    $result = mysqli_query($conn, $query);

    if ($result) {
        alert("success", "Data berhasil di update");
    } else {
        echo "Error updating data: " . mysqli_error($conn);
    }
}

function alert($type, $message)
{
    echo
    "<div class=\"alert alert-$type alert-dismissible fixed-top m-2 fade show\" role=\"alert\">
        <strong>$message</strong> 
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>";
}

if (isset($_GET['id'])) {
    $studentId = $_GET['id'];
    $sql_detail = "SELECT * FROM siswa WHERE id = $studentId";
    $result_detail = mysqli_query($conn, $sql_detail);
    $studentData = mysqli_fetch_assoc($result_detail);

    if (!$studentData) {
        header("Location: siswa.php");
        exit();
    }
} else {
    header("Location: siswa.php");
    exit();
}
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
    <title>Edit</title>
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
        <title>Edit Siswa</title>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <!-- Add your additional head content here -->
    </head>

    <body>
        <main class="flex-shrink-0">
            <div class="container bg-white p-4 rounded">
                <h1 class="mb-4">Edit Siswa</h1>
                <form method="POST" action="">
                    <input type="hidden" name="id" value="<?php echo $studentData['id']; ?>">

                    <div class="row">
                        <!-- First Column -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="Nama_Lengkap" class="form-label">Nama Lengkap </label>
                                <input type="text" class="form-control" name="Nama_Lengkap" value="<?php echo $studentData['Nama_Lengkap']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="NIS" class="form-label">NIS </label>
                                <input type="text" class="form-control" name="NIS" value="<?php echo $studentData['NIS']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="Tingkat/Rombel" class="form-label">Tingkat/Rombel </label>
                                <select class="form-select" name="Tingkat/Rombel" required>
                                    <option value="Kelompok A-ABU BAKAR ASSIDDIQ" <?php echo ($studentData['Tingkat_Rombel'] == 'Kelompok A-ABU BAKAR ASSIDDIQ') ? 'selected' : ''; ?>>Kelompok A-ABU BAKAR ASSIDDIQ</option>
                                    <option value="Kelompok B-UMAR BIN KHATTAB" <?php echo ($studentData['Tingkat_Rombel'] == 'Kelompok B-UMAR BIN KHATTAB') ? 'selected' : ''; ?>>Kelompok B-UMAR BIN KHATTAB</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="Agama" class="form-label">Agama </label>
                                <input type="text" class="form-control" name="Agama" value="<?php echo $studentData['Agama']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="Alamat_Peserta_Didik" class="form-label">Alamat Peserta Didik:</label>
                                <textarea class="form-control" name="Alamat_Peserta_Didik" required><?php echo $studentData['Alamat_Peserta_Didik']; ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="Ayah" class="form-label">Nama Ayah </label>
                                <input type="text" class="form-control" name="Ayah" value="<?php echo $studentData['Ayah']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="Pekerjaan_Ayah" class="form-label">Pekerjaan Ayah:</label>
                                <input type="text" class="form-control" name="Pekerjaan_Ayah" value="<?php echo $studentData['Pekerjaan_Ayah']; ?>" required>
                            </div>
                            <!-- ... Other fields for the first column ... -->
                        </div>

                        <!-- Second Column -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="NISN" class="form-label">NISN </label>
                                <input type="text" class="form-control" name="NISN" value="<?php echo $studentData['NISN']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="NIK" class="form-label">NIK:</label>
                                <input type="text" class="form-control" name="NIK" value="<?php echo $studentData['NIK']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="Tempat_Lahir" class="form-label">Tempat Lahir </label>
                                <input type="text" class="form-control" name="Tempat_Lahir" value="<?php echo $studentData['Tempat_Lahir']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="Tanggal_Lahir" class="form-label">Tanggal Lahir </label>
                                <input type="date" class="form-control" name="Tanggal_Lahir" value="<?php echo $studentData['Tanggal_Lahir']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="Jenis_Kelamin" class="form-label">Jenis Kelamin </label>
                                <select class="form-select" name="Jenis_Kelamin" required>
                                    <option value="Laki-Laki" <?php echo ($studentData['Jenis_Kelamin'] == 'Laki-Laki') ? 'selected' : ''; ?>>Laki-Laki</option>
                                    <option value="Perempuan" <?php echo ($studentData['Jenis_Kelamin'] == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="Anak_ke" class="form-label">Anak ke </label>
                                <input type="number" class="form-control" name="Anak_ke" value="<?php echo $studentData['Anak_ke']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="Ibu" class="form-label">Nama Ibu:</label>
                                <input type="text" class="form-control" name="Ibu" value="<?php echo $studentData['Ibu']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="Pekerjaan_Ibu" class="form-label">Pekerjaan Ibu </label>
                                <input type="text" class="form-control" name="Pekerjaan_Ibu" value="<?php echo $studentData['Pekerjaan_Ibu']; ?>" required>
                            </div>
                            <!-- ... Other fields for the second column ... -->
                            <div class="mb-3">
                                <label for="Alamat_Orang_Tua" class="form-label">Alamat Orang Tua</label>
                                <textarea class="form-control" name="Alamat_Orang_Tua" required><?php echo $studentData['Alamat_Orang_Tua']; ?></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- ... Remaining form fields ... -->

                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    <a href="siswa.php" class="btn btn-secondary">Kembali</a>
                </form>
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
        <script src="https //ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <!-- font awesome -->
        <script src="https://kit.fontawesome.com/0caa192f1e.js" crossorigin="anonymous"></script>
        <script src="script.js"></script>
        <!-- bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>

    </html>