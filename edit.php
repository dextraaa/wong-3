<!-- File: edit.php -->
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

if (isset($_POST['submit'])) {
    $nama = $_POST['nama_sampah'];
    $kategori = $_POST['kategori'];
    $berat = $_POST['berat_kg'];
    $lokasi = $_POST['lokasi'];

    $sql = "UPDATE data_sampah SET 
            nama_sampah = '$nama', 
            kategori = '$kategori', 
            berat_kg = '$berat', 
            lokasi = '$lokasi' 
            WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        echo "<p>Data berhasil diubah!</p>";
    } else {
        echo "<p>Terjadi kesalahan: " . mysqli_error($conn) . "</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Sampah</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <h1>Edit Data Sampah</h1>
    <form method="POST" action="" onsubmit="return validateForm()">
        <label>Nama Sampah:</label>
        <input type="text" name="nama_sampah" id="nama_sampah" value="<?= $data['nama_sampah'] ?>" required><br>

        <label>Kategori:</label>
        <select name="kategori" id="kategori" required>
            <option value="">Pilih Kategori</option>
            <option value="Organik" <?= $data['kategori'] == 'Organik' ? 'selected' : '' ?>>Organik</option>
            <option value="Anorganik" <?= $data['kategori'] == 'Anorganik' ? 'selected' : '' ?>>Anorganik</option>
        </select><br>

        <label>Berat (kg):</label>
        <input type="number" step="0.01" name="berat_kg" id="berat_kg" value="<?= $data['berat_kg'] ?>" required><br>

        <label>Lokasi:</label>
        <input type="text" name="lokasi" id="lokasi" value="<?= $data['lokasi'] ?>" required><br>

        <button type="submit" name="submit">Simpan Perubahan</button>
    </form>
    <a href="list.php">Kembali ke Daftar</a>
</body>
</html>
