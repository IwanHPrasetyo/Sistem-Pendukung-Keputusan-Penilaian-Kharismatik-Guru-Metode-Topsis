<?php  


include_once("koneksi.php");


					//$kode_tahun       			= $_POST['kodetahun'];
					$nip	          			      = $_POST['nip'];
					$kep_sosial		   			= $_POST['kep_sosial'];
					$kep_belajar      			= $_POST['kep_belajar'];
					$peng_sekolah	  			= $_POST['peng_sekolah'];
					$man_sda 			     	      = $_POST['man_sda'];
					$kewirausahaan		            = $_POST['kewirausahaan'];
					$super_belajar		            = $_POST['super_belajar'];

	 
         $no 	 = mysqli_query($conn,"select max(id_nilai) as nilai from nilai_topsis")or die(mysqli_error());
         $data_no  = mysqli_fetch_array($no);

         $not 	= $data_no['nilai'];

         $sql 	=	mysqli_query($conn,"insert into data_nilai_guru value('$nip','$kep_sosial','$kep_belajar'
         												,'$peng_sekolah','$man_sda','$kewirausahaan','$super_belajar')")or die(mysqli_error());
        	
         $sql1 	=	mysqli_query($conn,"insert into nilai_topsis value('','1','$nip','$kep_sosial')")or die(mysqli_error());
         $sql2 	=	mysqli_query($conn,"insert into nilai_topsis value('','2','$nip','$kep_belajar')")or die(mysqli_error());
         $sql3 	=	mysqli_query($conn,"insert into nilai_topsis value('','3','$nip','$peng_sekolah')")or die(mysqli_error());
         $sql4 	=	mysqli_query($conn,"insert into nilai_topsis value('','4','$nip','$man_sda')")or die(mysqli_error());
         $sql5 	=	mysqli_query($conn,"insert into nilai_topsis value('','5','$nip','$kewirausahaan')")or die(mysqli_error());
         $sql6 	=	mysqli_query($conn,"insert into nilai_topsis value('','6','$nip','$super_belajar')")or die(mysqli_error());

        
								
								


   if ($sql) {
   	header("location: index.php");
   }

   else{

   		echo mysql_error($sql);

   }


?>