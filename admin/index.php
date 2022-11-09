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
    <div class="taikhoan">
        <h3>Tài khoản</h3>
        <form action="../view/save/save_tk.php" method="GET" onsubmit="return(checklogin())">
            <p>Tên đăng nhập</p>
            <div>
                <input id="user" class="input" type="text" required="" name="taikhoan" value="">
            </div>
            <p>Mật khẩu</p>
            <div>
                <input id="pass" class="input" type="password" required minlength="3" name="matkhau">
            </div>
            <p>Ghi nhớ mật khẩu</p>
            <div>
                <input class="checkbox" type="checkbox">
            </div>
            <div>
                <input class="button" type="submit" value="Đăng nhập">
            </div>

        </form>
        <div class="">
            <a href=""><button style="color:red;">quên mật khẩu</button></a>

        </div>
    </div>
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