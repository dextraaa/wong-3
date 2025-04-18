<!-- File: script.js -->
function validateForm() {
    const nama = document.getElementById('nama_sampah').value.trim();
    const kategori = document.getElementById('kategori').value;
    const berat = document.getElementById('berat_kg').value;
    const lokasi = document.getElementById('lokasi').value.trim();

    if (!nama || !kategori || !berat || !lokasi) {
        alert('Semua field wajib diisi!');
        return false;
    }
    return true;
}

function confirmDelete(id) {
    if (confirm('Yakin ingin menghapus data ini?')) {
        window.location.href = 'delete.php?id=' + id;
    }
}

document.getElementById('filterKategori')?.addEventListener('change', function () {
    const kategori = this.value.toLowerCase();
    const rows = document.querySelectorAll('#dataTable tr');

    rows.forEach(row => {
        const rowKategori = row.getAttribute('data-kategori').toLowerCase();
        if (!kategori || rowKategori === kategori) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
});
