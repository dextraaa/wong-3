<?php
include 'db.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM proyek WHERE id=$id");
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Detail Proyek</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h2>Detail Proyek</h2>
<p><strong>Nama:</strong> <?= $row['nama'] ?></p>
<p><strong>Kategori:</strong> <?= $row['kategori'] ?></p>
<p><strong>Deskripsi:</strong><br><?= nl2br($row['deskripsi']) ?></p>
<a href="index.php">Kembali</a>
</body>
</html>