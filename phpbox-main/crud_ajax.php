<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Latihan 15 - CRUD AJAX Lengkap</title>
</head>
<body>
  <h2>CRUD Mahasiswa (AJAX)</h2>

  <form id="formData">
    <input type="hidden" id="id" name="id">
    
    <label>Nama:</label><br>
    <input type="text" id="nama" name="nama"><br><br>

    <label>Email:</label><br>
    <input type="text" id="email" name="email"><br><br>

    <input type="button" id="btnSave" value="Simpan">
    <input type="button" id="btnUpdate" value="Update" style="display:none;">
  </form>

  <div id="message"></div>

  <h3>Data Mahasiswa:</h3>
  <div id="tampilData"></div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function(){

      // Function to load data
      function loadData() {
        $.ajax({
          url: "tampil_data.php",
          type: "GET",
          success: function(data){
            $("#tampilData").html(data);
          }
        });
      }

      loadData();

      // Simpan (Create)
      $("#btnSave").click(function(){
        var nama = $("#nama").val();
        var email = $("#email").val();

        if(nama === "" || email === ""){
          $("#message").html("<span style='color:red;'>Semua field wajib diisi!</span>");
          return;
        }

        $.ajax({
          url: "proses_simpan.php",
          type: "POST",
          data: { nama: nama, email: email },
          success: function(response){
            $("#message").html(response);
            $("#nama").val('');
            $("#email").val('');
            loadData();
          }
        });
      });

      // Ubah (Update)
      $(document).on("click", ".editBtn", function(){
        var id = $(this).data("id");
        var nama = $(this).data("nama");
        var email = $(this).data("email");

        $("#id").val(id);
        $("#nama").val(nama);
        $("#email").val(email);

        $("#btnSave").hide();
        $("#btnUpdate").show();
      });

      $("#btnUpdate").click(function(){
        var id = $("#id").val();
        var nama = $("#nama").val();
        var email = $("#email").val();

        $.ajax({
          url: "proses_ubah.php",
          type: "POST",
          data: { id: id, nama: nama, email: email },
          success: function(response){
            $("#message").html(response);
            $("#btnSave").show();
            $("#btnUpdate").hide();
            $("#formData")[0].reset();
            loadData();
          }
        });
      });

      // Hapus (Delete)
      $(document).on("click", ".hapusBtn", function(){
        if(confirm("Yakin ingin menghapus data ini?")){
          var id = $(this).data("id");

          $.ajax({
            url: "proses_hapus.php",
            type: "POST",
            data: { id: id },
            success: function(response){
              $("#message").html(response);
              loadData();
            }
          });
        }
      });
    });
  </script>
</body>
</html>
