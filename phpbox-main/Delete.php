<?php
include_once('koneksi.php');

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    
    $sql = mysqli_query($mysqli, "Delete from demo_crud where id ='$id'");
    //$mysqli adalah variabel yang digunakan pada file koneksi.php
    
    if($sql === TRUE){
        echo "Data berhasil dihapus";
    } else {
        echo "Data tidak valid";
    }
}
?>