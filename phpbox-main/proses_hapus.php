<?php
include_once('connect.php');

if(isset($_POST['id']))
{
    $id = $_POST['id'];
    $sql = $mysqli->query("DELETE FROM demo_crud WHERE id='$id'");

    echo $sql ? "<span style='color:green;'>Data berhasil dihapus!</span>" 
             : "<span style='color:red;'>Gagal menghapus data!</span>";
}
?>