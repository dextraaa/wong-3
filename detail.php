<!-- File: detail.php -->
<?php include 'db.php'; ?>
<?php
if (!isset($_GET['id'])) {
    echo "<p>ID tidak ditemukan!</p>";
    exit;
}
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM data_sampah WHERE id = $id");
$data = mysqli_fetch_assoc($result);

if (!$data) {
    echo "<p>Data tidak ditemukan!</p>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Data Sampah</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Detail Data Sampah</h1>
    <ul>
        <li><strong>Nama Sampah:</strong> <?= $data['nama_sampah'] ?></li>
        <li><strong>Kategori:</strong> <?= $data['kategori'] ?></li>
        <li><strong>Berat (kg):</strong> <?= $data['berat_kg'] ?></li>
        <li><strong>Lokasi:</strong> <?= $data['lokasi'] ?></li>
        <li><strong>Tanggal Input:</strong> <?= $data['tanggal_input'] ?></li>
    </ul>
    <a href="list.php">Kembali ke Daftar</a>
</body>
</html>