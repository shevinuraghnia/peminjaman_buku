<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form peminjaman Buku</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Formulir Peminjaman Buku</h2>
        <form action="proses.php" method="post">
            <label for="nim"> NIM : </label>
            <input type="text" id="nim" name="nim" required><br><br>

            <label for="nama_lengkap"> Nama : </label>
            <input type="text" id="nama_lengkap" name="nama_lengkap" required><br><br>

            <label for="jenis_kelamin"> Jenis Kelamin  : </label>
            <input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki
            <input type="radio" name="jenis_kelamin" value="Perempuan" required> Perempuan <br><br>

            <label for="prodi">  Prodi : </label>
            <select id="prodi" name="prodi" required>
                <option value="">-- Pilih Prodi--</option>
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Sistem Informasi">Sistem Informasi</option>
                <option value="Teknik Komputer">Teknik Komputer</option>
            </select><br><br>

            <label for="alamat"> Alamat : </label>
            <textarea id="alamat" name="alamat"></textarea><br><br>

            <label for="buku"> Buku : </label>
            <textarea id="buku" name="buku" required></textarea><br><br>

            <label for="tgl_pinjam"> Tanggal Peminjaman :</label>
            <input type="date" id="tgl_pinjam" name="tgl_pinjam" required><br><br>
            
            <label for="tgl_kembali"> Tanggal Pengembalian :</label>
            <input type="date" id="tgl_kembali" name="tgl_kembali" required><br><br>
            
            <label for="catatan"> Catatan : </label>
            <textarea id="catatan" name="catatan"></textarea><br><br>

            <input type="submit" value="Kirim">
        </form>
    </div>
</body>
</html>