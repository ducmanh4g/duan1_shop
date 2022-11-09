<?php
    include "../model/connect.php";
    $id = $_GET["id"];

    $query1 = "DELETE FROM binhluan WHERE idtk='$id'";
    connect($query1);

    $query2 = "DELETE FROM datlichxem WHERE idtk='$id'";
    connect($query2);
    
    $query3 = "DELETE FROM taikhoan WHERE idtk='$id'";
    connect($query3);
   
    header("Location:".$_SERVER['HTTP_REFERER']);
?>