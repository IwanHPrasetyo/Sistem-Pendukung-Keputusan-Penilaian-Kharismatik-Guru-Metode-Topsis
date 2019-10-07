<?php
include_once("../../proses/koneksi.php");
session_start();

$Id   = $_SESSION['Id'];
$Nama = $_SESSION['Nama_Siswa'];

if($Id == "" && $Nama == ""){

    header("location:../");

  }
?>
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sistem Evaluasi Guru</title>
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
            <a class="navbar-brand" href="index.html">Sistem Evaluasi Guru</a>
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
                    <a class="d-xl-none d-lg-none" href="">Dashboard</a>
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
                                <a class="nav-link active" href="tabel-guru.php" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Tables</a>
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
                            <h2 class="pageheader-title">General Tables </h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">General Tables</li>
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
                            <h5 class="card-header">Data Guru SMA Negeri 1 Malang</h5>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">No</th>
                                                <th class="border-0">Foto</th>
                                                <th class="border-0">NIP</th>
                                                <th class="border-0">Nama Guru</th>
                                                <th class="border-0">Pelajaran</th>
                                                <th class="border-0">Penilaian</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        <?php
                                        $sql_guru = "SELECT * FROM data_guru";
                                        $data_guru = $conn->query($sql_guru);
                                        $nomer = 0;
                                        while($row=$data_guru->fetch_array()){
                                        
                                            $NIP = $row['NIP']; 

                                        ?>
                                            
                                            <tr>
                                                <td><?php $nomer = $nomer+1; echo $nomer;?></td>
                                                <td>
                                                    <div class="m-r-10"><img src="../assets/images/product-pic.jpg" alt="user" class="rounded" width="45"></div>
                                                </td>
                                                <td><?php echo $row['NIP']; ?></td>
                                                <td><?php echo $row['Nama']; ?></td>
                                                <td><?php echo $row['Mapel']; ?></td>
                                                <td>
                                                <?php 
                                                    $sql_button  = mysqli_query($conn, "SELECT * FROM data_nilai_guru_total where NIP = '$NIP' and NIS = '$Id'");
                                                    $data_button = mysqli_fetch_array($sql_button);

                                                    if ($data_button['NIS'] != "" && $data_button['NIP'] != "") {
                                                        # code...
                                                    
                                                    ?>
                                                    <button class="btn btn-rounded btn-light" disabled>Penilaian</button>
                                                    <?php
                                                    }
                                                    else{
                                                    ?>
                                                    <a href="form-soal.php?id=<?php echo $row['NIP']; ?>" class="btn btn-rounded btn-info">Penilaian</a>
                                                    <?php 
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            
                                            <?php 
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
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