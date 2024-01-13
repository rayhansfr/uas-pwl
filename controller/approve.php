<?php
include "connection.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $action = $_POST['action'];

    if ($action == 'approve') {
        // Fetch data from 'pendaftar' table based on $id
        // Insert data into 'siswa' table with additional columns
        // Optionally, update 'pendaftar' to mark the data as approved
        $dataPendaftarQuery = "SELECT Nama_Lengkap, NIK, Tempat_Lahir, Tanggal_Lahir, Jenis_Kelamin,
        Agama, Anak_ke, Alamat_Peserta_Didik, Ayah, Ibu, 
        Alamat_Orang_Tua, Pekerjaan_Ayah, Pekerjaan_Ibu FROM pendaftar WHERE id = $id";

        $dataPendaftarResult = mysqli_query($conn, $dataPendaftarQuery);

        if ($dataPendaftarResult) {
            $dataPendaftar = mysqli_fetch_assoc($dataPendaftarResult);
            $namaLengkap = $dataPendaftar['Nama_Lengkap'];
            $nik = $dataPendaftar['NIK'];
            $tempatLahir = $dataPendaftar['Tempat_Lahir'];
            $tanggalLahir = $dataPendaftar['Tanggal_Lahir'];
            $jenisKelamin = $dataPendaftar['Jenis_Kelamin'];
            $agama = $dataPendaftar['Agama'];
            $anakKe = $dataPendaftar['Anak_ke'];
            $alamatPesertaDidik = $dataPendaftar['Alamat_Peserta_Didik'];
            $ayah = $dataPendaftar['Ayah'];
            $ibu = $dataPendaftar['Ibu'];
            $alamatOrangTua = $dataPendaftar['Alamat_Orang_Tua'];
            $pekerjaanAyah = $dataPendaftar['Pekerjaan_Ayah'];
            $pekerjaanIbu = $dataPendaftar['Pekerjaan_Ibu'];
        } else {
            echo "Error: " . mysqli_error($conn);
        }

        $query = "INSERT INTO siswa (
            id,
            Nama_Lengkap,
            NIK,
            Tempat_Lahir,
            Tanggal_Lahir,
            Jenis_Kelamin,
            Agama,
            Anak_ke,
            Alamat_Peserta_Didik,
            Ayah,
            Ibu,
            Alamat_Orang_Tua,
            Pekerjaan_Ayah,
            Pekerjaan_Ibu,
            NIS,
            NISN,
            Tingkat_Rombel
          )
          VALUES
            (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, '', '', '')";

        $stmt = mysqli_prepare($conn, $query);

        if ($stmt) {
            // Bind parameters
            mysqli_stmt_bind_param(
                $stmt,
                "sssssssssssss",
                $namaLengkap,
                $nik,
                $tempatLahir,
                $tanggalLahir,
                $jenisKelamin,
                $agama,
                $anakKe,
                $alamatPesertaDidik,
                $ayah,
                $ibu,
                $alamatOrangTua,
                $pekerjaanAyah,
                $pekerjaanIbu
            );

            // Execute the statement
            mysqli_stmt_execute($stmt);

            // Check for success
            if (mysqli_stmt_affected_rows($stmt) > 0) {
                $deleteQuery = "DELETE FROM pendaftar WHERE id = $id";

                $result = mysqli_query($conn, $deleteQuery);

                if ($result) {
                    echo "Data deleted successfully.";
                } else {
                    echo "Error: " . mysqli_error($conn);
                }
                echo "Data approved and inserted successfully.";
            } else {
                echo "Error: " . mysqli_error($conn);
            }
            mysqli_stmt_close($stmt);
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Invalid action.";
    }
} else {
    echo "Invalid request.";
}
