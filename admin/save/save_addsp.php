
<?php 
    include "../model/connect.php";

    $dm = $_POST["dm"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $img = $_FILES["productImage"]["name"];
    $mota = $_POST["mt"];

    if(is_numeric($price)){
        $query = "insert into xe(tenxe,img,thongtinxe,gia,iddm) values ('$name','$img','$mota',$price,'$dm')";
        connect($query);
        move_uploaded_file($_FILES["productImage"]["tmp_name"],"../uploat/".$_FILES["productImage"]["name"]);   
        header("Location:".$_SERVER['HTTP_REFERER']);
    }
    else
    header("Location:".$_SERVER['HTTP_REFERER']);
   
?>
