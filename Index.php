<?php 
session_start();
session_unset();
session_destroy();
?>
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sistem Evaluasi Guru</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="siswa/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="siswa/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="siswa/assets/libs/css/style.css">
    <link rel="stylesheet" href="siswa/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a href="../index.html"><img class="logo-img" style="height:200px;" src="siswa/assets/images/sman1malang.png" alt="logo"></a><span class="splash-description">Silahkan login.</span></div>
            <div class="card-body">
                <form method="post" action="proses/login.php">
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="nis" id="nis" type="text" placeholder="NIS" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="password" id="password" type="password" placeholder="Password">
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                </form>
            </div>
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="siswa/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="siswa/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>
 
</html>