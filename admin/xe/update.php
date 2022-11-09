<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/style_updatesp.css">
</head>
<?php 
    include "../model/connect.php";
    $sql = "select * from danhmuc";
    $danhmuc= getAll($sql);

    $id=$_GET['id'];
    $sql2 = "select * from xe where idxe=$id";
    $xe= getAll($sql2);
    
    foreach ($xe as $key => $value) {
        $name=$value['tenxe'];
        $price=$value['gia'];
        $mt=$value['thongtinxe'];
        $iddm=$value['iddm'];
      
    }
?>

<body>

    <div class="container">
        <a href="../index.php">
            <button>Thoát</button>
        </a>
        <hr>
        <div class="">
            <div class="form">
                <form action="../save/save_updatesp.php?id=<?php echo $_GET['id']?>" method="POST" enctype="multipart/form-data" onsubmit="return(checkprice())">                
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
                        <input id="" class="input" type="text" name="name" placeholder="Nhập tên xe" required="" value="<?php echo $name?>">
                    </div>
                    <div class="row">
                        <p>Giá Xe</p>
                        <input id="price" class="input" type="text" name="price" placeholder="Nhập giá xe phải bằng number" required="" value="<?php echo $price?>">
                    </div>
                    <div class="row">
                        <p>Ảnh Xe</p>
                        <input class="file" type="file" name="productImage">
                    </div>
                    <div class="row">
                        <p>Mô tả</p>
                        <textarea class="input" name="mt" id="" cols="30" rows="10"><?php echo $mt?></textarea>
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