<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style_adddm.css">
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="index.php?id=adddm">Danh Mục</a></li>
                <li><a href="index.php?id=addxe">Xe</a></li>
                <li><a href="index.php?id=addkh">Khách Hàng</a></li>
                <li><a href="index.php?id=adddl">Đặt Lịch</a></li>
                <li><a href="index.php?id=addcm">Comment</a></li>
                <li><a href="index.php?id=addtt">Tin tức</a></li>

            </ul>
        </div>
        <div class="form">
            <div class="form_dm">
                <form action="./save/save_adddm.php" method="GET" enctype="multipart/form-data">
                    <div class="row">
                        <p>Mã loại</p>
                        <input id="iddanhmuc" class="input" type="text" name="id" placeholder="id" readonly>
                    </div>
                    <div class="row">
                        <p>Tên loại</p>
                        <input class="input" type="text" name="name" placeholder="tên loại" required="" minlength="3">
                    </div>
                    <button type="submit">Add Danh Mục</button>
                </form>
                <?php
                     include "./model/connect.php";
                     $sql = "select * from danhmuc";
                     $danhmuc= getAll($sql);
                ?>
                <table>
                    <thead>
                        <th>
                            ID
                        </th>
                        <th>
                            LOẠI
                        </th>
                        <th></th>
                    </thead>
                    <tbody>
                        <?php foreach ($danhmuc as $key => $value):?>
                        <tr>
                            <td>
                                <p><?php echo $value['id']?></p>
                            </td>
                            <td>
                                <p><?php echo $value['name']?></p>
                            </td>
                            <td>
                                <a onclick="return(a())" href="./danhmuc/delete.php?id=<?php echo $value['id']?>"><button>Delete</button></a>
                            </td>
                        </tr>
                        <?php endforeach?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<script> 
    function a(){
      var  a =  confirm("Bạn có muốn xóa danh mục không?")
        if(!a==true){
            return false      
        }
       
    }
</script>
</html>