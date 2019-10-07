<?php 
	include_once("koneksi.php");
	//session_start();


					$id        	   = $_GET['id'];
					
					
         $sql =mysqli_query($conn,"DELETE from data_guru WHERE NIP='$id'");
								

if ($sql) {
	echo "
	<script>
	  alert('Data Berhasil Dihapus');
	  window.location = '../Admin/pages/tabel-guru.php';
	</script>
	";
}

else{

	echo "
	<script>
	  alert('Data Gagal Dihapus');
	  window.location = '../Admin/pages/tabel-guru.php';
	</script>
	";	
}							


      
         									
	
 ?>