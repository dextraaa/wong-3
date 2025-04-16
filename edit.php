<?php
include 'db.php';
$id = $_GET["id"];
$result = $conn->query("SELECT * FROM proyek WHERE id = $id");
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Proyek</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h2>Edit Proyek</h2>
<form method="POST" action="" onsubmit="return validateForm()">
    <input type="text" name="nama" id="nama" value="<?= $row['nama'] ?>" required><br>
    <input type="text" name="kategori" id="kategori" value="<?= $row['kategori'] ?>" required><br>
    <textarea name="deskripsi" id="deskripsi" required><?= $row['deskripsi'] ?></textarea><br>
    <button type="submit">Update</button>
</form>
<a href="index.php">Kembali</a>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $kategori = $_POST["kategori"];
    $deskripsi = $_POST["deskripsi"];

    $sql = "UPDATE proyek SET nama='$nama', kategori='$kategori', deskripsi='$deskripsi' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error updating: " . $conn->error;
    }
}
?>
<script src="js/script.js"></script>
</body>
</html>