<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Produk dengan AJAX dan Validasi Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Demo CRUD</h2>
    
    <!-- Form untuk menambah/edit produk -->
    <form id="formDemo">
        <input type="hidden" id="id" name="id">
        
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" placeholder="Masukkan Nama"><br>
        <span class="error" id="errorName"></span><br>
        
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" placeholder="Masukkan Email"><br>
        <span class="error" id="errorEmail"></span><br>
        
        <button type="submit">Simpan</button>
    </form>
    
    <!-- Tabel untuk menampilkan data produk -->
    <br><br>
    <button class='addBtn'>Tambah</button>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <br><br>
        <tbody id="dataDemo">
            <!-- Data produk akan ditampilkan di sini melalui AJAX -->
        </tbody>
    </table>
    
    <!-- Div untuk menampilkan pesan status -->
    <div id="statusMessage"></div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="validate.js"></script>
</body>
</html>