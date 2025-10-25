<!DOCTYPE html>
<html>
<head>
    <title>Form Tambah Data</title>
</head>
<body>
    <h2>Form Tambah Data Mahasiswa</h2>

    <form method="post" action="simpan_data.php">
        <label>Nama:</label><br>
        <input type="text" name="name" placeholder="Masukkan Nama" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" placeholder="Masukkan Email" required><br><br>

        <input type="submit" value="Simpan">
    </form>

</body>
</html>
