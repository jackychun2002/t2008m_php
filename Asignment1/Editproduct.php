<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <title>Sửa sản phẩm</title>
</head>
<body>
<div class="container">
    <div class="border-bottom p-2">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
                <a class="nav-link " aria-current="page" href="ListProduct.php">Danh sách sản phẩm</a>
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
        </ul>
    </div>
    <h1 class="p-2" style="text-align: center">Sửa sản phẩm</h1>

    <?php
    $id = $_GET['id'];
    $servername = "localhost";
    $username = "root";
    $password = ""; // neu dung mamp password: root
    $db = "t2008m";
    // create connection
    $conn = new mysqli($servername,$username,$password,$db);
    // kiem tra ket noi
    if($conn->connect_error){
        die("Connect error...");// die lam dung luong chuong trinh tai day
    }

    $sql_txt = "select * from sanpham where id = $id";
    $rs = $conn->query($sql_txt);
    $sp = null;
    if($rs->num_rows>0){
        while($row = $rs->fetch_assoc()){
            $sp = $row;
            break;
        }
    }
    if($sp == null) header("location: listproduct.php");
    ?>
    <form action="Capnhat.php" method="POST">
        <div class="form-group" >
            <input name="ten" class="form-control input-lg m-3" id="inputlg" type="text" placeholder="Nhập tên sản phẩm..." value="<?php echo $sp["ten"];?>">
            <input name="gia" class="form-control input-lg m-3" id="inputlg" type="text"  placeholder="Nhập giá sản phẩm..." value="<?php echo $sp["gia"];?>">
            <input name="mota" class="form-control input-lg m-3" id="inputlg" type="text" placeholder="Mô tả sản phẩm ..." value="<?php echo $sp["mota"];?>">
            <input name="tenncc" class="form-control input-lg m-3" id="inputlg" type="text" placeholder="Nhập tên nhà cung cấp ..." value="<?php echo $sp["tenncc"];?>">
        </div>
        <button type="submit" class="btn btn-success float-end">Sửa sản phẩm</button>
    </form>
</div>
</body>
</html>