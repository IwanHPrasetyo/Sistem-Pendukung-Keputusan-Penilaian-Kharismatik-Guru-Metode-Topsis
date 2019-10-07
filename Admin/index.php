<?php 
include_once('../proses/koneksi.php');
session_start();

$Id   = $_SESSION['Id'];
$Nama = $_SESSION['Nama_Admin'];

if($Id == "" || $Nama == ""){

    header("location:../");

  }
$sql_siswa      = mysqli_query($conn,"SELECT count(*) as jumlah from data_siswa");
$jumlah_siswa   = mysqli_fetch_array($sql_siswa);
$sql_guru       = mysqli_query($conn,"SELECT count(*) as jumlah from data_guru");
$jumlah_guru    = mysqli_fetch_array($sql_guru);
?>
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>SPK Kharismatik pada Guru</title>
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
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name"><?php echo $Nama; ?></h5>
                                    <span class="status"></span><span class="ml-2"><?php echo $Id ?></span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                <a class="dropdown-item" href="../"><i class="fas fa-power-off mr-2"></i>Logout</a>
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
                                <a class="nav-link active" href="#"  aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="pages/tabel-siswa.php" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Data Siswa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/tabel-guru.php" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Data Guru</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Tabel Ranking</a>
                                <div id="submenu-5" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/tabel-rangking.php">Tabel Ranking Guru</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/tabel-penilaian.php">Tabel Penilaian</a>
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
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->

                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">
                                    <marquee width="1000" height="50"><font color=Black><font face="cooper black">Selamat Datang di Sistem Pendukung Keputusan Kharismatik Guru </font></font></marquee></h2>
                                    <center><h6>Jl. Tugu Utara No.1, Kiduldalem, Klojen, Kota Malang, Jawa Timur 65111  Telp. /Fax. : +62 341 366 454 </h6> <center>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">SPK Kharismatik Pada Guru</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
</body>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">

                        <!-- ============================================================== -->
                        <!-- simple cards  -->
                        <!-- ============================================================== -->
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <center><img height="30px" src="assets/images/bismillah.png" alt=""></center>
                                       <center> <p>____________________________</P></center>
                                        <center><h2 class="card-title">SMA Negeri 1 Malang</h2>
                                        <center><h3 class="card-title">Bhumi Mitreka Satata</h3>

                                        <img height="200px" src="assets/images/sman1malang.png" alt="">
                                        <p class="card-text" style="margin-top:2%;">SMA Negeri 1 Malang, adalah Sekolah Menengah Atas Negeri, yang terletak di jalan Tugu Utara No. 1, Malang, Jawa
Timur, Indonesia. Sekolah ini terletak di dalam satu kompleks dengan Stasiun Malang yang dikenal dengan sebutan SMA Tugu bersama-sama dengan SMA Negeri 3 Malang dan SMA Negeri 4 Malang. mereka dikenal dengan julukan SMA Tugu, dikarenakan terletak di jalan Tugu yang terkenal di Malang.
.</p>
<h4>Silahkan mengunjungi/mengakses website kami <p>http://www.sman1-mlg.sch.id/</p></h4>
                                        <a href="pages/tabel-rangking.php" class="btn btn-primary">Lihat Penilaian</a></center>
                                    </div>
                                </div>
                            </div>             
                        </div>
                        <!-- ============================================================== -->
                        <!-- end simple cards  -->
                        <!-- ============================================================== -->
                        
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Jumlah Siswa</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1"><?php echo $jumlah_siswa['jumlah']; ?></h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            <span><i></i></span><span>Siswa</span>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Jumlah Guru</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1"><?php echo $jumlah_guru['jumlah']; ?></h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            <span><i></i></span><span>Guru</span>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            
                            </div>
                        </div>
                                                
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>
</body>
 
</html>