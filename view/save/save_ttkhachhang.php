<?php 
    session_start();
    include "../../admin/model/connect.php";
    $idxe = $_GET['idxe'];
    $date = $_GET['date'];

    $nguoidung = $_SESSION['username'];
    $sqltk = "select idtk from taikhoan where taikhoan = '$nguoidung'";
    $idtk = getOne($sqltk);

    $sql = "insert into datlichxem(ngaydatlich,idtk,idxe) values ('$date',$idtk[0],$idxe)";
    connect($sql);

    
    header("Location:".$_SERVER['HTTP_REFERER']);
?>