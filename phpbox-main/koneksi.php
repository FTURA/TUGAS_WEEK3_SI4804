<?php
$host = "localhost"; 
$user = "root";        
$pass = "";            
$db   = "demo_ajax";   
$port = 3307;

$mysqli = new mysqli($host, $user, $pass, $db, $port);

if ($mysqli->connect_error) {
    die("Koneksi gagal: " . $mysqli->connect_error);
} else {
    echo "Koneksi berhasil ke database demo_ajax";
}
?>
