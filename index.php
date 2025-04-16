<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Proyek SDGs</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Daftar Proyek SDGs</h1>

    <a href="add.php" class="btn">+ Tambah Data</a>

    <input type="text" id="searchInput" placeholder="Cari berdasarkan kategori..." onkeyup="filterTable()">

    <table id="dataTable">
        <thead>
            <tr>
                <th>Nama Proyek</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM proyek";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td><a href='detail.php?id={$row['id']}'>{$row['nama']}</a></td>";
                echo "<td>{$row['kategori']}</td>";
                echo "<td>
                        <a href='edit.php?id={$row['id']}'>Edit</a> |
                        <a href='#' onclick='confirmDelete({$row['id']})'>Hapus</a>
                      </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <script src="js/script.js"></script>
</body>
</html>
