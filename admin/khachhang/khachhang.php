<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style_khachhang.css">
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
                     $sql = "select * from taikhoan";
                     $taikhoan= getAll($sql);
                ?>
                <div class="addkhachhang">
                    <a href="./khachhang/addkh.php"><button>Add khách hàng</button></a>
                </div>
                <table>
                    <thead>
                        <th>
                            MãTK
                        </th>
                        <th>
                            TAIKHOAN
                        </th>
                        <th>
                            MATKHAU
                        </th>
                        <th>
                            Gmail
                        </th>
                        <th>
                            Họ tên  
                        </th>
                        <th>
                            SĐt
                        </th>
                        <th>
                            Quyền
                        </th>
                        <th></th>
                    </thead>
                    <tbody>
                        <?php foreach ($taikhoan as $key => $value):?>
                        <tr>
                            <td>
                                <p><?php echo $value['idtk']?></p>
                            </td>
                            <td>
                                <p><?php echo $value['taikhoan']?></p>
                            </td>
                            <td>
                                <p><?php echo $value['matkhau']?></p>
                            </td>
                            <td>
                                <p><?php echo $value['gmail']?></p>
                            </td>
                            <td>
                                <p><?php echo $value['hoten']?></p>
                            </td>
                            <td>
                                <p><?php echo $value['sdt']?></p>
                            </td>
                            <td>
                                <p><?php 
                                $idquyen = $value['idquyen'];
                                $sqlquyen = "select tenquyen from quyen where idquyen = $idquyen";
                                $tenquyen= getAll($sqlquyen);
                                echo $tenquyen[0][0];
                                
                                ?></p>
                            </td>
                            <td>
                                <a onclick="return(a())" href="./khachhang/delete.php?id=<?php echo $value['idtk']?>"><button>Delete</button></a>
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
      var  a =  confirm("Bạn có muốn xóa thành viên không?")
        if(!a==true){
            return false      
        }
       
    }

</script>
</html>