<?php
include_once('koneksi.php');

// Periksa apakah data dikirim melalui form
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Ambil nilai dari form
    $name  = trim($_POST['name']);
    $email = trim($_POST['email']);

    // Validasi sederhana
    if (empty($name) || empty($email)) {
        echo "<p style='color:red;'>Nama dan Email tidak boleh kosong!</p>";
        echo "<a href='form_tambah_data.php'>Kembali ke Form</a>";
        exit;
    }

    // Gunakan prepared statement untuk keamanan
    $stmt = $mysqli->prepare("INSERT INTO demo_crud (nama, email) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $email);

    if ($stmt->execute()) {
        echo "<p style='color:green;'>✅ Data berhasil disimpan!</p>";
        echo "<a href='form_tambah_data.php'>Tambah lagi</a>";
    } else {
        echo "<p style='color:red;'>❌ Gagal menyimpan data: " . $stmt->error . "</p>";
    }

    $stmt->close();
    $mysqli->close();
} else {
    echo "Akses tidak valid.";
}
?>
