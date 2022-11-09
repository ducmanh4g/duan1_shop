<?php
    include "../model/connect.php";
    $id = $_GET["id"];
    $query = "DELETE FROM tintuc WHERE id='$id'";
    connect($query);
   
    header("Location:".$_SERVER['HTTP_REFERER']);
?>