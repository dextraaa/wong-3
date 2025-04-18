# Bank Sampah Digital

Proyek ini adalah aplikasi web sederhana yang digunakan untuk mengelola data sampah, termasuk fitur CRUD (Create, Read, Update, Delete) dan filter kategori. Aplikasi ini dirancang untuk membantu pengelolaan sampah secara lebih efisien, berbasis web dengan penggunaan PHP, MySQL, JavaScript, dan CSS.

## Fitur Utama
- **Menampilkan Daftar Sampah**: Menampilkan data sampah dalam bentuk tabel yang dapat difilter berdasarkan kategori.
- **Menambah Data Sampah**: Formulir untuk menambahkan data sampah baru, termasuk nama, kategori, berat, dan lokasi.
- **Mengedit Data Sampah**: Mengedit informasi sampah yang telah ada.
- **Menghapus Data Sampah**: Menghapus data sampah dengan konfirmasi sebelum menghapus.

## Teknologi yang Digunakan
- **PHP**: Untuk pemrosesan data di server dan koneksi ke MySQL.
- **MySQL**: Untuk menyimpan data sampah.
- **JavaScript**: Untuk validasi form dan interaksi pengguna di sisi klien.
- **CSS**: Untuk desain responsif dan tampilan aplikasi yang modern.

## Cara Menjalankan Aplikasi
1. **Persiapkan Database**
   - Buat database dengan nama `sampah_db` dan tabel `data_sampah` menggunakan SQL berikut:
     ```sql
     CREATE TABLE data_sampah (
         id INT AUTO_INCREMENT PRIMARY KEY,
         nama_sampah VARCHAR(255),
         kategori VARCHAR(50),
         berat_kg DECIMAL(5, 2),
         lokasi VARCHAR(255),
         tanggal_input TIMESTAMP DEFAULT CURRENT_TIMESTAMP
     );
     ```
2. **Pengaturan Koneksi Database**
   - Ubah informasi koneksi di file `db.php` sesuai dengan konfigurasi server dan database Anda.
3. **Menjalankan Aplikasi**
   - Tempatkan semua file di server lokal Anda atau hosting dengan PHP support.
   - Akses aplikasi melalui browser di `localhost/nama_folder`.
4. **Menggunakan Aplikasi**
   - Anda bisa menambahkan, mengedit, atau menghapus data sampah melalui antarmuka web.

## Struktur File
- `index.php`: Halaman utama aplikasi.
- `list.php`: Menampilkan daftar data sampah.
- `add.php`: Formulir untuk menambah data sampah.
- `edit.php`: Formulir untuk mengedit data sampah.
- `delete.php`: Untuk menghapus data sampah.
- `detail.php`: Menampilkan detail dari data sampah.
- `db.php`: Koneksi ke database.
- `style.css`: Desain dan layout aplikasi.
- `script.js`: Validasi form dan interaksi.

## Lisensi
Proyek ini tersedia di bawah lisensi MIT. Gunakan dan modifikasi sesuai kebutuhan.