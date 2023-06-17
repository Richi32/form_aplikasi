<?php
// Mengambil nilai dari form
$nama = $_POST['nama'];
$nrp = $_POST['nrp'];
$judul = $_POST['judul'];
$link_git = $_POST['link_git'];
$jenis_teknologi = $_POST['jenis_teknologi'];
$versi_teknologi = $_POST['versi_teknologi'];

// Koneksi ke database MariaDB
$servername = "localhost";
$username = "root";
$password = "richism32";
$dbname = "form_aplikasi";

$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Menyimpan data ke dalam tabel
$sql = "INSERT INTO aplikasi_tabel (nama, nrp, judul, link_git, jenis_teknologi, versi_teknologi)
        VALUES ('$nama', '$nrp', '$judul', '$link_git', '$jenis_teknologi', '$versi_teknologi')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan.";
} else {
    echo "Terjadi kesalahan: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
