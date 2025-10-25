<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "demo_ajax";

$mysqli = new mysqli($host, $user, $pass, $db);

if ($mysqli->connect_errno) {
    die("Koneksi gagal: " . $mysqli->connect_error);
}
?>
