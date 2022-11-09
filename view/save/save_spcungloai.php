<?php 
    session_start();
    $spcungloai = $_GET['id'];
    
    $_SESSION['spcl'] = $spcungloai;
    
    header("Location:".$_SERVER['HTTP_REFERER']);
?>