<?php
    include "../model/connect.php";
    $id = $_GET["id"];
    $query = "DELETE FROM datlichxem WHERE iddl='$id'";
    connect($query);
   
    header("Location:".$_SERVER['HTTP_REFERER']);
?>