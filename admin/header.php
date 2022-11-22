<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/header.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <img src="../view/img/xemxe-logowhite.png" alt="">
                <h1>Xin chào Admin</h1>
            </div>
            <div class="dangxuat">
                <a onclick="return(checkout())" href="./save/save_lgout.php"><button>Đăng xuất</button></a>
            </div>
        </div>
    </div>
    </div>
</body>
<script> 
    function checkout(){
      var  a =  confirm("Bạn có muốn đăng xuất không?")
        if(!a==true){
            return false      
        }
       
    }
</script>
</html>