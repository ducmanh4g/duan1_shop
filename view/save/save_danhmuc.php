<?php 
    session_start();
    $iddanhmuc = $_GET['id'];
    
    $_SESSION['iddm'] = $iddanhmuc;
    
    echo $_SESSION['iddm'];
    header("location:../../index.php")
?>