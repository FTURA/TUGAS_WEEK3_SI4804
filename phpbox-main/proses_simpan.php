<?php
include_once('connect.php');

if (isset($_POST['nama'], $_POST['email']))
{
    $nama = trim($_POST['nama']);
    $email = trim($_POST['email']);

    if ($nama == "" || $email == "")
    {
        echo "<span style='color:red;'>Field tidak boleh kosong!</span>";
        exit;
    }

    $sql=$mysqli->query("INSERT INTO demo_crud (nama, email) VALUES ('$nama','$email')");

    echo $sql ? "<span style='color:green;'>Data berhasil disimpan!</span>"
              : "<span style='color:red;'>Gagal menyimpan data!</span>";
}
?>