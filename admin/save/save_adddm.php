<?php
   include "../model/connect.php";
  
    $name=$_GET['name'];

    $query = "insert into danhmuc(name) values ('$name')";
    connect($query);
    
    header("Location:".$_SERVER['HTTP_REFERER']);

?>
