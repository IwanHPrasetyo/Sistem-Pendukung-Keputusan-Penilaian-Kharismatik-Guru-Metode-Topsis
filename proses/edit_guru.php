<?php 
  include_once("koneksi.php");
  //session_start();
  

          $NIP            = $_POST['NIP'];
					$nama_guru      = $_POST['nama_guru'];
					$mapel          = $_POST['mapel'];
          $kelas          = $_POST['kelas'];
          
          

          
            
            $sql = mysqli_query($conn,"update data_guru set Nama = '$nama_guru', Mapel = '$mapel',  Kelas = '$kelas' where NIP = '$NIP'")or die (mysqli_error()); 
            
       
    

    if($sql){

      echo "
      <script>
        alert('Data Berhasil Diubah');
        window.location = '../Admin/pages/tabel-guru.php';
      </script>
      ";

    }

    elseif(!$sql){
      
            echo "
            <script>
              alert('Data Gagal Diubah');
              window.location = '../Admin/pages/form-guru.php';
            </script>
            ";
            
      
          }

      

         
  
      
   
					
	
	
 ?>