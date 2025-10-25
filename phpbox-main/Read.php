<?php
include_once('koneksi.php');

$sql = mysqli_query($mysqli, "SELECT * FROM demo_crud ORDER BY id DESC");

if ($sql->num_rows > 0) {
    while ($row = $sql->fetch_assoc()) {
        echo "<tr>
            <td>" . $row['id'] . "</td>
            <td>" . $row['nama'] . "</td>
            <td>" . $row['email'] . "</td>
            <td>
                <button class='editBtn' data-id='" . $row['id'] . "' data-name='" . $row['nama'] . "' data-email='" . $row['email'] . "'>Ubah</button>
                <button class='deleteBtn' data-id='" . $row['id'] . "'>Hapus</button>
            </td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "Belum ada data.";
}
?>