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
                <li><a href="index.php?id=adddl">Đặt Lịch</a></li>
                <li><a href="index.php?id=addcm">Comment</a></li>
                <li><a href="index.php?id=addtt">Tin tức</a></li>
            </ul>
        </div>
        <div class="form">
            <div class="form_dm">

                <?php
                     include "./model/connect.php";
                     $sql = "select * from datlichxem";
                     $thongtin= getAll($sql);

                     
                
                ?>
                <table>
                    <thead>
                        <th>
                            STT
                        </th>
                        <th>
                            Họ tên
                        </th>
                        <th>
                            SDT
                        </th>
                        <th>
                            Gmail
                        </th>
                        <th>
                            Ngày Xem Xe
                        </th>
                        <th>
                        Loại Xe
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
                                <p><?php 
                                    $idtk = $value['idtk'];
                                    $sqlhoten = "select hoten,sdt,gmail from taikhoan where idtk = $idtk";
                                    $taikhoan = getOne($sqlhoten);
                                    echo $taikhoan[0]
                                ?></p>
                            </td>
                            <td>
                                <?php  echo $taikhoan[1]?>
                            </td>
                            <td>
                                <?php  echo $taikhoan[2]?>

                            </td>
                            <td>
                                <p><?php echo $value['ngaydatlich']?></p>
                            </td>
                            <td>
                                <?php 
                                    $idxe = $value['idxe'];
                                    $sqlxe = "select tenxe from xe where idxe = $idxe";
                                    $xe = getOne($sqlxe);
                                    echo $xe[0]
                                ?>
                            </td>

                            <td>
                                <a onclick="return(a())"
                                    href="./datlich/delete.php?id=<?php echo $value['iddl']?>"><button>Delete</button></a>
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
    var a = confirm("Bạn có muốn xóa không?")
    if (!a == true) {
        return false
    }

}
</script>

</html>