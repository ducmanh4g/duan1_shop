<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style_view1.css">
</head>

<body>
    <div class="container">
        <div class="banner">
            <h2>Siêu thị trực tuyến</h2>
            <div id="slideshow">
                <div class="slide-wrapper">
                    <div class="slide"><img src="./img/banner.jpg"></div>
                    <div class="slide"><img src="./img/sale-online-la-gi-1.jpg"></div>
                    <div class="slide"><img src="./img/online.jpg"></div>
                </div>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="../index.php">Trang chủ</a></li>
                    <li><a href="./lienhe.php">Liên hệ</a></li>
                    <li><a href="./gioithieu.php">Giới thiệu</a></li>
                    <li><a href="">Hỏi đáp</a></li>
                </ul>
            </div>
        </div>
        <div class="lienhe">
            <h3>Đăng ký</h3>
            <div id="vvv"
                style="position: fixed; width:100vw; height:100vh; background-color:rgba(255, 0, 0, 0.3);top:0;display: none;">
                <div style="width:100%; height:100%;display: flex;justify-content: center;align-items: center">
                    <div style=" width:600px; height:400px; background-color:rgba(0,0,0,0.9);">
                        <div class="close"><button id="closeel" style="cursor: pointer;">X</button></div>
                        <div class="form">
                            <div class="brand-logo"></div>
                            <div class="brand-title">ĐĂNG KÝ</div>
                            <div class="inputs">
                                <form action="./save/save_dangky.php" method="GET">
                                    <label>Họ & Tên</label>
                                    <input type="text" placeholder="Nhập họ tên" required />
                                    <label>Tài Khoản</label>
                                    <input type="text" placeholder="Nhập tài khoản" required />
                                    <label>Password</label>
                                    <input type="password" placeholder="password" required minlength="8" />
                                    <label>SĐT</label>
                                    <input type="text" placeholder="Nhập SĐT" required /> <label>Tài Khoản</label>
                                    <label>Gmail</label>
                                    <input type="text" placeholder="Nhập gmail" required />
                                    <?php 
                                    include "../admin/model/connect.php";
                                    $sqlquyen = "select * from quyen";     
                                    $quyen = getAll($sqlquyen);                                                              
                                    ?> 
                                    <select name="" id="">
                                        <?php foreach ($quyen as $key => $value):?>
                                            <option value="<?php echo $value['idquyen']?>"><?php echo $value['quyen']?></option>
                                        <?php endforeach?>
                                    </select>
                                    <button type="submit">Đăng Ký</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</body>

</html>