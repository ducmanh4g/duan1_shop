<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/style_addkh.css">
</head>
<?php
include "../../admin/model/connect.php";
$sqltk = "select * from taikhoan";     
$ngdung = getAll($sqltk);     

$sqlquyen = "select * from quyen";
$quyen = getAll($sqlquyen);

?>

<body>
    <div class="container">
        <div class="sidebar">
            <ul>
                <li><a href="../index.php">Trang chủ</a></li>
                <li><a href="../index.php?id=adddm">Danh Mục</a></li>
                <li><a href="../index.php?id=addxe">Xe</a></li>
                <li><a href="../index.php?id=addkh">Khách Hàng</a></li>
                <li><a href="../index.php?id=adddl">Đặt Lịch</a></li>
                <li><a href="../index.php?id=addcm">Comment</a></li>
                <li><a href="../index.php?id=addtt">Tin tức</a></li>

            </ul>
        </div>
        <div class="form">
            <div class="form_dm">
                <form action="../save/save_addkh.php" onsubmit="return(checktk())" method="GET">
                    <label>Họ & Tên</label>
                    <div class="input">
                        <input type="text" name="hoten" placeholder="Nhập họ tên" required />
                    </div>
                    <label>Tài Khoản</label>
                    <div class="input">
                        <input type="text" id="taikhoan" name="taikhoan" placeholder="Nhập tài khoản" required />
                    </div>
                    <label>Password</label>
                    <div class="input">
                        <input type="password" name="matkhau" placeholder="password" required minlength="8" />
                    </div>
                    <label>Gmail</label>
                    <div class="input">
                        <input type="text" id="gmail" name="gmail" placeholder="Nhập gmail" required />
                    </div>
                    <label>SĐT</label>
                    <div class="input">
                        <input type="text" id="sdt" name="sdt" placeholder="Nhập SĐT" required minlength="10"/>
                    </div>
                    <label>Quyền</label>
                    <div class="input">
                        <select name="quyen">                          
                            <?php foreach($quyen as $key=>$value):?>
                                <option value="<?php echo $value['idquyen']?>"><?php echo $value['tenquyen']?></option>
                            <?php endforeach?>
                        </select>
                    </div>

                    <button type="submit">Đăng Ký</button>
                </form>


            </div>
        </div>
    </div>
</body>
<script>
//đăng ký
function checktk() {
    var taikhoan = document.getElementById("taikhoan").value
    var sdt = document.getElementById("sdt").value

    <?php 
        $php_array = $ngdung;
        $code_array = json_encode($php_array);
    ?>
    var array_code = <?php echo $code_array; ?>;

    for (let index = 0; index < array_code.length; index++) {
        console.log(array_code[index]['2'])
        if (taikhoan == array_code[index]['2']) {
            alert("Tài khoản đã tồn tại");
            document.getElementById("taikhoan").style.color = "red";
            document.getElementById("taikhoan").focus
            return false;
        } else
            document.getElementById("taikhoan").style.color = "black";
    }
    if (isNaN(sdt)) {
        document.getElementById("sdt").value = "Xin Nhập Lại SĐT";
        document.getElementById("sdt").style.color = "red";
        return false;
    } else
        document.getElementById("taikhoan").style.color = "black";
    alert("đăng ký thành công")
}
</script>

</html>