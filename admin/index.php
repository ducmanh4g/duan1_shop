<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php  
session_start();
if(!isset($_SESSION['username'])){ ?>
   <h2>Xin Mời Đăng Nhập</h2>
   <a href="../index.php"><button>Đăng Nhập</button></a>
    <?php }
    else{
        include "header.php";
    
        if(isset($_GET['id'])){
            $id=$_GET['id'];
            switch ($id) {
                case 'adddm':
                    include "danhmuc/add.php";
                    break;           
                case 'addxe':
                    include "xe/xe.php";
                    break;          
                case 'addkh':
                    include "khachhang/khachhang.php";
                    break;       
                case 'adddl':
                    include "datlich/datlich.php";
                    break;     
                case 'addcm':
                    include "binhluan/comment.php";
                    break;  
                case 'addtt':
                    include "tintuc/add.php";
                    break;
                default:
                    include "home.php";
                    break;
            }
        }
        else
        include "home.php";
   }?>
</body>

</html>
<?php
    
?>