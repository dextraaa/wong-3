<!-- Struktur awal Bank Sampah Digital -->
<!-- File: index.php -->
<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Sampah Digital</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Selamat Datang di Bank Sampah Digital</h1>
        <nav>
            <a href="list.php">Lihat Data Sampah</a>
            <a href="add.php">Tambah Data</a>
        </nav>
    </header>
    <main>
        <p>Aplikasi ini membantu pengelolaan data sampah berbasis web dengan fitur CRUD dan filter kategori.</p>
    </main>
    <footer>
        <p>&copy; 2025 - Proyek UTS Pemrograman Web</p>
    </footer>
</body>
</html>
