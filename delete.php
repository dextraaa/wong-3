<!-- File: delete.php -->
<?php include 'db.php'; ?>
<?php
if (!isset($_GET['id'])) {
    echo "<p>ID tidak ditemukan!</p>";
    exit;
}
$id = $_GET['id'];
$sql = "DELETE FROM data_sampah WHERE id = $id";
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Data berhasil dihapus!'); window.location='list.php';</script>";
} else {
    echo "<p>Gagal menghapus data: " . mysqli_error($conn) . "</p>";
}
?>