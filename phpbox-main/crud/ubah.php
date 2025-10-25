<?php  
    include_once ("koneksi.php");  
      
    $id 	= $_GET['id'];  
    $sql 	= mysqli_query($mysqli,"select * from tbl_mahasiswa where id=$id");  
    while($data = mysqli_fetch_array($sql)){  
       $kelompok 		= $data['kelompok'];  
       $nama_lengkap 	= $data['nama_lengkap'];  
       $nim 			= $data['nim'];  
       $email 			= $data['email'];  
       $nomor_kontak 	= $data['nomor_kontak'];  
       $program_studi 	= $data['program_studi'];  
   }  
     
		if(isset($_POST['Proses_Update'])){  
			$id = $_POST['id'];  
			$kelompok = $_POST['kelompok'];  
			$nama_lengkap = $_POST['nama_lengkap'];  
			$nim = $_POST['nim'];
			$email = $_POST['email'];  
			$nomor_kontak = $_POST['nomor_kontak'];  
			$program_studi = $_POST['program_studi'];  
          
			$sql=mysqli_query($mysqli,"update tbl_mahasiswa set kelompok='$kelompok', nama_lengkap='$nama_lengkap', nim='$nim', email='$email', nomor_kontak='$n
omor_kontak', program_studi='$program_studi' where id=$id");  
			header("Location:tampil.php");  
		}  
?>  
   
<html>  
    <head>  
        <title>Nama Kalian</title>  
    </head>  
      
    <body>  
        <h1> Ubah Data Mahasiswa </h1>  
        <hr>  
          
         <form action="ubah.php" method="post">  
            <table width="100%" border="1">  
                <tr>  
                    <td>Masukkan Kelompok</td>  
                    <td>  
                        <input type="text" name="kelompok" size="100%" value=<?php echo $kelompok; ?>>  
                    </td>  
                </tr>  
                  
                <tr>  
                     <td>Masukkan Nama Lengkap</td>  
                    <td>  
                        <input type="text" name="nama_lengkap" size="100%" value=<?php echo $nama_lengkap; ?>>  
                    </td>  
                </tr>  
                  
                <tr>  
                    <td>Masukkan NIM</td>  
                    <td>  
                        <input type="text" name="nim" size="0%" value=<?php echo $nim; ?>>  
                     </td>
                </tr>  
                  
                <tr>  
                    <td>Masukkan Nomor Kontak</td>  
                    <td>  
                        <input type="text" name="nomor_kontak" size="0%" value=<?php echo $nomor_kontak; ?>>  
                    </td>  
                </tr>  
                  
                 <tr>  
                    <td>Masukkan Email</td>  
                    <td>  
                        <input type="text" name="email" size="0%" value=<?php echo $email; ?>>  
                    </td>  
                </tr>  
                  
                <tr>  
                    <td>Masukkan Program Studi</td>  
                    <td>  
                         <input type="text" name="program_studi" size="100%" value=<?php echo $program_studi; ?>>  
                    </td>  
                </tr>  
                  
                <tr>  
                    <td colspan="" align="center">  
                        <input type="hidden" name="id" size="100%" value=<?php echo $_GET['id']; ?>>  
                        <input type="submit" name="Proses_Update" value="UbahData">  
                    </td>  
                </tr>  
             </table>  
        </form>  
    </body>  
</html>