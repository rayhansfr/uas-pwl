<?php
session_start(); // fungsi untuk memulai atau melanjutkan sesi yang sudah ada
session_unset(); // fungsi untuk menghapus semua variabel sesi saat ini
session_destroy(); // fungsi untuk menghancurkan sesi saat ini. dengan kata lain sesi saat ini sudah tidak aktif
header("Location: login.php"); // mengarahkan user ke halaman login
