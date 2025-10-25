<?php
echo "<h2>Hasil Pemeriksaan Bilangan</h2>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $angka = $_POST['angka'];

    if ($angka % 2 == 0) {
        echo "Inputan: $angka <br>";
        echo "Hasil: $angka adalah bilangan <b>genap</b>.";
    } else {
        echo "Inputan: $angka <br>";
        echo "Hasil: $angka adalah bilangan <b>ganjil</b>.";
    }
} else {
    echo "Tidak ada data yang dikirim.";
}
?>
