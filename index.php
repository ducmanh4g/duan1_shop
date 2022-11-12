<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./view/css/style_view1.css">
    <link rel="stylesheet" href="./view/css/login.css">


</head>
<?php session_start(); 
include "./admin/model/connect.php";     

$Sqltintuc = "select * from tintuc";
$tintuc = getAll($Sqltintuc);

$sqlquyen = "select * from quyen";     
$quyen = getAll($sqlquyen);  

$sqltk = "select * from taikhoan";     
$ngdung = getAll($sqltk);  

$sqldm = "select * from danhmuc";     
$dm = getAll($sqldm);  

 
?>
<script>
function close() {
    var element = document.getElementById('vvv')
    var cl = confirm("bạn có muốn hay không")
    console.log(element)
    if (cl == true) {
        element.style.display = 'none'
    } else
        element.style.display = 'block'
}

function dk() {
    var element = document.getElementById('vvv')
    element.style.display = 'block'
    document.getElementById('closeel').addEventListener('click', close)
}
</script>

<body>
    <div class="container">
        <div class="banner">
            <div class="header">
                <div class="logo">
                    <img src="./view/img/xemxe-logowhite.png" alt="">
                </div>
                <a href="./view/save/save_lgout.php"><button>Đăng xuất</button></a>
            </div>
            <div id="slideshow">
                <div class="slide-wrapper">
                    <div class="slide"><img src="./view/img/trato-venta-coche.jpg"></div>
                    <div class="slide"><img src="./view/img/1.jpg"></div>
                    <div class="slide"><img src="./view/img/banner-03.jpg"></div>
                </div>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="">Trang chủ</a></li>
                    <li><a href="./view/lienhe.php">Liên hệ</a></li>
                    <li><a href="./view/gioithieu.php">Giới thiệu</a></li>
                    <li><a href="">Hỏi đáp</a></li>
                </ul>
            </div>
        </div>
        <div class="content">
            <div class="col1">
                <!-- Slideshow container -->
                <div class="slider">
                    <h2>Tin Tức New</h2>
                    <div class="slides">
                        <?php foreach($tintuc as $key => $value):?>
                        <div id="slide-<?php echo $key+1?>">
                            <div>
                                <h2><?php echo $value['tieude']?></h2>
                            </div>
                            <img src="./admin/uploat/<?php echo $value['img']?>" alt="">
                            <p><?php echo $value['noidung']?></p>
                        </div>
                        <?php endforeach?>
                    </div>
                    <?php foreach($tintuc as $key => $value):?>
                    <a href="#slide-<?php echo $key+1?>"><?php echo $key+1?></a>
                    <?php endforeach?>
                </div>
                <div class="xe">
                    <h2>Sản Phẩm</h2>
                    <div class="sanpham">
                        <?php                                                         
                        $sp="";                       
                        if(isset($_SESSION['iddm'])){
                            $iddm =$_SESSION['iddm'];
                            $sql="select * from xe where iddm='$iddm'";
                            $xe = getAll($sql);
                            unset($_SESSION['iddm']);
                        }
                        else
                        {
                            $sql="select * from xe";
                            $xe = getAll($sql);
                        }                 
                    ?>
                        <?php foreach($xe as $key => $value):?>
                        <a href="./view/chitietsp.php?id= <?php echo $value['idxe']?>">
                            <div class="sp">
                                <img src="./admin/uploat/<?php echo $value['img']?>" alt="">
                                <p><?php echo $value['tenxe']?></p>
                                <p class="price">$ <?php echo $value['gia']?></p>
                                <p><?php echo $value['thongtinxe']?></p>
                            </div>
                        </a>
                        <?php endforeach?>
                    </div>
                </div>
            </div>
            <div class="col2">
                <?php  if(!isset($_SESSION['username'])){ ?>
                <div class="taikhoan">
                    <h3>Tài khoản</h3>
                    <form action="./view/save/save_tk.php" method="GET" onsubmit="return(checklogin())">
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
                        <button style="color:red;" onclick="dk()">đăng ký thành viên</button>
                    </div>
                </div>
                <?php } ?>

                <h3>Danh mục</h3>
                <div class="danhmuc">
                    <h3>Danh mục</h3>
                    <?php foreach($dm as $key => $value):?>
                    <ul>
                        <li>
                            <a
                                href="./view/save/save_danhmuc.php?id=<?php echo $value['id']?>"><?php echo $value['name']?></a>
                        </li>
                    </ul>
                    <?php endforeach?>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="footer">
        <div class="">
            <h3>Thông tin liên hệ</h3>
            <p>Địa chỉ: Hà Nội</p>
            <p>Email: Shopx@gmail.com</p>
            <p>SDT: 0945834756</p>
        </div>
        <div class="">
            <h3>Chăm sóc khách hàng</h3>
        </div>
        <div class="">
            <h3>Hỗ trợ</h3>
        </div>
        <div class="">
            <h3>Dịch vụ khách hàng</h3>
        </div>
    </div>
    </div>
    <!-- form đăng ký -->
    <div id="vvv"
        style="position: fixed; width:100vw; height:100vh; background-color:rgba(48, 82, 212, 0.2);;top:0;display: none;">
        <div style="width:100%; height:100%;display: flex;justify-content: center;align-items: center">
            <div style=" width:600px; height:auto; background-color:rgba(0,0,0,0.9);">
                <div class="close"><button id="closeel" style="cursor: pointer;">X</button></div>
                <div class="form">
                    <div class="brand-logo"></div>
                    <div class="brand-title">ĐĂNG KÝ</div>
                    <div class="inputs">
                        <form action="./view/save/save_dangky.php" onsubmit="return(dangky())" method="GET">
                            <label>Họ & Tên</label>
                            <input type="text" name="hoten" placeholder="Nhập họ tên" required />
                            <label>Tài Khoản</label>
                            <input type="text" id="taikhoan" name="taikhoan" placeholder="Nhập tài khoản" required />
                            <label>Password</label>
                            <input type="password" name="matkhau" placeholder="password" required minlength="8" />
                            <label>Gmail</label>
                            <input type="text" id="gmail" name="gmail" placeholder="Nhập gmail" required />
                            <label>SĐT</label>
                            <input type="text" id="sdt" name="sdt" placeholder="Nhập SĐT" required />

                            <button type="submit">Đăng Ký</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- js -->

<script>
//đăng ký
function dangky() {
    var taikhoan = document.getElementById("taikhoan").value
    var sdt = document.getElementById("sdt").value

    <?php 
        $code_array = json_encode($ngdung);
    ?>
    var array_code = <?php echo $code_array; ?>;
    // function kiemTra(item) {
    //     return item['0'] === taikhoan
    // }

    // if (!array_code.some(kiemTra)) {
    //     alert("Tài khoản đã tồn tại");
    //     return;
    // }
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
//đăng nhập

function checklogin() {
    var cout = "";
    var user = document.getElementById("user").value
    var pass = document.getElementById("pass").value
    <?php 
        $code_array = json_encode($ngdung);
    ?>
    var array_code = <?php echo $code_array; ?>;
    for (let index = 0; index < array_code.length; index++) {
        if (user == array_code[index]['2'] && pass == array_code[index]['3']) {
            cout++;
        }
    }
    if (!cout) {
        alert("Sai tài khoản hoặc mật khẩu")
        return false
    }
}
</script>

</html>