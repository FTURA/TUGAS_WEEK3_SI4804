<?php
include_once('connect.php');

if (isset($_POST['id'], $_POST['nama'], $_POST['email']))
{
    $id = $_POST['id'];
    $nama = trim($_POST['nama']);
    $email = trim($_POST['email']);

    $sql = $mysqli->query("UPDATE demo_crud SET nama='$nama', email='$email' WHERE id='$id'");

    echo $sql ? "<span style='color:green;'>Data berhasil diubah!</span>" 
              : "<span style='color:red;'>Gagal mengubah data!</span>";

}

?>