<?php 
    include "./model/connect.php";
     $sqlxe = "select * from xe";
     $xe = getAll($sqlxe);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style_xe.css">
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



        <div class="table">
            <a href="./xe/add.php"><button>Thêm mới</button></a>
            <table>
                <tr>
                    <th>STT</th>
                    <th>Mã Xe</th>
                    <th>Tên xe</th>
                    <th>Ảnh xe</th>
                    <th>Giá xe</th>
                    <th>Thông tin xe</th>
                    <th>ID Danh mục</th>
                    <th></th>
                </tr>
                <?php foreach ($xe as $key => $value) :?>
                <tr>
                    <td><?php echo $key+1?></td>
                    <td><?php echo $value['idxe']?></td>
                    <td><?php echo $value['tenxe']?></td>
                    <td><img src="./uploat/<?php echo $value['img']?>" alt=""></td>
                    <td><?php echo $value['gia']?></td>
                    <td><?php echo $value['thongtinxe']?></td>
                    <td><?php echo $value['iddm']?></td>
                    <td>
                        <div class="button">
                            <a onclick="return(a())"
                                href="./xe/delete.php?id=<?php echo $value['idxe']?>"><button>Delete</button></a>
                                   
                            <a id=""
                                href="./xe/update.php?id=<?php echo $value['idxe']?>"><button>Update</button></a>
                        </div>
                    </td>
                </tr>
                <?php endforeach?>
            </table>
        </div>
    </div>
</body>
<script>
function a(){
      var  a =  confirm("Bạn có muốn xóa Xe không?")
        if(!a==true){
            return false      
        }
       
    }


</script>

</html>