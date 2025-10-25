<?php
include_once('koneksi.php');

if (isset($_POST['name']) && isset($_POST['email'])) {
    $name = $mysqli->real_escape_string($_POST['name']);
    $email = $mysqli->real_escape_string($_POST['email']);

    if ($name == "" || $email == "") {
        echo "<span style='color:red;'>Data tidak boleh kosong!</span>";
        exit;
    }

    $sql = $mysqli->query("INSERT INTO demo_crud (nama, email) VALUES ('$name', '$email')");

    if ($sql) {
        echo "<span style='color:green;'>Data berhasil disimpan!</span>";
    } else {
        echo "<span style='color:red;'>Gagal menyimpan data: {$mysqli->error}</span>";
    }
} else {
    echo "Data tidak valid.";
}
?>
