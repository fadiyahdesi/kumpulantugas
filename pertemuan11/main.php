<?php
// CONNECTION
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("koneksi gagal: " . $conn->connect_error);
}

echo "koneksi sukses<br>";

// CREATE DATABASE
$dbname = "tugas";

$sql_create_db = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql_create_db) === TRUE) {
    echo "Database berhasil dibuat<br>";
} else {
    echo "Database gagal dibuat: " . $conn->error;
}

// Use the created database
$conn->select_db($dbname);

// CREATE TABEL
$sql_create_table = "CREATE TABLE IF NOT EXISTS mahasiswa (
    nim INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama_depan VARCHAR(30) NOT NULL,
    nama_belakang VARCHAR(30) NOT NULL,
    email VARCHAR(50)
)";

if ($conn->query($sql_create_table) === TRUE) {
    echo "Tabel 'mahasiswa' berhasil dibuat<br>";
} else {
    echo "Tabel 'mahasiswa' gagal dibuat: " . $conn->error;
}

// INSERT DATA
$sql_insert_data = "INSERT INTO mahasiswa (nim, nama_depan, nama_belakang, email)
VALUES (22090035, 'Fadiyah', 'Desi', 'fadiyahdesi@gmail.com')";
$sql_insert_data = "INSERT INTO mahasiswa (nim, nama_depan, nama_belakang, email)
VALUES (22090055, 'Zahrotun', 'Awaliyah', 'zahro@gmail.com')";
$sql_insert_data = "INSERT INTO mahasiswa (nim, nama_depan, nama_belakang, email)
VALUES (22090073, 'Siti', 'Khodijah', 'siti@gmail.com')";
$sql_insert_data = "INSERT INTO mahasiswa (nim, nama_depan, nama_belakang, email)
VALUES (22090000, 'Loli', 'piaw', 'loli@gmail.com')";


if ($conn->query($sql_insert_data) === TRUE) {
    echo "Data berhasil ditambahkan<br>";
} else {
    echo "Data gagal ditambahkan: " . $conn->error;
}

// UPDATE DATA
$sql = "UPDATE mahasiswa SET nama_belakang='cantik' WHERE nim=1";

if ($conn->query($sql) === TRUE) {
  echo "Update Berhasil";
} else {
  echo "Update gagal: " . $conn->error;
}


// CLOSE CONNECTION
$conn->close();
?>
