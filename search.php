<?php
// Mengambil nilai dari form pencarian
$keyword = $_GET['keyword'];

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

// Melakukan pencarian data
$sql = "SELECT * FROM aplikasi_tabel WHERE nama LIKE '%$keyword%' OR nrp LIKE '%$keyword%' OR judul LIKE '%$keyword%' OR jenis_teknologi LIKE '%$keyword%' OR versi_teknologi LIKE '%$keyword%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Menampilkan hasil pencarian
    echo "<h2>Hasil Pencarian</h2>";
    echo "<table>";
    echo "<tr><th>Nama</th><th>NRP</th><th>Judul</th><th>Link Git</th><th>Jenis Teknologi</th><th>Versi Teknologi</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row['nama']."</td><td>".$row['nrp']."</td><td>".$row['judul']."</td><td>".$row['link_git']."</td><td>".$row['jenis_teknologi']."</td><td>".$row['versi_teknologi']."</td></tr>";
    }
    echo "</table>";
} else {
    echo "Data tidak ditemukan.";
}

$conn->close();
?>
