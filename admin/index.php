<?php
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
?>