<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Latihan 9 - Form Tambah Data</title>
</head>
<body>
  <h2>Tambah Data (Ajax)</h2>
  
  <form id="myForm">
    <label>Nama:</label><br>
    <input type="text" id="name" name="name" placeholder="Masukkan Nama"><br><br>

    <label>Email:</label><br>
    <input type="text" id="email" name="email" placeholder="Masukkan Email"><br><br>

    <input type="button" id="submitBtn" value="Simpan">
  </form>

  <div id="message"></div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function(){
      $('#submitBtn').click(function(){
        var name = $('#name').val();
        var email = $('#email').val();

        if(name == "" || email == ""){
          $('#message').html("<span style='color:red;'>Isi semua field!</span>");
          return;
        }

        $.ajax({
          url: 'simpan_data.php',
          type: 'POST',
          data: { name: name, email: email },
          success: function(response){
            $('#message').html(response);
            $('#name').val('');
            $('#email').val('');
          }
        });
      });
    });
  </script>
</body>
</html>
