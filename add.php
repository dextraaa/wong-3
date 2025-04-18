<!-- File: add.php -->
<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Sampah</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <h1>Tambah Data Sampah</h1>
    <form method="POST" action="add.php" onsubmit="return validateForm()">
        <label>Nama Sampah:</label>
        <input type="text" name="nama_sampah" id="nama_sampah" required><br>

        <label>Kategori:</label>
        <select name="kategori" id="kategori" required>
            <option value="">Pilih Kategori</option>
            <option value="Organik">Organik</option>
            <option value="Anorganik">Anorganik</option>
        </select><br>

        <label>Berat (kg):</label>
        <input type="number" step="0.01" name="berat_kg" id="berat_kg" required><br>

        <label>Lokasi:</label>
        <input type="text" name="lokasi" id="lokasi" required><br>

        <button type="submit" name="submit">Simpan</button>
    </form>
    <a href="list.php">Kembali ke Daftar</a>

    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama_sampah'];
        $kategori = $_POST['kategori'];
        $berat = $_POST['berat_kg'];
        $lokasi = $_POST['lokasi'];
        $tanggal = date('Y-m-d');

        $sql = "INSERT INTO data_sampah (nama_sampah, kategori, berat_kg, lokasi, tanggal_input) 
                VALUES ('$nama', '$kategori', '$berat', '$lokasi', '$tanggal')";

        if (mysqli_query($conn, $sql)) {
            echo "<p>Data berhasil ditambahkan!</p>";
        } else {
            echo "<p>Terjadi kesalahan: " . mysqli_error($conn) . "</p>";
        }
    }
    ?>
</body>
</html>
