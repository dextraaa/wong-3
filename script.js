function validateForm() {
    const nama = document.getElementById('nama').value;
    const kategori = document.getElementById('kategori').value;
    if (nama.trim() === '' || kategori.trim() === '') {
        alert("Nama dan kategori harus diisi!");
        return false;
    }
    return true;
}

function confirmDelete(id) {
    if (confirm("Yakin ingin menghapus data ini?")) {
        window.location = "delete.php?id=" + id;
    }
}

function filterTable() {
    const input = document.getElementById("searchInput").value.toUpperCase();
    const table = document.getElementById("dataTable");
    const tr = table.getElementsByTagName("tr");

    for (let i = 1; i < tr.length; i++) {
        const td = tr[i].getElementsByTagName("td")[1]; // kolom kategori
        if (td) {
            const txt = td.textContent || td.innerText;
            tr[i].style.display = txt.toUpperCase().indexOf(input) > -1 ? "" : "none";
        }
    }
}
