<?php
if (isset($_POST['angka'])) {
    $n = $_POST['angka'];
    echo "Inputan: $n <br>Hasil: ";

    for ($i = 1; $i <= $n; $i++) {
        if ($i == 1 || $i == $n) {
            echo $i . " ";
        } else {
            echo "* ";
        }
    }
} else {
    echo "Tidak ada input.";
}
?>
