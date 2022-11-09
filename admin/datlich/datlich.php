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
            <li>
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
                     $sql = "select * from thongtinkhachhang";
                     $thongtin= getAll($sql);

                
                ?>
                <p>Số đơn hàng: <?php echo count($thongtin);?></p>
                <table>
                    <thead>
                        <th>
                            STT
                        </th>
                        <th>
                            Họ tên
                        </th>
                        <th>
                            Địa chỉ
                        </th>
                        <th>
                            SDT
                        </th>
                        <th>
                            Mã đơn hàng
                        </th>
                        <th>
                           Mã Sản Phẩm
                        </th>
                       
                        <th></th>
                    </thead>
                    <tbody>
                        <?php foreach ($thongtin as $key => $value):?>
                        <tr>
                            <td>
                                <p><?php echo $key+1?></p>
                            </td>
                            <td>
                                <p><?php echo $value['hoten']?></p>
                            </td>
                            <td>
                                <p><?php echo $value['diachi']?></p>
                            </td>
                            <td>
                                <p><?php echo $value['sdt']?></p>
                            </td>
                            <td>
                                <p><?php echo $value['id']?></p>
                            </td>
                            <td>
                                <p><?php echo $value['idsp']?></p>
                            </td>
                           
                            <td>
                                <a onclick="return(a())"
                                    href="./donhang/delete.php?id=<?php echo $value['id']?>"><button>Delete</button></a>
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
    var a = confirm("Bạn có muốn xóa đơn hàng không?")
    if (!a == true) {
        return false
    }

}
</script>

</html>