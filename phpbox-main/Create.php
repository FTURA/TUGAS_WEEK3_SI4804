<?php
include_once('koneksi.php');

if (isset($_POST['name']) && isset($_POST['email'])) {
    $id = isset($_POST['id']) ? $_POST['id'] : '';
    $name = $_POST['name'];
    $email = $_POST['email'];
    
    if($id){
        $sql = mysqli_query($mysqli, "UPDATE demo_crud SET nama = '$name', email = '$email' WHERE id = '$id'");
        //$mysqli adalah variabel yang digunakan pada file koneksi.php
        
        if($sql === TRUE){
            echo "Data berhasil disimpan";
        } else {
            echo "Data tidak valid";
        }
    }else{
        $sql = mysqli_query($mysqli, "INSERT INTO demo_crud (nama, email) VALUES ('$name', '$email')");
        //$mysqli adalah variabel yang digunakan pada file koneksi.php
        
        if($sql === TRUE){
            echo "Data berhasil disimpan";
        } else {
            echo "Data tidak valid";
        }
    }
}
?>