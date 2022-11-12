<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/style_addxe.css">
</head>
<?php 
    include "../model/connect.php";
    $sql = "select * from danhmuc";
    $danhmuc= getAll($sql);
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
            <div class="form_sp">
                <form action="../save/save_addsp.php" onsubmit="return(checkprice())" method="POST" enctype="multipart/form-data">
                    <div>
                        <p>Danh mục</p>
                        <select name="dm" id="" class="input">
                            <?php foreach ($danhmuc as $key => $value):?>
                            <option value="<?php echo $value['id']?>"><?php echo $value['name']?></option>
                            <?php endforeach?>
                        </select>
                    </div>
                    <div class="row">
                        <p>Tên Xe</p>
                        <input id="" class="input" type="text" name="name" placeholder="Nhập tên xe" required="">
                    </div>
                    <div class="row">
                        <p>Giá Xe</p>
                        <input id="price" class="input" type="text" name="price" placeholder="Nhập giá xe phải bằng number" required="">
                    </div>
                    <div class="row">
                        <p>Ảnh Xe</p>
                        <input class="file" type="file" name="productImage">
                    </div>
                    <div class="row">
                        <p>Mô tả</p>
                        <textarea class="input" name="mt" id="" cols="30" rows="10"></textarea>
                    </div>

                    <button type="submit">Add New</button>
                </form>
            </div>
        </div>
    </div>
</body>
<script> 
    function checkprice(){
        var  price = document.getElementById("price").value  
        console.log(isNaN(price))
        if(isNaN(price)){
            alert("Nhập giá bằng number")   
            return false; 
        }
       
    }

</script>
</html>