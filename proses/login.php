<?php

$tanggal   = date("Y/m/d");

if ($tanggal != "2019/08/16") {

    header("location:login_admin.php");

}

else {

include_once("koneksi.php");
session_start();
session_unset();
session_destroy();
session_start();

$nis           = $_POST['nis'];
$password      = $_POST['password'];



$sql_admin   =mysqli_query($conn,"SELECT * from data_admin where Id ='$nis' and Password ='$password'");

$sql_siswa   =mysqli_query($conn,"SELECT * from data_siswa where NIS ='$nis' and Password ='$password'");


    if($data_admin = mysqli_fetch_array($sql_admin)){

        $_SESSION['Id']   = $nis;
        $_SESSION['Nama_Admin'] = $data_admin['Nama'];
        echo "
        <script>
          alert('Login Berhasil');
          window.location = '../Admin/';
        </script>
        ";


    }

    elseif($data_siswa = mysqli_fetch_array($sql_siswa)){

        $_SESSION['Id']   = $nis;
        $_SESSION['Nama_Siswa'] = $data_siswa['Nama'];

        echo "
        <script>
          alert('Login Berhasil');
          window.location = '../Siswa';
        </script>
        ";

    }

    else{
        echo "
        <script>
          alert('Login Gagal User Belum Terdaftar');
          window.location = '../';
        </script>
        ";
    }

    

}

?>