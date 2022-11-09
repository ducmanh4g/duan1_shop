<?php
    include "../model/connect.php";
    $id = $_GET["id"];
    $query = "DELETE FROM binhluan WHERE idbl='$id'";
    connect($query); 
    header("Location:".$_SERVER['HTTP_REFERER']);
?>