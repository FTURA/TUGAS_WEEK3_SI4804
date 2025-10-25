<?php
include_once('koneksi.php');

if (isset($_POST['name']) && isset($_POST['email'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);

    if ($name == '' || $email == '') {
        echo "<span style='color:red;'>Nama dan Email wajib diisi.</span>";
        exit;
    }

    $sql = $mysqli->query("INSERT INTO demo_crud (nama, email) VALUES ('$name', '$email')");

    if ($sql) {
        echo "<span style='color:green;'>Data berhasil disimpan!</span>";
    } else {
        echo "<span style='color:red;'>Gagal menyimpan data: {$mysqli->error}</span>";
    }
} else {
    echo "<span style='color:red;'>Data tidak valid.</span>";
}
?>
