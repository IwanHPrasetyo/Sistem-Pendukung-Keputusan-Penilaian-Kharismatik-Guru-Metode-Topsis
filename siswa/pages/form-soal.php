<?php 
include_once('../../proses/koneksi.php');
session_start();

$Id   = $_SESSION['Id'];
$Nama = $_SESSION['Nama_Siswa'];

if($Id == "" && $Nama == ""){

    header("location:../");

  }

$id        	   = $_GET['id'];

$sql_guru      = mysqli_query($conn,"SELECT * from data_guru where NIP='$id'");
$data_guru     = mysqli_fetch_array($sql_guru);

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
                <a class="navbar-brand" href="../">Sistem Evaluasi Guru</a>
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
                                <span class="status"></span><span class="ml-2"><?php echo $Id ?></span>
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
                    <a class="d-xl-none d-lg-none" href="../">Dashboard</a>
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
                                <a class="nav-link active" href="tabel-guru.php"  aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Tables</a>                               
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
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12">
                        <!-- ============================================================== -->
                        <!-- pageheader  -->
                        <!-- ============================================================== -->
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="page-header" id="top">
                                    <h2 class="pageheader-title">Form Penilaian Kinerja Guru</h2>
                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Forms</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Form Penilaian Guru</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end pageheader  -->
                        <!-- checkboxes and radio -->
                        <!-- ============================================================== -->
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" id="checkboxradio">
                                <div class="card">
                                    <h4 class="card-header">Form Penilaian Guru</h4>
                                    <div class="card-body border-top">

                                            <center>
                                            <img src="../assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle" style="width:200px; height:200px;">
                                            <h3 class="card-title" style="margin-top:2%;"><?php echo $data_guru['Nama']; ?></h3>
                                            </center>

                                        <form id="form" method="post" style="margin-left:20%;" action="../../proses/index.php?id=<?php echo $id; ?>">
                                            
                                            <h4 style="margin-top:5%;">STRATEGI VISI DAN ARTIKULASI</h4>
                                            
                                            <h5>1. Apakah pengajar sering memberikan ide atau motivasi untuk masa depan siswa ?</h5>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal1" checked="" value="A. Sangat Sering" class="custom-control-input"><span class="custom-control-label">A. Sangat Sering</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal1" value="B. Sering" class="custom-control-input"><span class="custom-control-label">B. Sering</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal1" value="C. Kadang-kadang" class="custom-control-input"><span class="custom-control-label">C. Kadang-kadang</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal1" value="D. Jarang" class="custom-control-input"><span class="custom-control-label">D. Jarang</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal1" value="E. Tidak Pernah" class="custom-control-input"><span class="custom-control-label">E. Tidak Pernah</span>
                                            </label>

                                            <br></br>
                                            
                                            <h5>2. Apakah pengajar memberikan motivasi untuk menginspirasi siswa dalam belajar ?</h5>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal2" checked="" value="A. Sangat Sering" class="custom-control-input"><span class="custom-control-label">A. Sangat Sering</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal2" value="B. Sering" class="custom-control-input"><span class="custom-control-label">B. Sering</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal2" value="C. Kadang-kadang" class="custom-control-input"><span class="custom-control-label">C. Kadang-kadang</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal2" value="D. Jarang" class="custom-control-input"><span class="custom-control-label">D. Jarang</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal2" value="E. Tidak Pernah" class="custom-control-input"><span class="custom-control-label">E. Tidak Pernah</span>
                                            </label>

                                            <br></br>
                                            
                                            <h5>3. Apakah pengajar memberitahukan tentang kendala atau hambatan siswa dalam menguasai materi ?</h5>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal3" checked="" value="A. Sangat Sering" class="custom-control-input"><span class="custom-control-label">A. Sangat Sering</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal3" value="B. Sering" class="custom-control-input"><span class="custom-control-label">B. Sering</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal3" value="C. Kadang-kadang" class="custom-control-input"><span class="custom-control-label">C. Kadang-kadang</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal3" value="D. Jarang" class="custom-control-input"><span class="custom-control-label">D. Jarang</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal3" value="E. Tidak Pernah" class="custom-control-input"><span class="custom-control-label">E. Tidak Pernah</span>
                                            </label>

                                            <br></br>
                                            
                                            <h5>4. Apakah pengajar sering memberikan solusi siswa untuk mempermudah dalam mempelajari materi pelajaran ?</h5>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal4" checked="" value="A. Sangat Sering" class="custom-control-input"><span class="custom-control-label">A. Sangat Sering</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal4" value="B. Sering" class="custom-control-input"><span class="custom-control-label">B. Sering</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal4" value="C. Kadang-kadang" class="custom-control-input"><span class="custom-control-label">C. Kadang-kadang</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal4" value="D. Jarang" class="custom-control-input"><span class="custom-control-label">D. Jarang</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal4" value="E. Tidak Pernah" class="custom-control-input"><span class="custom-control-label">E. Tidak Pernah</span>
                                            </label>

                                            <br></br>
                                            
                                            <h5>5. Apakah pengajar sering memberikan solusi siswa untuk mempermudah dalam mempelajari materi pelajaran ?</h5>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal5" checked="" value="A. Sangat Sering" class="custom-control-input"><span class="custom-control-label">A. Sangat Sering</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal5" value="B. Sering" class="custom-control-input"><span class="custom-control-label">B. Sering</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal5" value="C. Kadang-kadang" class="custom-control-input"><span class="custom-control-label">C. Kadang-kadang</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal5" value="D. Jarang" class="custom-control-input"><span class="custom-control-label">D. Jarang</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal5" value="E. Tidak Pernah" class="custom-control-input"><span class="custom-control-label">E. Tidak Pernah</span>
                                            </label>

                                            <br></br>
                                            
                                            <h5>6. Apakah pengajar sering memberikan solusi siswa untuk mempermudah dalam mempelajari materi pelajaran ?</h5>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal6" checked="" value="A. Sangat Sering" class="custom-control-input"><span class="custom-control-label">A. Sangat Sering</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal6" value="B. Sering" class="custom-control-input"><span class="custom-control-label">B. Sering</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal6" value="C. Kadang-kadang" class="custom-control-input"><span class="custom-control-label">C. Kadang-kadang</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal6" value="D. Jarang" class="custom-control-input"><span class="custom-control-label">D. Jarang</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal6" value="E. Tidak Pernah" class="custom-control-input"><span class="custom-control-label">E. Tidak Pernah</span>
                                            </label>
                                            
                                            <br></br>
                                            
                                            <h5>7. Apakah pengajar sering memberikan solusi siswa untuk mempermudah dalam mempelajari materi pelajaran ?</h5>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal7" checked="" value="A. Sangat Sering" class="custom-control-input"><span class="custom-control-label">A. Sangat Sering</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal7" value="B. Sering" class="custom-control-input"><span class="custom-control-label">B. Sering</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal7" value="C. Kadang-kadang" class="custom-control-input"><span class="custom-control-label">C. Kadang-kadang</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal7" value="D. Jarang" class="custom-control-input"><span class="custom-control-label">D. Jarang</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal7" value="E. Tidak Pernah" class="custom-control-input"><span class="custom-control-label">E. Tidak Pernah</span>
                                            </label>

                                            <br></br>

                                            <h4 style="margin-top:5%;">KEPEDULIAN TERHADAP LINGKUNGAN</h4>
                                            
                                            <h5>1. Apakah pengajar sering mengajarkan siswa dalam belajar dan bekerja secara berkelompok ?</h5>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal8" checked="" value="A. Sangat Sering" class="custom-control-input"><span class="custom-control-label">A. Sangat Sering</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal8" value="B. Sering" class="custom-control-input"><span class="custom-control-label">B. Sering</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal8" value="C. Kadang-kadang" class="custom-control-input"><span class="custom-control-label">C. Kadang-kadang</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal8" value="D. Jarang" class="custom-control-input"><span class="custom-control-label">D. Jarang</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal8" value="E. Tidak Pernah" class="custom-control-input"><span class="custom-control-label">E. Tidak Pernah</span>
                                            </label>

                                            <br></br>
                                            
                                            <h5>2. Apakah pengajar bisa membaur dengan siswa ketika berada di lingkungan sekolah ?</h5>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal9" checked="" value="A. Sangat Sering" class="custom-control-input"><span class="custom-control-label">A. Sangat Sering</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal9" value="B. Sering" class="custom-control-input"><span class="custom-control-label">B. Sering</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal9" value="C. Kadang-kadang" class="custom-control-input"><span class="custom-control-label">C. Kadang-kadang</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal9" value="D. Jarang" class="custom-control-input"><span class="custom-control-label">D. Jarang</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal9" value="E. Tidak Pernah" class="custom-control-input"><span class="custom-control-label">E. Tidak Pernah</span>
                                            </label>

                                            <br></br>
                                            
                                            <h5>3. Apakah pengajar sering memberikan nasehat kepa siswa kepada tindakan yang melanggar aturan disekolah ?</h5>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal10" checked="" value="A. Sangat Sering" class="custom-control-input"><span class="custom-control-label">A. Sangat Sering</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal10" value="B. Sering" class="custom-control-input"><span class="custom-control-label">B. Sering</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal10" value="C. Kadang-kadang" class="custom-control-input"><span class="custom-control-label">C. Kadang-kadang</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal10" value="D. Jarang" class="custom-control-input"><span class="custom-control-label">D. Jarang</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal10" value="E. Tidak Pernah" class="custom-control-input"><span class="custom-control-label">E. Tidak Pernah</span>
                                            </label>

                                            <br></br>
                                            
                                            <h5>4. Apakah setiap materi yang disampaikan dapat diterima atau dipahami dengan baik ?</h5>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal11" checked="" value="A. Sangat Sering" class="custom-control-input"><span class="custom-control-label">A. Sangat Sering</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal11" value="B. Sering" class="custom-control-input"><span class="custom-control-label">B. Sering</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal11" value="C. Kadang-kadang" class="custom-control-input"><span class="custom-control-label">C. Kadang-kadang</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal11" value="D. Jarang" class="custom-control-input"><span class="custom-control-label">D. Jarang</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal11" value="E. Tidak Pernah" class="custom-control-input"><span class="custom-control-label">E. Tidak Pernah</span>
                                            </label>

                                            <br></br>

                                            <h4 style="margin-top:5%;">KEPEDULIAN TERHADAP KEBUTUHAN SISWA</h4>
                                            
                                            <h5>1. Apakah pengajar itu peka terhadap kebutuhan lingkungan siswa ?</h5>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal12" checked="" value="A. Sangat Sering" class="custom-control-input"><span class="custom-control-label">A. Sangat Sering</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal12" value="B. Sering" class="custom-control-input"><span class="custom-control-label">B. Sering</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal12" value="C. Kadang-kadang" class="custom-control-input"><span class="custom-control-label">C. Kadang-kadang</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal12" value="D. Jarang" class="custom-control-input"><span class="custom-control-label">D. Jarang</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal12" value="E. Tidak Pernah" class="custom-control-input"><span class="custom-control-label">E. Tidak Pernah</span>
                                            </label>

                                            <br></br>
                                            
                                            <h5>2. Apakah pengajar dapat mengenali kemampuan siswa masing-masing ?</h5>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal13" checked="" value="A. Sangat Sering" class="custom-control-input"><span class="custom-control-label">A. Sangat Sering</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal13" value="B. Sering" class="custom-control-input"><span class="custom-control-label">B. Sering</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal13" value="C. Kadang-kadang" class="custom-control-input"><span class="custom-control-label">C. Kadang-kadang</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal13" value="D. Jarang" class="custom-control-input"><span class="custom-control-label">D. Jarang</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal13" value="E. Tidak Pernah" class="custom-control-input"><span class="custom-control-label">E. Tidak Pernah</span>
                                            </label>

                                            <br></br>
                                            
                                            <h5>3. Apakah pengajar peduli terhadap siswanya ketika berada didalam kelas ?</h5>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal14" checked="" value="A. Sangat Sering" class="custom-control-input"><span class="custom-control-label">A. Sangat Sering</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal14" value="B. Sering" class="custom-control-input"><span class="custom-control-label">B. Sering</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal14" value="C. Kadang-kadang" class="custom-control-input"><span class="custom-control-label">C. Kadang-kadang</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal14" value="D. Jarang" class="custom-control-input"><span class="custom-control-label">D. Jarang</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal14" value="E. Tidak Pernah" class="custom-control-input"><span class="custom-control-label">E. Tidak Pernah</span>
                                            </label>

                                            <br></br>

                                            <h4 style="margin-top:5%;">RESIKO PRIBADI (BERTANGGUNG JAWAB)</h4>
                                            
                                            <h5>1. Apakah pengajar mengenali keadaan lingkungan sosial dan budaya setiap siswa ?</h5>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal15" checked="" value="A. Sangat Sering" class="custom-control-input"><span class="custom-control-label">A. Sangat Sering</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal15" value="B. Sering" class="custom-control-input"><span class="custom-control-label">B. Sering</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal15" value="C. Kadang-kadang" class="custom-control-input"><span class="custom-control-label">C. Kadang-kadang</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal15" value="D. Jarang" class="custom-control-input"><span class="custom-control-label">D. Jarang</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal15" value="E. Tidak Pernah" class="custom-control-input"><span class="custom-control-label">E. Tidak Pernah</span>
                                            </label>

                                            <br></br>
                                            
                                            <h5>2. Apakah pengajar mengetahui kendala setiap siswa dalam memahami materi pembelajaran ?</h5>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal16" checked="" value="A. Sangat Sering" class="custom-control-input"><span class="custom-control-label">A. Sangat Sering</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal16" value="B. Sering" class="custom-control-input"><span class="custom-control-label">B. Sering</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal16" value="C. Kadang-kadang" class="custom-control-input"><span class="custom-control-label">C. Kadang-kadang</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal16" value="D. Jarang" class="custom-control-input"><span class="custom-control-label">D. Jarang</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal16" value="E. Tidak Pernah" class="custom-control-input"><span class="custom-control-label">E. Tidak Pernah</span>
                                            </label>

                                            <br></br>
                                            
                                            <h5>3. Apakah pengajar selalu berperan aktif dalam kegiatan belajar secara berkelompok didalam kelas ?</h5>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal17" checked="" value="A. Sangat Sering" class="custom-control-input"><span class="custom-control-label">A. Sangat Sering</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal17" value="B. Sering" class="custom-control-input"><span class="custom-control-label">B. Sering</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal17" value="C. Kadang-kadang" class="custom-control-input"><span class="custom-control-label">C. Kadang-kadang</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal17" value="D. Jarang" class="custom-control-input"><span class="custom-control-label">D. Jarang</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal17" value="E. Tidak Pernah" class="custom-control-input"><span class="custom-control-label">E. Tidak Pernah</span>
                                            </label>

                                            <br></br>

                                            <h4 style="margin-top:5%;">PRILAKU YANG TIDAK KONVENSIONAL</h4>
                                            
                                            <h5>1. Apakah pengajar sering menggunakan cara modern dalam mengajar ?</h5>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal18" checked="" value="A. Sangat Sering" class="custom-control-input"><span class="custom-control-label">A. Sangat Sering</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal18" value="B. Sering" class="custom-control-input"><span class="custom-control-label">B. Sering</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal18" value="C. Kadang-kadang" class="custom-control-input"><span class="custom-control-label">C. Kadang-kadang</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal18" value="D. Jarang" class="custom-control-input"><span class="custom-control-label">D. Jarang</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal18" value="E. Tidak Pernah" class="custom-control-input"><span class="custom-control-label">E. Tidak Pernah</span>
                                            </label>

                                            <br></br>
                                            
                                            <h5>2. Apakah pengajar menggunakan media interaktif untuk melakukan kegiatan belajar mengajar misalnya (alat peraga pembelajaran, &#160;&#160;&#160;&#160;&#160;vidio pemebelajaran, game pembelajaran dll) ?</h5>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal19" checked="" value="A. Sangat Sering" class="custom-control-input"><span class="custom-control-label">A. Sangat Sering</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal19" value="B. Sering" class="custom-control-input"><span class="custom-control-label">B. Sering</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal19" value="C. Kadang-kadang" class="custom-control-input"><span class="custom-control-label">C. Kadang-kadang</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal19" value="D. Jarang" class="custom-control-input"><span class="custom-control-label">D. Jarang</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal19" value="E. Tidak Pernah" class="custom-control-input"><span class="custom-control-label">E. Tidak Pernah</span>
                                            </label>

                                            <br></br>
                                            
                                            <h5>3. Apakah media pembelajaran yang digunakan dapat menunjang atau memper mudah dalam memahami materi yang disampaikan ?</h5>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal20" checked="" value="A. Sangat Sering" class="custom-control-input"><span class="custom-control-label">A. Sangat Sering</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal20" value="B. Sering" class="custom-control-input"><span class="custom-control-label">B. Sering</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal20" value="C. Kadang-kadang" class="custom-control-input"><span class="custom-control-label">C. Kadang-kadang</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal20" value="D. Jarang" class="custom-control-input"><span class="custom-control-label">D. Jarang</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal20" value="E. Tidak Pernah" class="custom-control-input"><span class="custom-control-label">E. Tidak Pernah</span>
                                            </label>

                                            <br></br>

                                            <h4 style="margin-top:5%;">PERCAYA DIRI</h4>
                                            
                                            <h5>1. Apakah pengajar dapat menyampaikan materi secara menarik ?</h5>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal21" checked="" value="A. Sangat Sering" class="custom-control-input"><span class="custom-control-label">A. Sangat Sering</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal21" value="B. Sering" class="custom-control-input"><span class="custom-control-label">B. Sering</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal21" value="C. Kadang-kadang" class="custom-control-input"><span class="custom-control-label">C. Kadang-kadang</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal21" value="D. Jarang" class="custom-control-input"><span class="custom-control-label">D. Jarang</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal21" value="E. Tidak Pernah" class="custom-control-input"><span class="custom-control-label">E. Tidak Pernah</span>
                                            </label>

                                            <br></br>
                                            
                                            <h5>2. Apakah pengajar memberikan motivasi untuk menginspirasi siswa dalam belajar ?</h5>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal22" checked="" value="A. Sangat Sering" class="custom-control-input"><span class="custom-control-label">A. Sangat Sering</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal22" value="B. Sering" class="custom-control-input"><span class="custom-control-label">B. Sering</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal22" value="C. Kadang-kadang" class="custom-control-input"><span class="custom-control-label">C. Kadang-kadang</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal22" value="D. Jarang" class="custom-control-input"><span class="custom-control-label">D. Jarang</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal22" value="E. Tidak Pernah" class="custom-control-input"><span class="custom-control-label">E. Tidak Pernah</span>
                                            </label>

                                            <br></br>
                                            
                                            <h5>3. Apakah pengajar sering memberikan motivasi dalam pentingnya belajar berkelompok ?</h5>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal23" checked="" value="A. Sangat Sering" class="custom-control-input"><span class="custom-control-label">A. Sangat Sering</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal23" value="B. Sering" class="custom-control-input"><span class="custom-control-label">B. Sering</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal23" value="C. Kadang-kadang" class="custom-control-input"><span class="custom-control-label">C. Kadang-kadang</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal23" value="D. Jarang" class="custom-control-input"><span class="custom-control-label">D. Jarang</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="soal23" value="E. Tidak Pernah" class="custom-control-input"><span class="custom-control-label">E. Tidak Pernah</span>
                                            </label>


                                            <div class="row pt-2 pt-sm-5 mt-1">
                                            <div class="col-sm-7 pl-0" style="margin-left:-10%;">
                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                                    <button class="btn btn-space btn-secondary">Cancel</button>
                                                </p>
                                            </div>
                                            
                                        </div>
                                            </br>
                                            </br>
                                            <p class="text-right">
                                                            <strong>Sumber : Management & Labour Studies, Vol. 25, No.4, October 2000 </strong>
                                            </p>

                                        

                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end checkboxes and radio -->
                        <!-- ============================================================== -->
                        
                    </div>
                    <!-- ============================================================== -->
                    <!-- sidenavbar -->
                    <!-- ============================================================== -->
                    
                    <!-- ============================================================== -->
                    <!-- end sidenavbar -->
                    <!-- ============================================================== -->
                </div>
            </div>
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>
    <script src="../assets/vendor/inputmask/js/jquery.inputmask.bundle.js"></script>
    <script>
    $(function(e) {
        "use strict";
        $(".date-inputmask").inputmask("dd/mm/yyyy"),
            $(".phone-inputmask").inputmask("(999) 999-9999"),
            $(".international-inputmask").inputmask("+9(999)999-9999"),
            $(".xphone-inputmask").inputmask("(999) 999-9999 / x999999"),
            $(".purchase-inputmask").inputmask("aaaa 9999-****"),
            $(".cc-inputmask").inputmask("9999 9999 9999 9999"),
            $(".ssn-inputmask").inputmask("999-99-9999"),
            $(".isbn-inputmask").inputmask("999-99-999-9999-9"),
            $(".currency-inputmask").inputmask("$9999"),
            $(".percentage-inputmask").inputmask("99%"),
            $(".decimal-inputmask").inputmask({
                alias: "decimal",
                radixPoint: "."
            }),

            $(".email-inputmask").inputmask({
                mask: "*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[*{2,6}][*{1,2}].*{1,}[.*{2,6}][.*{1,2}]",
                greedy: !1,
                onBeforePaste: function(n, a) {
                    return (e = e.toLowerCase()).replace("mailto:", "")
                },
                definitions: {
                    "*": {
                        validator: "[0-9A-Za-z!#$%&'*+/=?^_`{|}~/-]",
                        cardinality: 1,
                        casing: "lower"
                    }
                }
            })
    });
    </script>
</body>
 
</html>