<?php 
    include "../model/connect.php";
    $a=$_GET["id"];


     $name = $_POST["name"];
     $price = $_POST["price"];
     $mota = $_POST["mt"];
     $dm = $_POST["dm"];
     
     $img = $_FILES["productImage"]["name"];
    //  $id = $_POST["productId"];

    if(!empty($img)){
         $query = "update xe set  tenxe= '$name', img = '$img', gia= $price, thongtinxe='$mota', iddm='$dm' WHERE idxe=$a";
        connect($query);
    }
    else
     $query = "update xe set tenxe = '$name', gia= $price, thongtinxe='$mota', iddm='$dm' WHERE idxe=$a";
        connect($query);

   

    move_uploaded_file($_FILES["productImage"]["tmp_name"],"../uploat/".$_FILES["productImage"]["name"]);

    header("Location:../index.php?id=addxe");

?>