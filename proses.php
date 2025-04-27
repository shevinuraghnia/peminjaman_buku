<?php
// Tangkap data dari form
$nim = $_POST['nim'];
$nama = $_POST['nama_lengkap'];
$jenis_kelamin = $_POST['jenis_kelamin'] ?? '';
$prodi = $_POST['prodi'];
$alamat = $_POST['alamat'] ?? '';
$buku = $_POST['buku'];
$tgl_pinjam = $_POST['tgl_pinjam'];
$tgl_kembali = $_POST['tgl_kembali'];
$catatan = $_POST['catatan'] ?? '';

// Validasi tanggal
if (strtotime($tgl_kembali) <= strtotime($tgl_pinjam)) {
    echo "Error: Tanggal pengembalian harus lebih besar dari tanggal peminjaman.<br>";
    echo "<a href='index.php'>Kembali ke Form</a>";
    exit;
}

// Tampilkan data
echo "<h2>Data Peminjaman</h2>";
echo "NIM: $nim<br>";
echo "Nama: $nama<br>";
echo "Jenis Kelamin: $jenis_kelamin<br>";
echo "Prodi: $prodi<br>";
echo "Alamat: $alamat<br>";
echo "Buku: $buku<br>";
echo "Tanggal Peminjaman: $tgl_pinjam<br>";
echo "Tanggal Pengembalian: $tgl_kembali<br>";
echo "Catatan: $catatan<br>";
?>
