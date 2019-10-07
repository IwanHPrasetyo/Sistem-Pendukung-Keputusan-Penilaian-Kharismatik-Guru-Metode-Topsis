<?php
session_start();

$Id   = $_SESSION['Id'];
$Nama = $_SESSION['Nama_Admin'];

if($Id == "" || $Nama == ""){

    header("location:../");

  }
include_once("../../proses/koneksi.php");

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
                            <h5 class="card-header">Data Penilaian Guru SMA Negeri 1 Malang</h5>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">NIP</th>
                                                <th class="border-0">Nama Guru</th>
                                                <th class="border-0">Strategi Visi dan Artikulasi</th>
                                                <th class="border-0">Kepedulian Terhadap Lingkungan</th>
                                                <th class="border-0">Kepedulian Terhadap Kebutuhan Siswa</th>
                                                <th class="border-0">Bertanggung Jawab(Resiko Pribadi)</th>
                                                <th class="border-0">Prilaku Yang Tidak Konvensial</th>
                                                <th class="border-0">Percaya Diri</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        <?php
                                        $sql_guru = "SELECT * FROM data_nilai_guru";
                                        $data_guru = $conn->query($sql_guru);
                                        $nomer = 0;
                                        while($row=$data_guru->fetch_array()){
                                            $NIP = $row['NIP'];
                                            $sql_guru2      = mysqli_query($conn,"SELECT * from data_guru where NIP ='$NIP'");
                                            $data_guru2     = mysqli_fetch_array($sql_guru2);
                                        
                                        ?>
                                            
                                            <tr>
                                                <td><?php echo $row['NIP']; ?></td>
                                                <td><?php echo $data_guru2['Nama']; ?></td>
                                                <td><?php echo $row['kep_sosial']; ?></td>
                                                <td><?php echo $row['kep_belajar']; ?></td>
                                                <td><?php echo $row['peng_sekolah']; ?></td>
                                                <td><?php echo $row['man_sda']; ?></td>
                                                <td><?php echo $row['kewirausahaan']; ?></td>
                                                <td><?php echo $row['super_belajar']; ?></td>
                                               
                                            </tr>
                                            
                                            <?php 
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <a href="tabel-perhitungan.php" class="btn btn-rounded btn-info">Detail Penilaian</a>
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