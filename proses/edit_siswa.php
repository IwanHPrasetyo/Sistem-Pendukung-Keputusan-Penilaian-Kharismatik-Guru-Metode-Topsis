<?php 
  include_once("koneksi.php");
  //session_start();
  

          $NIS            = $_POST['NIS'];
					$nama_siswa     = $_POST['nama_siswa'];
					$kelas          = $_POST['kelas'];
          $jurusan        = $_POST['jurusan'];
          $password       = $_POST['password'];
          
          

          
            
            $sql = mysqli_query($conn,"update data_siswa set Nama = '$nama_siswa', Kelas = '$kelas', Jurusan = '$jurusan', Password = '$password' where NIS = '$NIS'")or die (mysqli_error()); 
            
       
    

    if($sql){

      echo "
      <script>
        alert('Data Berhasil Diubah');
        window.location = '../Admin/pages/tabel-siswa.php';
      </script>
      ";

    }

    elseif(!$sql){
      
            echo "
            <script>
              alert('Data Gagal Diubah');
              window.location = '../Admin/pages/form-siswa.php';
            </script>
            ";
            
      
          }

      

         
  
      
   
					
	
	
 ?>