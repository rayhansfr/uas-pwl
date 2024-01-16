<?php


include "controller/connection.php";

$targetDir = 'uploaded_files/';
$scanKK = $targetDir . 'KK - ' . basename($_FILES["scanKK"]["name"]);
$scanKTP = $targetDir . 'KTP - ' . basename($_FILES["scanKTP"]["name"]);
$fotoAnak = $targetDir . 'FOTO - ' . basename($_FILES["fotoAnak"]["name"]);

// Check file types (you may need to adjust these mime types)
$allowedTypes = array('image/jpeg', 'image/jpg');

if (in_array($_FILES["scanKK"]["type"], $allowedTypes) && in_array($_FILES["scanKTP"]["type"], $allowedTypes) && in_array($_FILES["fotoAnak"]["type"], $allowedTypes)) {
    // Move uploaded files
    move_uploaded_file($_FILES["scanKK"]["tmp_name"], $scanKK);
    move_uploaded_file($_FILES["scanKTP"]["tmp_name"], $scanKTP);
    move_uploaded_file($_FILES["fotoAnak"]["tmp_name"], $fotoAnak);

    echo "Files uploaded successfully.";
} else {
    echo "Invalid file types. Please upload JPEG images.";
}

$namaLengkap = mysqli_real_escape_string($conn, $_POST['namaLengkap']);
$agama = mysqli_real_escape_string($conn, $_POST['agama']);
$nik = mysqli_real_escape_string($conn, $_POST['NIK']);
$anakKe = mysqli_real_escape_string($conn, $_POST['anakKe']);
$namaAyah = mysqli_real_escape_string($conn, $_POST['namaAyah']);
$namaIbu = mysqli_real_escape_string($conn, $_POST['namaIbu']);
$pekerjaanAyah = mysqli_real_escape_string($conn, $_POST['pekerjaanAyah']);
$pekerjaanIbu = mysqli_real_escape_string($conn, $_POST['pekerjaanIbu']);
$alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
$jenisKelamin = mysqli_real_escape_string($conn, $_POST['jenisKelamin']);
$tanggalLahir = mysqli_real_escape_string($conn, $_POST['tanggalLahir']);
$tempat = mysqli_real_escape_string($conn, $_POST['tempat']);
$noHP = mysqli_real_escape_string($conn, $_POST['noHP']);

$query = "INSERT INTO pendaftar (
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
    File_KK,
    File_KTP,
    File_Foto,
    noHp
  ) VALUES (
    '',
    '$namaLengkap',
    '$nik',
    '$tempat',
    '$tanggalLahir',
    '$jenisKelamin',
    '$agama',
    '$anakKe',
    '$alamat',
    '$namaAyah',
    '$namaIbu',
    '$alamat',
    '$pekerjaanAyah',
    '$pekerjaanIbu',
    '$scanKK',
    '$scanKTP',
    '$fotoAnak',
    '$noHP'
  )";


// Execute the query
$insert = mysqli_query($conn, $query);

// Check for success
if ($insert) {
    header("location: pendaftaran.php");
    alert("success", "Terima Kasih telah mendaftarkan putra/i nya untuk menjadi bagian dari PAUDQu Assabiqunal Awwalun. Ditunggu kabar selanjutnya melalui WhatsApp ya! -admin ppdb");
} else {
    echo "Error: " . mysqli_error($conn);
}

function alert($type, $message)
{
    echo
    "<div class=\"alert alert-$type alert-dismissible fixed-top m-2 fade show\" role=\"alert\">
        <strong>$message</strong> 
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>";
}
