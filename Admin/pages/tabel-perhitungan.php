<?php
session_start();

$Id   = $_SESSION['Id'];
$Nama = $_SESSION['Nama_Admin'];

if($Id == "" || $Nama == ""){

    header("location:../");

  }
include_once("../../proses/koneksi.php");

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
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SPK Kharismatik pada Guru</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
         <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
      <div class="dashboard-header">
        <nav class="navbar navbar-expand-lg bg-white fixed-top">
            <a class="navbar-brand" href="index.html">SPK Kharismatik pada Guru</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto navbar-right-top">
                    <li class="nav-item">
                        <div id="custom-search" class="top-search-bar">
                            <input class="form-control" type="text" placeholder="Search..">
                        </div>
                    </li>

                    <li class="nav-item dropdown nav-user">
                        <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                        <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                            <div class="nav-user-info">
                                <h5 class="mb-0 text-white nav-user-name"><?php echo $Nama; ?></h5>
                                <span class="status"></span><span class="ml-2"><?php echo $Id; ?></span>
                            </div>
                            <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                            <a class="dropdown-item" href="../../"><i class="fas fa-power-off mr-2"></i>Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="../"  aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="tabel-siswa.php" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Data Siswa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="tabel-guru.php" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Data Guru</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Tabel Ranking</a>
                                <div id="submenu-5" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="tabel-rangking.php">Tabel Ranking Guru</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="tabel-penilaian.php">Tabel Penilaian</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-divider">
                                Features
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Tabel Penilaian </h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Tabel Penialain</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
               
                <div class="row">
                    <!-- ============================================================== -->
              
                    <!-- ============================================================== -->

                                  <!-- recent orders  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Tabel Kriteria</h5>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">No</th>
                                                <th class="border-0">Nama</th>
                                                <th class="border-0">Bobot</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
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

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <h5 class="card-header">Tabel Penilaian Guru</h5>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">NIP</th>
                                                <th class="border-0">Strategi Visi dan Artikulasi</th>
                                                <th class="border-0">Kepedulian Terhadap Lingkungan</th>
                                                <th class="border-0">Kepedulian Terhadap Kebutuhan Siswa</th>
                                                <th class="border-0">Bertanggung Jawab(Resiko Pribadi)</th>
                                                <th class="border-0">Prilaku yang Tidak Konvensial</th>
                                                <th class="border-0">Percaya Diri</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        <?php
                                            $no=1;
                                            $produk = $topsis->get_data_produk();
                                            while ($data_produk = $produk->fetch(PDO::FETCH_ASSOC)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $data_produk['NIP']; ?></td>
                                            <td><?php echo $data_produk['kep_sosial']; ?></td>
                                            <td><?php echo $data_produk['kep_belajar']; ?></td>
                                            <td><?php echo $data_produk['peng_sekolah']; ?></td>
                                            <td><?php echo $data_produk['man_sda']; ?></td>
                                            <td><?php echo $data_produk['kewirausahaan']; ?></td>
                                            <td><?php echo $data_produk['super_belajar']; ?></td>
                                        </tr>

                                        <?php } ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            </div>
                            <div class="card">
                            <h5 class="card-header">Matrik Keputusan</h5>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0" rowspan="2"><center>NIP</center></th>
                                                <th class="border-0" colspan="<?php echo $jml_kriteria; ?>"><center>Kriteria</center></th>
                                                
                                            </tr>
                                            <tr>
                                            <?php
                                                $kriteria = $topsis->get_data_kriteria();
                                                while ($data_kriteria = $kriteria->fetch(PDO::FETCH_ASSOC)) {
                                                ?>
                                                    <th>C<?php echo $data_kriteria['id_kriteria']; ?></th>

                                                <?php } ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        <?php
                                        $produk = $topsis->get_data_produk();
                                        while ($data_produk = $produk->fetch(PDO::FETCH_ASSOC)) {
                                        ?>
                                            <tr>
                                            <td><center><?php echo $data_produk['NIP']; ?></center></td>
                                            <?php
                                            $nilai = $topsis->get_data_nilai_id($data_produk['NIP']);
                                            while ($data_nilai = $nilai->fetch(PDO::FETCH_ASSOC)) { 

                                        //header ("location: ../siswa/pages/tabel-guru.php");
                                                ?>
                                                <td><?php echo $data_nilai['nilai']; ?></td>

                                            <?php } ?>
                                            </tr>

                                        <?php } ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <h5 class="card-header">Matrik Ternormalisasi</h5>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0" rowspan="2"><center>NIP</center></th>
                                                <th class="border-0" colspan="<?php echo $jml_kriteria; ?>"><center>Kriteria</center></th>
                                                
                                            </tr>
                                            <tr>
                                            <?php
                                            $kriteria = $topsis->get_data_kriteria();
                                            while ($data_kriteria = $kriteria->fetch(PDO::FETCH_ASSOC)) {
                                            ?>
                                                <th>C<?php echo $data_kriteria['id_kriteria']; ?></th>

                                            <?php } ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        <?php
                                        $produk = $topsis->get_data_produk();
                                        while ($data_produk = $produk->fetch(PDO::FETCH_ASSOC)) {
                                        ?>
                                            <tr>
                                            <td><center><?php echo $data_produk['NIP']; ?></center></td>
                                            <?php
                                            $nilai = $topsis->get_data_nilai_id($data_produk['NIP']);
                                            while ($data_nilai = $nilai->fetch(PDO::FETCH_ASSOC)) {
                                            $pembagi = $topsis->pembagi($data_nilai['id_kriteria']);
                                            ?>
                                            <td><?php echo $hasil=$data_nilai['nilai']/$pembagi; ?></td>

                                            <?php } ?>
                                            </tr>
                                        <?php  } ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            </div>
                            <div class="card">
                            <h5 class="card-header">Pembobotan Matrik Ternormalisasi</h5>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                            <th class="border-0" rowspan="2"><center>NIP</center></th>
                                            <th class="border-0" colspan="<?php echo $jml_kriteria; ?>"><center>Kriteria</center></th>    
                                            </tr>
                                            <tr>
                                            <?php
                                            $kriteria = $topsis->get_data_kriteria();
                                            while ($data_kriteria = $kriteria->fetch(PDO::FETCH_ASSOC)) {
                                            ?>
                                                <th>C<?php echo $data_kriteria['id_kriteria']; ?></th>

                                            <?php } ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
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
                                            </td>
                                            <?php } ?>
                                            </tr>
                                        <?php  } ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
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


                            </div>
                            <div class="card">
                            <h5 class="card-header">Min Max</h5>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">Id Kriteria</th>
                                                <th class="border-0">Min</th>
                                                <th class="border-0">Max</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        <?php foreach ($data_hasil_min_max as $data) { ?>

                                        <tr>
                                        <td>C<?php echo $data['id_kriteria']; ?></td>
                                        <td><?php echo $data['min']; ?></td>
                                        <td><?php echo $data['max']; ?></td>
                                        </tr>
                                        <?php } ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            </div>
                            <div class="card">
                            <h5 class="card-header">Hasil Pangkat</h5>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">NIP</th>
                                                <th class="border-0">Id Kriteria</th>
                                                <th class="border-0">Hasil Pangkat</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
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

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            </div>
                            <div class="card">
                            <h5 class="card-header">Matrik Sosial Ideal Positif dan Negatif</h5>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">NIP</th>
                                                <th class="border-0">D+</th>
                                                <th class="border-0">D-</th>
                                                <th class="border-0">V1</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
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

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            </div>
                            <div class="card">
                            <h5 class="card-header">Ranking</h5>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0"><center>Ranking</center></th>
                                                <th class="border-0">NIP</th>
                                                <th class="border-0">Nilai</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
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
                                            <center><?php echo $no++; ?></center>
                                            </td>
                                            <td><?php echo $ranking['NIP']; ?></td>
                                            <td><?php echo $ranking['nilai_v']; ?></td>
                                        </tr>
                                        <?php } ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                    </div>
                    <!-- ============================================================== -->
                    <!-- end recent orders  -->

                </div>
                       
                    </div>
            </div>
            
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/vendor/custom-js/jquery.multi-select.html"></script>
    <script src="../assets/libs/js/main-js.js"></script>
</body>
 
</html>