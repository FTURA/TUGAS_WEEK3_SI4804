<?php
include_once('koneksi.php');

$sql = $mysqli->query("SELECT * FROM demo_crud ORDER BY id DESC");

if ($sql->num_rows > 0) {
    echo "<table border='1' cellpadding='5'>
          <tr><th>ID</th><th>Nama</th><th>Email</th></tr>";
    while ($row = $sql->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['nama']}</td>
                <td>{$row['email']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Belum ada data.";
}
?>
