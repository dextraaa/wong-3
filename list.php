<!-- File: list.php -->
<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Data Sampah</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Daftar Data Sampah</h1>
    <select id="filterKategori">
        <option value="">Semua Kategori</option>
        <option value="Organik">Organik</option>
        <option value="Anorganik">Anorganik</option>
    </select>
    <a href="add.php">Tambah Data</a>
    <table>
        <thead>
            <tr>
                <th>Nama Sampah</th>
                <th>Kategori</th>
                <th>Berat (kg)</th>
                <th>Lokasi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody id="dataTable">
            <?php
            $result = mysqli_query($conn, "SELECT * FROM data_sampah ORDER BY id DESC");
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr data-kategori='{$row['kategori']}'>
                        <td>{$row['nama_sampah']}</td>
                        <td>{$row['kategori']}</td>
                        <td>{$row['berat_kg']}</td>
                        <td>{$row['lokasi']}</td>
                        <td>
                            <a href='detail.php?id={$row['id']}'>Detail</a> |
                            <a href='edit.php?id={$row['id']}'>Edit</a> |
                            <a href='#' onclick='confirmDelete({$row['id']})'>Hapus</a>
                        </td>
                    </tr>";
            }
            ?>
        </tbody>
    </table>
    <script src="script.js"></script>
</body>
</html>
