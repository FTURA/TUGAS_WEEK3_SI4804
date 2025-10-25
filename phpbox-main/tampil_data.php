<?php
include_once('connect.php');

$sql = $mysqli->query("SELECT * FROM demo_crud ORDER BY id DESC");

if ($sql->num_rows>0){
echo "<table border='1' cellpadding='5'>
        <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Aksi</th>
        </tr>";
        while ($row = $sql->fetch_assoc()){
            echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['nama']}</td>
            <td>{$row['email']}</td>
            <td>
              <button class='editBtn' 
                data-id='{$row['id']}'
                data-nama='{$row['nama']}'
                data-email='{$row['email']}'>Ubah</button>
              <button class='hapusBtn' 
                data-id='{$row['id']}'>Hapus</button>
            </td>
          </tr>";
        }
        echo "</table>";
}
else{
    echo "Tidak ada Data!";
}
?>