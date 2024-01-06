<?php
$currentPage = 'pendaftar.php';
session_start(); // fungsi untuk memulai atau melanjutkan sesi yang sudah ada
if (!isset($_SESSION["login"])) { // cek apakah user telah melakukan login atau belum
    header("Location: login.php"); // jika belum maka arahkan ke halaman login
}
$username = $_SESSION["username"]; // insialisasi varibale username dari session saat ini

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
    <?php include "components/sideNavbar.php" ?>

    <main class="flex-shrink-0">
        <!-- Your content goes here -->
        <h1 class="mt-2">List Pendaftar</h1>
        <div class="table-responsive-sm">
            <form action="" method="GET">
                <div class="input-group mt-5">
                    <input type="search" class="form-control rounded" name="search" placeholder="Cari Berdasarkan Nama atau NISN" aria-label="Search" aria-describedby="search-addon" />
                    <button type="submit" value="search" class="btn btn-primary">Search</button>
                    <button type="submit" value="clear" class="btn btn-outline-primary">Reset</button>
                </div>
            </form>
            <table class="table table-info table-striped table-hover mt-2">
                <thead class="table-success text-center">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Tempat, Tanggal Lahir</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Agama</th>
                        <th scope="col">Alamat Peserta Didik</th>
                        <th scope="col">Nama Ayah</th>
                        <th scope="col">Pekerjaan Ayah</th>
                        <th scope="col">Nama Ibu</th>
                        <th scope="col">Pekerjaan Ibu</th>
                        <th scope="col" class="table-danger">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $limit = 7; // inisialisasi variable limit untuk membatasi jumlah data yang ditamplkan dalam satu halaman
                    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1; // Mengambil nomor halaman saat ini dari parameter URL
                    $offset = ($page - 1) * $limit; // Menghitung nilai offset
                    // Cek apakah user menggunakan fitur search
                    if (isset($_GET['search']) && !empty($_GET['search'])) {
                        $search = mysqli_real_escape_string($conn, $_GET['search']); // amankan string sebelum digunakan dalam query
                        // ambil data dari tabel dengan kolom nama yang mengandung nilai yang sesuai dengan nilai pada variable search
                        // lalu atur jumlah baris yang ditampilkan menggunakan LIMIT dengan variable limit (3)
                        $sql_fetch = "SELECT * FROM pendaftar WHERE nama LIKE '%$search%' OR nisn = '$search' LIMIT $limit OFFSET $offset";
                        $query = mysqli_query($conn, $sql_fetch);
                    } else { // jika user tidak menggunakan fitur seearch maka lakukan code block dibawah
                        // ambil data dari tabel dengan LIMIT untuk mengatur jumlah baris yang ditampilkan
                        $sql_fetch = "SELECT * FROM pendaftar LIMIT $limit OFFSET $offset";
                        $query = mysqli_query($conn, $sql_fetch);
                    }
                    $number = $offset + 1;
                    // lakukan perulangan untuk menampilkan data dari query yang dijalankan sebelumnya
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td><?php echo $number++ ?></td>
                            <td><?php echo $row['Nama_Lengkap'] ?></td>
                            <td><?php echo $row['NIK']; ?></td>
                            <td><?php echo $row['Tempat_Lahir'] . ', ' . $row['Tanggal_Lahir']; ?></td>
                            <td><?php echo $row['Jenis_Kelamin']; ?></td>
                            <td><?php echo $row['Agama']; ?></td>
                            <td><?php echo $row['Alamat_Peserta_Didik']; ?></td>
                            <td><?php echo $row['Ayah']; ?></td>
                            <td><?php echo $row['Pekerjaan_Ayah']; ?></td>
                            <td><?php echo $row['Ibu']; ?></td>
                            <td><?php echo $row['Pekerjaan_Ibu']; ?></td>
                            <td>
                                <a class="btn btn-primary" href="approve.php?id=<?php echo $row['id']; ?>">Terima</a>
                                <a class="btn btn-danger" href="decline.php?id=<?php echo $row['id']; ?>">Tolak</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <div class="row">
                <div class="col">
                    <nav aria-label="pagination">
                        <ul class="pagination align-items-center">
                            <?php
                            // Hitung total halaman yang diperlukan (setiap halaman 3 data)
                            $totalPages = ceil(mysqli_num_rows(mysqli_query($conn, "SELECT * FROM pendaftar")) / $limit);
                            // lakukan perulangan untuk membuat pagination sesuai dengan jumlah halaman
                            for ($i = 1; $i <= $totalPages; $i++) {
                                if ($i == $page) {
                                    echo '<li class="page-item active"><a class="page-link" href="#">' . $i . '</a></li>';
                                } else {
                                    echo '<li class="page-item"><a class="page-link" href="index.php?page=' . $i . '">' . $i . '</a></li>';
                                }
                            }
                            ?>
                        </ul>
                    </nav>
                </div>
            </div>
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
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/0caa192f1e.js" crossorigin="anonymous"></script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>