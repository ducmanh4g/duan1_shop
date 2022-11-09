<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style_coment.css">
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="index.php?id=adddm">Danh Mục</a></li>
                <li><a href="index.php?id=addxe">Xe</a></li>
                <li><a href="index.php?id=addkh">Khách Hàng</a></li>
                <li><a href="index.php?id=addtdl">Đặt Lịch</a></li>
                <li><a href="index.php?id=addcm">Comment</a></li>
                <li><a href="index.php?id=addtt">Tin tức</a></li>
            </ul>
        </div>
        <div class="form">
            <div class="form_dm">
                <?php
                     include "./model/connect.php";
                     $sqlbl = "select * from binhluan";
                     $bl = getAll($sqlbl);
                    
                ?>
                <table>
                    <thead>
                        <th>
                            STT
                        </th>
                        <th>
                            Mã Sản Phẩn
                        </th>
                        <th>
                            Tài Khoản
                        </th>
                        <th>
                            ComMent
                        </th>
                        <th></th>
                    </thead>
                    <tbody>
                        <?php foreach ($bl as $key => $value):?>
                        <tr>
                            <td>
                                <p><?php echo $key+1?></p>
                            </td>
                            <td>
                                <p><?php echo $value['idxe']?></p>
                            </td>
                            <td>
                                <p><?php  
                                    $b = $value['idtk'];
                                    $sqlbl = "select taikhoan from taikhoan where idtk = $b";
                                    $tentk = getAll($sqlbl);                                   
                                    echo $tentk[0][0];
                                    ?>
                                </p>
                            </td>

                            <td>
                                <p><?php echo $value['noidung']?></p>
                            </td>

                            <td>
                                <a onclick="return(a())"
                                    href="./binhluan/delete.php?id=<?php echo $value['idbl']?>"><button>Delete</button></a>
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
function a() {
    var a = confirm("Bạn có muốn xóa comment không?")
    if (!a == true) {
        return false
    }

}
</script>

</html>