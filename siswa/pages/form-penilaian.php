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
                                <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
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
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Form Penilaian Kinerja Guru</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="../" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="../" class="breadcrumb-link">Forms</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Form Penilaian Kinerja Guru</li>
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
                        <!-- horizontal form -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Form Evalusi Guru</h5>
                                <div class="card-body">
                                    <form id="form" method="post" action="../../proses/index.php?id=<?php echo $id; ?>" data-parsley-validate="" novalidate="">
                                        
                                        <center>
                                        <img src="../assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle" style="width:200px; height:200px;">
                                        <h3 class="card-title" style="margin-top:2%;"><?php echo $data_guru['Nama']; ?></h3>
                                        </center>

                                        <div class="form-group row" style="margin-top:8%;">
                                            <label for="inputEmail2" class="col-2 col-lg-4 col-form-label text-left" style="margin-left:20%;">kepribadian dan sosial</label>
                                            <div class="col-2 col-lg-2">
                                                <input id="nilaisosial" name="kep_sosial" type="number" required="" data-parsley-type="number" placeholder="0" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail2" class="col-2 col-lg-4 col-form-label text-left" style="margin-left:20%;">kepemimpinan dan pembelajaran</label>
                                            <div class="col-2 col-lg-2">
                                                <input id="nilaipembelajaran" name="kep_belajar" type="number" required="" data-parsley-type="number" placeholder="0" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail2" class="col-2 col-lg-4 col-form-label text-left" style="margin-left:20%;">pengembangan sekolah</label>
                                            <div class="col-2 col-lg-2">
                                                <input id="nilaipengembangan" name="peng_sekolah" type="number" required="" data-parsley-type="number" placeholder="0" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail2" class="col-2 col-lg-4 col-form-label text-left" style="margin-left:20%;">manajemen sumberdaya</label>
                                            <div class="col-2 col-lg-2">
                                                <input id="nilaimanajemen" name="man_sda" type="number" required="" data-parsley-type="number" placeholder="0" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail2" class="col-2 col-lg-4 col-form-label text-left" style="margin-left:20%;">Kewirausahaan</label>
                                            <div class="col-2 col-lg-2">
                                                <input id="nilaikewirausahaan" name="kewirausahaan" type="number" required="" data-parsley-type="number" placeholder="0" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail2" class="col-2 col-lg-4 col-form-label text-left" style="margin-left:20%;">supervisi pembelajaran</label>
                                            <div class="col-2 col-lg-2">
                                                <input id="nilaisupervisi" name="super_belajar" type="number" required="" data-parsley-type="number" placeholder="0" class="form-control">
                                            </div>
                                        </div>
                                       
                                        <div class="row pt-2 pt-sm-5 mt-1">
                                            <div class="col-sm-7 pl-0">
                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                                    <button class="btn btn-space btn-secondary">Canl</button>
                                                </p>
                                            </div>
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end horizontal form -->
                        <!-- ============================================================== -->
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
    <script src="../assets/vendor/parsley/parsley.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>
    <script>
    $('#form').parsley();
    </script>
    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
    </script>
</body>
 
</html>