<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Latihan 13 - Form + Tampil Data v3</title>
</head>
<body>
  <h2>Tambah Data (AJAX + Tampil)</h2>

  <form id="myForm">
    <label for="name">Nama:</label><br>
    <input type="text" id="name" name="name" placeholder="Masukkan Nama"><br><br>

    <label for="email">Email:</label><br>
    <input type="text" id="email" name="email" placeholder="Masukkan Email"><br><br>

    <input type="button" id="submitBtn" value="Submit">
  </form>

  <div id="message"></div>

  <h3>Data Tersimpan:</h3>
  <div id="tampilData"></div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      function loadData() {
        $.ajax({
          url: 'tampil_data_v3.php',
          type: 'GET',
          success: function(response) {
            $('#tampilData').html(response);
          }
        });
      }

      // Load existing data when page loads
      loadData();

      $('#submitBtn').click(function() {
        var name = $('#name').val();
        var email = $('#email').val();
        var errorMessage = '';

        if (name == '') errorMessage += 'Nama tidak boleh kosong.<br>';
        if (email == '') errorMessage += 'Email tidak boleh kosong.<br>';

        if (errorMessage != '') {
          $('#message').html('<div style="color:red;">' + errorMessage + '</div>');
        } else {
          $.ajax({
            url: 'simpan_data_v2.php',
            type: 'POST',
            data: { name: name, email: email },
            success: function(response) {
              $('#message').html(response);
              $('#name').val('');
              $('#email').val('');
              loadData(); // refresh table
            }
          });
        }
      });
    });
  </script>
</body>
</html>
