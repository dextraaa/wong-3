<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Tambah Proyek SDGs</h2>
    <form method="POST" action="" onsubmit="return validateForm()">
        <input type="text" name="nama" id="nama" placeholder="Nama Proyek" required><br>
        <input type="text" name="kategori" id="kategori" placeholder="Kategori" required><br>
        <textarea name="deskripsi" id="deskripsi" placeholder="Deskripsi" required></textarea><br>
        <button type="submit">Simpan</button>
    </form>
    <a href="index.php">Kembali</a>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $kategori = $_POST["kategori"];
    $deskripsi = $_POST["deskripsi"];

    $sql = "INSERT INTO proyek (nama, kategori, deskripsi) VALUES ('$nama', '$kategori', '$deskripsi')";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
<script src="js/script.js"></script>
</body>
</html>