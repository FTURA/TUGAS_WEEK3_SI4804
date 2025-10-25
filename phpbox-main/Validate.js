$(document).ready(function() {
    // Fungsi untuk menampilkan data
    function loadData() {
        $.ajax({
            url: 'read.php',
            type: 'GET',
            success: function(response) {
                $('#dataDemo').html(response);
                $('#formDemo').hide();
            }
        });
    }
    loadData(); // Tampilkan data saat halaman dibuka
    
    //Tambah diklik
    $(document).on('click', '.addBtn', function() {
        $('#formDemo').show();
    });
    
    // Validasi form
    function validateForm() {
        let isValid = true;
        let nama = $('#name').val();
        let email = $('#email').val();
        
        if (nama === "") {
            $('#errorName').html('Nama harus diisi.');
            isValid = false;
        } else {
            $('#errorName').html('');
        }
        
        if (email === "") {
            $('#errorEmail').html('Email harus diisi.');
            isValid = false;
        } else {
            $('#errorEmail').html('');
        }
        
        return isValid;
    }
    
    // Menambah atau memperbarui
    $('#formDemo').on('submit', function(e) {
        e.preventDefault();
        
        if (validateForm()) {
            var formData = $(this).serialize();
            $.ajax({
                url: 'create.php',
                type: 'POST',
                data: formData,
                success: function(response) {
                    //$('#statusMessage').html(response);
                    $('#statusMessage').html(response)
                        .css({
                            'background-color': 'green',
                            'color': 'white'
                        })
                        .fadeIn();
                    $('#formDemo')[0].reset(); // Reset form
                    loadData(); // Muat ulang data
                }
            });
            // Sembunyikan kotak pesan setelah beberapa detik
            setTimeout(function() {
                $('#statusMessage').fadeOut();
            }, 5000);
        }
    });
    
    // Edit
    $(document).on('click', '.editBtn', function() {
        $('#formDemo').show();
        var id = $(this).data('id');
        var nama = $(this).data('name');
        var email = $(this).data('email');
        
        $('#id').val(id);
        $('#name').val(nama);
        $('#email').val(email);
    });
    
    // Hapus
    $(document).on('click', '.deleteBtn', function() {
        var id = $(this).data('id');
        if (confirm('Anda yakin ingin menghapus data ini?')) {
            $.ajax({
                url: 'delete.php',
                type: 'POST',
                data: { id: id },
                success: function(response) {
                    $('#statusMessage').html(response);
                    loadData(); // Muat ulang data
                }
            });
        }
    });
});