<?php
    include "../model/connect.php";
    $id = $_GET["id"];

    $sqlbl = "DELETE FROM binhluan WHERE idxe=$id";
    connect($sqlbl);
    

    $dlxe = "DELETE FROM datlichxem WHERE idxe=$id";
    connect($dlxe);

    $query = "DELETE FROM xe WHERE idxe=$id";
    connect($query);
   
    header("Location:".$_SERVER['HTTP_REFERER']);
?>