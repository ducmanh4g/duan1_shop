<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style_tintuc.css">
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
            <div class="form_tt">
                <form action="./save/save_addnd.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <p>Tiêu đề</p>
                        <input id="" class="input" type="text" name="tieude" placeholder="Tiêu đề" required>
                    </div>
                    <div class="row">
                        <p>Ảnh</p>
                        <input type="file" name="productImage" id="">
                    </div>
                    <div class="row">
                        <p>Nội dung</p>
                        <textarea class="input" name="noidung" id="" cols="100" rows="20"></textarea>
                    </div>
                    <button type="submit">Add Tin tức</button>
                </form>
                <?php
                     include "./model/connect.php";
                     $sql = "select * from tintuc";
                     $tintuc= getAll($sql);
                ?>
                <table>
                    <thead>
                        <th>
                            Tiêu đề
                        </th>
                        <th>ảnh</th>
                        <th>
                            Nội dung
                        </th>
                        <th></th>
                    </thead>
                    <tbody>
                        <?php foreach ($tintuc as $key => $value):?>
                        <tr>
                            <td>
                                <h3><?php echo $value['tieude']?></h3>
                            </td>
                            <td>
                                <img src="./uploat/<?php echo $value['img']?>" alt="">
                            </td>
                            <td>
                                <p><?php echo $value['noidung']?></p>
                            </td>
                            <td>
                                <a onclick="return(a())" href="./tintuc/delete.php?id=<?php echo $value['id']?>"><button>Delete</button></a>
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