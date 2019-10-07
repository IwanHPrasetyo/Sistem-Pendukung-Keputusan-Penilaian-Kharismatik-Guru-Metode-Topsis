<?php 
  include_once("koneksi.php");
  //session_start();
  

          $NIS            = $_POST['NIS'];
					$nama_siswa     = $_POST['nama_siswa'];
					$kelas          = $_POST['kelas'];
          $jurusan        = $_POST['jurusan'];
          $password       = $_POST['password'];
          
          

          
            
            $sql = mysqli_query($conn,"insert into data_siswa values ('$NIS','$nama_siswa','$kelas','$jurusan','$password')")or die (mysqli_error()); 
            
       
    

    if($sql){

      echo "
      <script>
        alert('Data Berhasil Ditambahkan');
        window.location = '../Admin/pages/tabel-siswa.php';
      </script>
      ";

    }

    elseif(!$sql){
      
            echo "
            <script>
              alert('Data Sudah Ditambahkan');
              window.location = '../Admin/pages/form-siswa.php';
            </script>
            ";
            
      
          }

      

         
  
      
   
					
	
	
 ?>