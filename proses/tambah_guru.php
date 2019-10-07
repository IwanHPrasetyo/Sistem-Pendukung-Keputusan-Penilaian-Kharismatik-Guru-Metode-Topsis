<?php 
  include_once("koneksi.php");
  //session_start();
  

          $NIP            = $_POST['NIP'];
					$nama_guru      = $_POST['nama_guru'];
					$mapel          = $_POST['mapel'];
          $kelas          = $_POST['kelas'];
          
          

          
            
            $sql = mysqli_query($conn,"insert into data_guru values ('$NIP','$nama_guru','$mapel','$kelas')")or die (mysqli_error()); 
            
       
    

    if($sql){

      echo "
      <script>
        alert('Data Berhasil Ditambahkan');
        window.location = '../Admin/pages/tabel-guru.php';
      </script>
      ";

    }

    elseif(!$sql){
      
            echo "
            <script>
              alert('Data Sudah Ditambahkan');
              window.location = '../Admin/pages/form-guru.php';
            </script>
            ";
            
      
          }

      

         
  
      
   
					
	
	
 ?>