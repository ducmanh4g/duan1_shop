<?php
   include "../model/connect.php";
  
    $tieude=$_POST['tieude'];  
    $noidung=$_POST['noidung'];
    $anh = $_FILES["productImage"]["name"];
   
    $query = "insert into tintuc(tieude,img,noidung) values ('$tieude','$anh','$noidung')";
    connect($query);
    move_uploaded_file($_FILES["productImage"]["tmp_name"],"../uploat/".$_FILES["productImage"]["name"]); 
    header("Location:".$_SERVER['HTTP_REFERER']);

?>
