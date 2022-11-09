<?php 
    include "../../admin/model/connect.php";

    $hoten = $_GET['hoten'];
    $taikhoan = $_GET['taikhoan'];
    $matkhau = $_GET['matkhau'];
    $sdt = $_GET['sdt'];
    $gmail = $_GET['gmail'];

    $sqltk = "select * from taikhoan";
    $nguoidung = getAll($sqltk);
    $count = "";
    foreach ($nguoidung as $key => $value) {
        if($taikhoan == $value['taikhoan']){
            $count=$value['taikhoan'];
            break;          
         }
    }
    if(!$count){
        $sql = "insert into taikhoan(gmail,taikhoan,matkhau,hoten,idquyen,sdt) values ('$gmail','$taikhoan','$matkhau','$hoten',2,'$sdt')";
        connect($sql);
        header("Location:".$_SERVER['HTTP_REFERER']);
    }   
    else{
        header("Location:".$_SERVER['HTTP_REFERER']);
    }
      
    
    
?>