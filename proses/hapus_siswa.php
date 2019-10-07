<?php 
	include_once("koneksi.php");
	//session_start();


					$id        	   = $_GET['id'];
					
					
         $sql =mysqli_query($conn,"DELETE from data_siswa WHERE NIS='$id'");
								

if ($sql) {
	echo "
	<script>
	  alert('Data Berhasil Dihapus');
	  window.location = '../Admin/pages/tabel-siswa.php';
	</script>
	";
}

else{

	echo "
	<script>
	  alert('Data Gagal Dihapus');
	  window.location = '../Admin/pages/tabel-siswa.php';
	</script>
	";	
}							


      
         									
	
 ?>