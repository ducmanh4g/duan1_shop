<?php 
    session_start();
    include "../../admin/model/connect.php";
    $bl = $_POST['binhluan'];
    $a = $_GET['id'];

    $tk = $_SESSION['username'];

    $sqltk = "select idtk from taikhoan where taikhoan = '$tk'";
    $idtk = getOne($sqltk);
    var_dump($idtk[0]) ;
    if(isset($_SESSION['username'])){     
        $sql = "insert into binhluan(noidung,idtk,idxe) values ('$bl',$idtk[0],$a)";
        connect($sql);
        header("Location:".$_SERVER['HTTP_REFERER']);
    }
    else
    
    
    


    


?>