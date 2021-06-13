<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="border-bottom p-2">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="ListProduct.php">Danh sách sản phẩm</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Newproduct.php">Thêm mới 1 sản phẩm</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Listcategory.php">Danh sách các thể loại</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Thêm mới 1 thể loại</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Cart.php">Giỏ hàng</a>
            </li>

        </ul>
    </div>
    <h1 class="p-2" style="text-align: center">Danh sách sản phẩm</h1>
    <?php
    // lay ds sv tu database
    $servername = "localhost";
    $username = "root";
    $password = ""; // neu dung mamp password: root
    $db = "t2008m_php";
    // create connection
    $conn = new mysqli($servername,$username,$password,$db);
    // kiem tra ket noi
    if($conn->connect_error){
        die("Connect error...");// die lam dung luong chuong trinh tai day
    }
    //  echo "Connect successfully";
    // lay data tu bang sinhviens
    $sql_txt = "select * from sanpham";
    $rs = $conn->query($sql_txt);
    $dssanpham = [];
    if($rs->num_rows>0){
        while($row = $rs->fetch_assoc()){
            $dssanpham[] = $row;
        }
    }
    ?>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Tên</th>
            <th>Giá</th>
            <th>Mô tả</th>
            <th>Nhà_Cung_Cấp</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($dssanpham as $sp){?>
            <tr>
                <td><?php echo $sp["ten"]?></td>
                <td><?php echo $sp["gia"]?></td>
                <td><?php echo $sp["mota"]?></td>
                <td><?php echo $sp["tenncc"]?></td>
                <td><a style="text-decoration: none" href="Editproduct.php?id=<?php echo $sp["id"];?>">Sửa</a></td>
                <td><a style="text-decoration: none" class="link-danger" href="Addtocart.php?id=<?php echo $sp["id"];?>">Thêm vào giỏ hàng</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
</body>
</html>