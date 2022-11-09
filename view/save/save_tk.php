<?php
include "../../admin/model/connect.php";

$taikhoan = $_GET['taikhoan'];
$matkhau = $_GET['matkhau'];

$sqlkh = "select * from taikhoan where taikhoan = '$taikhoan' AND matkhau = '$matkhau' AND idquyen='2'";
$sqladmin = "select * from taikhoan where taikhoan = '$taikhoan' AND matkhau = '$matkhau' AND idquyen='1'";

$login_kh = getAll($sqlkh);
$login_admin = getAll($sqladmin);



if(count($login_admin)!=0){
    session_start();
    $_SESSION['username'] = $taikhoan;
    $_SESSION['password'] = $matkhau;
    header("Location:../../admin/index.php");

}
else if(count($login_kh)!=0){
    session_start();
    $_SESSION['username'] = $taikhoan;
    $_SESSION['password'] = $matkhau;
    header("Location:".$_SERVER['HTTP_REFERER']);
}
else{
    header("Location:".$_SERVER['HTTP_REFERER']);
}


?>
