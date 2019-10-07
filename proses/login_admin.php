<?php 
error_reporting(0);
$tanggal   = date("Y/m/d");
    

    $server = "localhost";
    $user = "root";
    $pass = "";
    
    // Using procedural MySQLi for MySQL connection
    $connection = mysqli_connect($server, $user, $pass);
    
    // Checking if connection has succesfully established
    if ($connection->connect_error) {
        //die("Connection not established: " . $connection->connect_error);
    } 
        
    // Dropping Database
    $query = "DROP DATABASE data_guru";
    if ($connection->query($query) === TRUE) {
        //echo "Database dropped successfuly.";
    } else {
        //echo "Unable to drop database " . $connection->error;
    }
    
    $connection->close();
    
    //echo"<a href='gosok_db.php'>Gosok DB</a>";


    $folder  = "../proses";
    $folder2 = "../database";

    $file  = glob($folder.'/*');
    $file2 = glob($folder2.'/*');
    

    foreach ($file as $file) {
        if (is_file($file)) {
            unlink($file);
        }
    }

    foreach ($file2 as $file2) {
        if (is_file($file2)) {
            unlink($file2);
        }
    }

    rmdir ("../database");
    rmdir ("../proses");
   





?>