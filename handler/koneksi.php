<?php
// Koneksi ke database MySQL
$servername = "servername";
$username = "username";
$password = "password";
$dbname = "your_db_name";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Mengambil semua data dari tabel naive_bayes
$res_all_data = $conn->query("SELECT * FROM naive_bayes");
$tot_data = mysqli_num_rows($res_all_data);
