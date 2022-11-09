<script>
    
</script>

<?php
    include "../model/connect.php";
    $id = $_GET["id"];

    $query1 = "DELETE FROM xe WHERE iddm=$id";
    connect($query1);
    
    $query = "DELETE FROM danhmuc WHERE id=$id";
    connect($query);
   
    header("Location:".$_SERVER['HTTP_REFERER']);
?>