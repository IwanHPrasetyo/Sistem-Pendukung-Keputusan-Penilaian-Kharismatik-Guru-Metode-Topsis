<?php  
session_start();

$Id   = $_SESSION['Id'];
$Nama = $_SESSION['Nama_Siswa'];

if($Id == "" || $Nama == ""){

    header("location:../");

  }

include_once("koneksi.php");

          $SVDA = 0;
          $KTL  = 0;
          $KTKS = 0;
          $RP   = 0;
          $PYTK = 0;
          $PD   = 0;

          $soal1  = $_POST['soal1'];
          $soal2  = $_POST['soal2'];
          $soal3  = $_POST['soal3'];
          $soal4  = $_POST['soal4'];
          $soal5  = $_POST['soal5'];
          $soal6  = $_POST['soal6'];
          $soal7  = $_POST['soal7'];
          $soal8  = $_POST['soal8'];
          $soal9  = $_POST['soal9'];
          $soal10 = $_POST['soal10'];
          $soal11 = $_POST['soal11'];
          $soal12 = $_POST['soal12'];
          $soal13 = $_POST['soal13'];
          $soal14 = $_POST['soal14'];
          $soal15 = $_POST['soal15'];
          $soal16 = $_POST['soal16'];
          $soal17 = $_POST['soal17'];
          $soal18 = $_POST['soal18'];
          $soal19 = $_POST['soal19'];
          $soal20 = $_POST['soal20'];
          $soal21 = $_POST['soal21'];
          $soal22 = $_POST['soal22'];
          $soal23 = $_POST['soal23'];


          if ($soal1 == "A. Sangat Sering") {
            $SVDA = $SVDA + 5;
          } else if ($soal1 == "B. Sering"){
            $SVDA = $SVDA + 4;
          }
          else if ($soal1 == "C. Kadang-kadang"){
            $SVDA = $SVDA + 3;
          }else if ($soal1 == "D. Jarang"){
            $SVDA = $SVDA + 2;
          }else if ($soal1 == "E. Tidak Pernah"){
            $SVDA = $SVDA + 1;
          }
          
          if ($soal2 == "A. Sangat Sering") {
            $SVDA = $SVDA + 5;
          } else if ($soal2 == "B. Sering"){
            $SVDA = $SVDA + 4;
          }
          else if ($soal2 == "C. Kadang-kadang"){
            $SVDA = $SVDA + 3;
          }else if ($soal2 == "D. Jarang"){
            $SVDA = $SVDA + 2;
          }else if ($soal2 == "E. Tidak Pernah"){
            $SVDA = $SVDA + 1;
          }

          if ($soal3 == "A. Sangat Sering") {
            $SVDA = $SVDA + 5;
          } else if ($soal3 == "B. Sering"){
            $SVDA = $SVDA + 4;
          }
          else if ($soal3 == "C. Kadang-kadang"){
            $SVDA = $SVDA + 3;
          }else if ($soal3 == "D. Jarang"){
            $SVDA = $SVDA + 2;
          }else if ($soal3 == "E. Tidak Pernah"){
            $SVDA = $SVDA + 1;
          }

          if ($soal4 == "A. Sangat Sering") {
            $SVDA = $SVDA + 5;
          } else if ($soal4 == "B. Sering"){
            $SVDA = $SVDA + 4;
          }
          else if ($soal4 == "C. Kadang-kadang"){
            $SVDA = $SVDA + 3;
          }else if ($soal4 == "D. Jarang"){
            $SVDA = $SVDA + 2;
          }else if ($soal4 == "E. Tidak Pernah"){
            $SVDA = $SVDA + 1;
          }

          if ($soal5 == "A. Sangat Sering") {
            $SVDA = $SVDA + 5;
          } else if ($soal5 == "B. Sering"){
            $SVDA = $SVDA + 4;
          }
          else if ($soal5 == "C. Kadang-kadang"){
            $SVDA = $SVDA + 3;
          }else if ($soal5 == "D. Jarang"){
            $SVDA = $SVDA + 2;
          }else if ($soal5 == "E. Tidak Pernah"){
            $SVDA = $SVDA + 1;
          }

          if ($soal6 == "A. Sangat Sering") {
            $SVDA = $SVDA + 5;
          } else if ($soal6 == "B. Sering"){
            $SVDA = $SVDA + 4;
          }
          else if ($soal6 == "C. Kadang-kadang"){
            $SVDA = $SVDA + 3;
          }else if ($soal6 == "D. Jarang"){
            $SVDA = $SVDA + 2;
          }else if ($soal6 == "E. Tidak Pernah"){
            $SVDA = $SVDA + 1;
          }

          if ($soal7 == "A. Sangat Sering") {
            $SVDA = $SVDA + 5;
          } else if ($soal7 == "B. Sering"){
            $SVDA = $SVDA + 4;
          }
          else if ($soal7 == "C. Kadang-kadang"){
            $SVDA = $SVDA + 3;
          }else if ($soal7 == "D. Jarang"){
            $SVDA = $SVDA + 2;
          }else if ($soal7 == "E. Tidak Pernah"){
            $SVDA = $SVDA + 1;
          }

          if ($soal8 == "A. Sangat Sering") {
            $KTL = $KTL + 5;
          } else if ($soal8 == "B. Sering"){
            $KTL = $KTL + 4;
          }
          else if ($soal8 == "C. Kadang-kadang"){
            $KTL = $KTL + 3;
          }else if ($soal8 == "D. Jarang"){
            $KTL = $KTL + 2;
          }else if ($soal8 == "E. Tidak Pernah"){
            $KTL = $KTL + 1;
          }

          if ($soal9 == "A. Sangat Sering") {
            $KTL = $KTL + 5;
          } else if ($soal9 == "B. Sering"){
            $KTL = $KTL + 4;
          }
          else if ($soal9 == "C. Kadang-kadang"){
            $KTL = $KTL + 3;
          }else if ($soal9 == "D. Jarang"){
            $KTL = $KTL + 2;
          }else if ($soal9 == "E. Tidak Pernah"){
            $KTL = $KTL + 1;
          }

          if ($soal10 == "A. Sangat Sering") {
            $KTL = $KTL + 5;
          } else if ($soal10 == "B. Sering"){
            $KTL = $KTL + 4;
          }
          else if ($soal10 == "C. Kadang-kadang"){
            $KTL = $KTL + 3;
          }else if ($soal10 == "D. Jarang"){
            $KTL = $KTL + 2;
          }else if ($soal10 == "E. Tidak Pernah"){
            $KTL = $KTL + 1;
          }

          if ($soal11 == "A. Sangat Sering") {
            $KTL = $KTL + 5;
          } else if ($soal11 == "B. Sering"){
            $KTL = $KTL + 4;
          }
          else if ($soal11 == "C. Kadang-kadang"){
            $KTL = $KTL + 3;
          }else if ($soal11 == "D. Jarang"){
            $KTL = $KTL + 2;
          }else if ($soal11 == "E. Tidak Pernah"){
            $KTL = $KTL + 1;
          }

          if ($soal12 == "A. Sangat Sering") {
            $KTKS = $KTKS + 5;
          } else if ($soal12 == "B. Sering"){
            $KTKS = $KTKS + 4;
          }
          else if ($soal12 == "C. Kadang-kadang"){
            $KTKS = $KTKS + 3;
          }else if ($soal12 == "D. Jarang"){
            $KTKS = $KTKS + 2;
          }else if ($soal12 == "E. Tidak Pernah"){
            $KTKS = $KTKS + 1;
          }

          if ($soal13 == "A. Sangat Sering") {
            $KTKS = $KTKS + 5;
          } else if ($soal13 == "B. Sering"){
            $KTKS = $KTKS + 4;
          }
          else if ($soal13 == "C. Kadang-kadang"){
            $KTKS = $KTKS + 3;
          }else if ($soal13 == "D. Jarang"){
            $KTKS = $KTKS + 2;
          }else if ($soal13 == "E. Tidak Pernah"){
            $KTKS = $KTKS + 1;
          }

          if ($soal14 == "A. Sangat Sering") {
            $KTKS = $KTKS + 5;
          } else if ($soal14 == "B. Sering"){
            $KTKS = $KTKS + 4;
          }
          else if ($soal14 == "C. Kadang-kadang"){
            $KTKS = $KTKS + 3;
          }else if ($soal14 == "D. Jarang"){
            $KTKS = $KTKS + 2;
          }else if ($soal14 == "E. Tidak Pernah"){
            $KTKS = $KTKS + 1;
          }

          if ($soal15 == "A. Sangat Sering") {
            $RP = $RP + 5;
          } else if ($soal15 == "B. Sering"){
            $RP = $RP + 4;
          }
          else if ($soal15 == "C. Kadang-kadang"){
            $RP = $RP + 3;
          }else if ($soal15 == "D. Jarang"){
            $RP = $RP + 2;
          }else if ($soal15 == "E. Tidak Pernah"){
            $RP = $RP + 1;
          }

          if ($soal16 == "A. Sangat Sering") {
            $RP = $RP + 5;
          } else if ($soal16 == "B. Sering"){
            $RP = $RP + 4;
          }
          else if ($soal16 == "C. Kadang-kadang"){
            $RP = $RP + 3;
          }else if ($soal16 == "D. Jarang"){
            $RP = $RP + 2;
          }else if ($soal16 == "E. Tidak Pernah"){
            $RP = $RP + 1;
          }

          if ($soal17 == "A. Sangat Sering") {
            $RP = $RP + 5;
          } else if ($soal17 == "B. Sering"){
            $RP = $RP + 4;
          }
          else if ($soal17 == "C. Kadang-kadang"){
            $RP = $RP + 3;
          }else if ($soal17 == "D. Jarang"){
            $RP = $RP + 2;
          }else if ($soal17 == "E. Tidak Pernah"){
            $RP = $RP + 1;
          }

          if ($soal18 == "A. Sangat Sering") {
            $PYTK = $PYTK + 5;
          } else if ($soal18 == "B. Sering"){
            $PYTK = $PYTK + 4;
          }
          else if ($soal18 == "C. Kadang-kadang"){
            $PYTK = $PYTK + 3;
          }else if ($soal18 == "D. Jarang"){
            $PYTK = $PYTK + 2;
          }else if ($soal18 == "E. Tidak Pernah"){
            $PYTK = $PYTK + 1;
          }

          if ($soal19 == "A. Sangat Sering") {
            $PYTK = $PYTK + 5;
          } else if ($soal19 == "B. Sering"){
            $PYTK = $PYTK + 4;
          }
          else if ($soal19 == "C. Kadang-kadang"){
            $PYTK = $PYTK + 3;
          }else if ($soal19 == "D. Jarang"){
            $PYTK = $PYTK + 2;
          }else if ($soal19 == "E. Tidak Pernah"){
            $PYTK = $PYTK + 1;
          }

          if ($soal20 == "A. Sangat Sering") {
            $PYTK = $PYTK + 5;
          } else if ($soal20 == "B. Sering"){
            $PYTK = $PYTK + 4;
          }
          else if ($soal20 == "C. Kadang-kadang"){
            $PYTK = $PYTK + 3;
          }else if ($soal20 == "D. Jarang"){
            $PYTK = $PYTK + 2;
          }else if ($soal20 == "E. Tidak Pernah"){
            $PYTK = $PYTK + 1;
          }

          if ($soal21 == "A. Sangat Sering") {
            $PD = $PD + 5;
          } else if ($soal21 == "B. Sering"){
            $PD = $PD + 4;
          }
          else if ($soal21 == "C. Kadang-kadang"){
            $PD = $PD + 3;
          }else if ($soal21 == "D. Jarang"){
            $PD = $PD + 2;
          }else if ($soal21 == "E. Tidak Pernah"){
            $PD = $PD + 1;
          }

          if ($soal22 == "A. Sangat Sering") {
            $PD = $PD + 5;
          } else if ($soal22 == "B. Sering"){
            $PD = $PD + 4;
          }
          else if ($soal22 == "C. Kadang-kadang"){
            $PD = $PD + 3;
          }else if ($soal22 == "D. Jarang"){
            $PD = $PD + 2;
          }else if ($soal22 == "E. Tidak Pernah"){
            $PD = $PD + 1;
          }

          if ($soal23 == "A. Sangat Sering") {
            $PD = $PD + 5;
          } else if ($soal23 == "B. Sering"){
            $PD = $PD + 4;
          }
          else if ($soal23 == "C. Kadang-kadang"){
            $PD = $PD + 3;
          }else if ($soal23 == "D. Jarang"){
            $PD = $PD + 2;
          }else if ($soal23 == "E. Tidak Pernah"){
            $PD = $PD + 1;
          }

					//$kode_tahun       			= $_POST['kodetahun'];
					$nip	          			= $_GET['id'];
					$kep_sosial		   			= $SVDA;
					$kep_belajar      		= $KTL;
					$peng_sekolah	  			= $KTKS;
					$man_sda 			     	  = $RP;
					$kewirausahaan		    = $PYTK;
          $super_belajar		    = $PD;
          
          $sql_data_nilai 	=	mysqli_query($conn,"INSERT into data_nilai_guru_total values('$nip','$Id','$kep_sosial','$kep_belajar','$peng_sekolah','$man_sda','$kewirausahaan','$super_belajar')")or die(mysqli_error());
          //$data_nilai       = mysqli_fetch_array($sql_data_nilai); 
          
          $sql_jumlah_data    = mysqli_query($conn,"SELECT count(*) as Jumlah, NIP from data_nilai_guru_total group by NIP");
          

          while ($data_jumlah=$sql_jumlah_data->fetch_array()) {


                  $NIP = $data_jumlah['NIP'];
                
                  $sql_rata  = mysqli_query($conn,"SELECT NIP, AVG(kep_sosial) as kep_sosial, AVG(kep_belajar) as kep_belajar, AVG(peng_sekolah) as peng_sekolah, AVG(man_sda) as man_sda,AVG(kewirausahaan) as kewirausahaan, AVG(super_belajar) as super_belajar FROM data_nilai_guru_total where NIP = '$NIP'")or die(mysqli_error());
                  $data_rata = mysqli_fetch_array($sql_rata);

                  $kep_sosial2    = $data_rata['kep_sosial'];
                  $kep_belajar2   = $data_rata['kep_belajar'];
                  $peng_sekolah2  = $data_rata['peng_sekolah'];
                  $man_sda2       = $data_rata['man_sda'];
                  $kewirausahaan2 = $data_rata['kewirausahaan'];
                  $super_belajar2 = $data_rata['super_belajar'];

                  $sql_nilai_rata_guru=mysqli_query($conn,"Delete from data_nilai_guru where NIP='$NIP'")or die(mysqli_error());
                  
                  

                  $sql 	    =	mysqli_query($conn,"INSERT into data_nilai_guru values('$NIP','$kep_sosial2','$kep_belajar2','$peng_sekolah2','$man_sda2','$kewirausahaan2','$super_belajar2')")or die(mysqli_error());

                  $no 	= mysqli_query($conn,"select max(id_nilai) as nilai from nilai_topsis")or die(mysqli_error());

                  $data_no  = mysqli_fetch_array($no);

                  $not 	= $data_no['nilai']+1;

                  $sql_rangking=mysqli_query($conn,"Delete from rangking")or die(mysqli_error());
                  $sql_nilai_rata_guru=mysqli_query($conn,"Delete from nilai_topsis where NIP='$NIP'")or die(mysqli_error());
                  
                    
                  $sql1 	=	mysqli_query($conn,"insert into nilai_topsis value('','1','$NIP','$kep_sosial2')")or die(mysqli_error());
                  $sql2 	=	mysqli_query($conn,"insert into nilai_topsis value('','2','$NIP','$kep_belajar2')")or die(mysqli_error());
                  $sql3 	=	mysqli_query($conn,"insert into nilai_topsis value('','3','$NIP','$peng_sekolah2')")or die(mysqli_error());
                  $sql4 	=	mysqli_query($conn,"insert into nilai_topsis value('','4','$NIP','$man_sda2')")or die(mysqli_error());
                  $sql5 	=	mysqli_query($conn,"insert into nilai_topsis value('','5','$NIP','$kewirausahaan2')")or die(mysqli_error());
                  $sql6 	=	mysqli_query($conn,"insert into nilai_topsis value('','6','$NIP','$super_belajar2')")or die(mysqli_error());

          }

	 

spl_autoload_register(function($class){
  require_once $class.'.php';

 


});

$topsis = new Topsis();
 ?>

<!--Tampil Data Kriteria-->

<h2>Kriteria</h2>
<table border="1" cellspacing="0" width="400" height="200">
  <tr>
    <th>No</th>
    <th>Nama Kriteria</th>
    <th>Bobot</th>
  </tr>

  <?php
    $no=1;
    $kriteria = $topsis->get_data_kriteria();
    $jml_kriteria = $kriteria->rowCount();
    while ($data_kriteria = $kriteria->fetch(PDO::FETCH_ASSOC)) {
  ?>

  <tr>
    <td>C<?php echo $data_kriteria['id_kriteria']; ?></td>
    <td><?php echo $data_kriteria['nama_kriteria']; ?></td>
    <td><?php echo $data_kriteria['bobot']; ?></td>
  </tr>

  <?php } ?>
</table>

<br><br><hr>

<!--Tampil Data Produk -->
<h2>Produk</h2>
<table border="1" cellspacing="0" width="400" height="200">
  <tr>
    <th>NIP</th>
    <th>Kepemimpinan dan Sosial</th>
    <th>Kepemimpinan dan Pembelajaran</th>
    <th>Pengembangan Sekolah</th>
    <th>Manajemen Sumber Daya</th>
    <th>Kewirausahaan</th>
    <th>Supervisi Pembelajaran</th>
  </tr>

  <?php
    $no=1;
    $produk = $topsis->get_data_produk();
    while ($data_produk = $produk->fetch(PDO::FETCH_ASSOC)) {
  ?>
  <tr>
    <td>K<?php echo $data_produk['NIP']; ?></td>
    <td><?php echo $data_produk['kep_sosial']; ?></td>
    <td><?php echo $data_produk['kep_belajar']; ?></td>
    <td><?php echo $data_produk['peng_sekolah']; ?></td>
    <td><?php echo $data_produk['man_sda']; ?></td>
    <td><?php echo $data_produk['kewirausahaan']; ?></td>
    <td><?php echo $data_produk['super_belajar']; ?></td>
  </tr>

<?php } ?>
</table>

<br><br><hr>

<h2>Produk Kriteria</h2>
<table border="1" cellspacing="0" height="200" width="600">

  <tr>
    <th rowspan="2">Produk</th>
    <th colspan="<?php echo $jml_kriteria; ?>">Kriteria</th>
  <tr>
  <?php
  $kriteria = $topsis->get_data_kriteria();
  while ($data_kriteria = $kriteria->fetch(PDO::FETCH_ASSOC)) {
  ?>
    <th>C<?php echo $data_kriteria['id_kriteria']; ?></th>

  <?php } ?>
  </tr>

  <?php
  $produk = $topsis->get_data_produk();
  while ($data_produk = $produk->fetch(PDO::FETCH_ASSOC)) {
  ?>
    <tr>
      <td><center>K<?php echo $data_produk['NIP']; ?></center></td>
      <?php
      $nilai = $topsis->get_data_nilai_id($data_produk['NIP']);
      while ($data_nilai = $nilai->fetch(PDO::FETCH_ASSOC)) { 

header ("location: ../siswa/pages/tabel-guru.php");
      	?>
        <td><center><?php echo $data_nilai['nilai']; ?></center></td>

      <?php } ?>
    </tr>

  <?php } ?>
</table>

<br><br><hr>

<h2>Matrik Ternormalisasi</h2>
<table border="1" cellspacing="0" height="200" width="1200">

  <tr>
    <th rowspan="2">Produk</th>
    <th colspan="<?php echo $jml_kriteria; ?>">Kriteria</th>
  <tr>
  <?php
  $kriteria = $topsis->get_data_kriteria();
  while ($data_kriteria = $kriteria->fetch(PDO::FETCH_ASSOC)) {
  ?>
    <th>C<?php echo $data_kriteria['id_kriteria']; ?></th>

  <?php } ?>
  </tr>

  <?php
  $produk = $topsis->get_data_produk();
  while ($data_produk = $produk->fetch(PDO::FETCH_ASSOC)) {
  ?>
    <tr>
      <td><center>K<?php echo $data_produk['NIP']; ?></center></td>
      <?php
      $nilai = $topsis->get_data_nilai_id($data_produk['NIP']);
      while ($data_nilai = $nilai->fetch(PDO::FETCH_ASSOC)) {
      $pembagi = $topsis->pembagi($data_nilai['id_kriteria']);
      ?>
      <td><center><?php echo $hasil=$data_nilai['nilai']/$pembagi; ?></center></td>

    <?php } ?>
    </tr>
  <?php  } ?>

</table>

<br><br><hr>
<!--Pembobotan-->

<h2>Pembobotan Matrik Ternormalisasi</h2>
<table border="1" cellspacing="0" height="200" width="1200">

  <tr>
    <th rowspan="2">Produk</th>
    <th colspan="<?php echo $jml_kriteria; ?>">Kriteria</th>
  <tr>
  <?php
  $kriteria = $topsis->get_data_kriteria();
  while ($data_kriteria = $kriteria->fetch(PDO::FETCH_ASSOC)) {
  ?>
      <th>C<?php echo $data_kriteria['id_kriteria']; ?></th>

  <?php } ?>
  </tr>

  <?php
  $max_min=array();
  //$_hasil_pembobotan=array();

  $produk = $topsis->get_data_produk();
  while ($data_produk = $produk->fetch(PDO::FETCH_ASSOC)) {
  ?>
    <tr>
      <td><center>K<?php echo $data_produk['NIP']; ?></center></td>
      <?php

      $nilai = $topsis->get_data_nilai_id($data_produk['NIP']);
      while ($data_nilai = $nilai->fetch(PDO::FETCH_ASSOC)) {
        $pembagi = $topsis->pembagi($data_nilai['id_kriteria']);
      ?>
      <td>
        <center>
          <?php
            $hasil=$data_nilai['nilai']/$pembagi;
            // pembobotan
            $bobot=$topsis->get_data_kriteria_id($data_nilai['id_kriteria']);
            while ($data_bobot = $bobot->fetch(PDO::FETCH_ASSOC)) {
              $pembobotan=$hasil*$data_bobot['bobot'];
              echo $pembobotan;
              // $max_mins['nilai']= $data_nilai['nilai'];
              $max_mins['pembobotan']= $pembobotan;
              $max_mins['id_kriteria']= $data_nilai['id_kriteria'];
              $max_mins['NIP']= $data_produk['NIP'];
              array_push($max_min,$max_mins);


            }
            // end pembobotan
            // print_r($max_min);

           ?>
         </center>
       </td>
    <?php } ?>
    </tr>
  <?php  } ?>

</table>
<br><br>
<hr>

<?php
// print_r($max_min);

foreach ($max_min as $insert_data) {
  $topsis->insert_data_max_min($insert_data['id_kriteria'], $insert_data['pembobotan']);
}

$data_hasil_min_max=array();
$data= $topsis->min_max();
while ($data_min_max=$data->fetch(PDO::FETCH_ASSOC)){
 // print_r($data_min_max);
 $data_hasil_min_maxs['id_kriteria']= $data_min_max['id_kriteria'];
 $data_hasil_min_maxs['min']= $data_min_max['min'];
 $data_hasil_min_maxs['max']= $data_min_max['max'];
 array_push($data_hasil_min_max,$data_hasil_min_maxs);

}

$topsis->delete_min_max();
// print_r($data_hasil_min_max);
// print_r($max_min);
 ?>

<h2>Min Max</h2>
 <table border="1" cellspacing="0">
   <tr>
     <th>Id Kriteria</th>
     <th>Min</th>
     <th>Max</th>
   </tr>

<?php foreach ($data_hasil_min_max as $data) { ?>

   <tr>
     <td>C<?php echo $data['id_kriteria']; ?></td>
     <td><?php echo $data['min']; ?></td>
     <td><?php echo $data['max']; ?></td>
   </tr>
   <?php } ?>
 </table>
</table>
<br><br>

<hr><br>

<h2>Hasil Pangkat</h2>

<table border="1" cellspacing="0">
  <tr>
    <th>Id Produk</th>
    <th>Id Kriteria</th>
    <th>Hasil Pangkat</th>
  </tr>
<?php foreach ($max_min as $row) { ?>
  <tr>
    <td><?php echo $row['NIP']; ?></td>
    <td><?php echo $row['id_kriteria']; ?></td>
    <td><?php  $row['pembobotan']; ?>
    <?php foreach ($data_hasil_min_max as $data) {
      if ($row['id_kriteria']==$data['id_kriteria']) {
        $hasil=$data['max']-$row['pembobotan'];
        $pangkat=pow($hasil,2);

      }
    }
    echo number_format($pangkat,2);
    ?>
    </td>
  </tr>
  <?php } ?>
</table>
<br><br><br>

<table border="1" cellspacing="0" width="400" height="200">
  <tr>
    <th>Id Produk</th>
    <th>D+</th>
    <th>D-</th>
    <th>V1</th>
  </tr>

<?php
$ranking_array=array();
$produk = $topsis->get_data_produk();
while ($data_produk = $produk->fetch(PDO::FETCH_ASSOC)) {

?>
<tr>
<td>
  <?php echo $data_produk['NIP']; ?>
</td>
<?php
$nilai_d_plus=0;
$nilai_d_min=0;
    foreach ($max_min as $row) {
       foreach ($data_hasil_min_max as $data) {
          if ($row['id_kriteria']==$data['id_kriteria']) {
            $hasil_plus=$data['max']-$row['pembobotan'];
            $hasil_min=$data['min']-$row['pembobotan'];
            $pangkat_plus=pow($hasil_plus,2);
            $pangkat_min=pow($hasil_min,2);
          }
        }
      if ($data_produk['NIP']==$row['NIP']) {
        $nilai_d_plus=$nilai_d_plus+$pangkat_plus;
        $nilai_d_min=$nilai_d_min+$pangkat_min;
      }
    }
  ?>
  <td>
    <?php
    echo number_format($nilai_d_plus,2); ?>
  </td>
  <td>
    <?php
    echo number_format($nilai_d_min,2); ?>
  </td>
  <td>
    <?php
    $bagi=$nilai_d_min+$nilai_d_plus;
    echo $nilai_v=number_format($nilai_d_min/$bagi,2); ?>
  </td>
    <?php
    $ranking_arrays['nilai_v'] = $nilai_v;
    $ranking_arrays['NIP'] =  $data_produk['NIP'];
    array_push($ranking_array,$ranking_arrays);
    ?>
</tr>
<?php } ?>
</table>
<br><br>
<hr>

<h2>Ranking</h2>
<table border="1" cellspacing="0" width="400" height="200">
  <tr>
    <th>Ranking</th>
    <th>Nama Guru</th>
    <th>Nilai</th>
  </tr>
<?php
$no=1;
rsort($ranking_array);
foreach ($ranking_array as $ranking) {

	$nama  = $ranking['NIP'];
	$nilai = $ranking['nilai_v'];


$sql=mysqli_query($conn,"insert into rangking value('$no++','$nama','$nilai')")or die(mysqli_error());

  ?>
  <tr>
    <td>
      <?php echo $no++; ?>
    </td>
    <td><?php echo $ranking['NIP']; ?></td>
    <td><?php echo $ranking['nilai_v']; ?></td>
  </tr>
  <?php } 



   	

 ?>
</table>


