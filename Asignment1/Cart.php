<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

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
            <li class="nav-item">
                <a class="nav-link active" href="Cart.php">Giỏ hàng</a>
            </li>

        </ul>
    </div>
    <h1 class="p-2" style="text-align: center">Giỏ hàng</h1>
    <?php
    session_start();
    $dssp = isset($_SESSION["cart"])?$_SESSION["cart"]:[];
    ?>
    <table class="table table-bordered table-striped">
        <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Qty</th>
        <th></th>
        </thead>
        <tbody>
        <?php foreach ($dssp as $item):?>
            <tr>
                <td><?php echo $item["id"];?></td>
                <td><?php echo $item["name"];?></td>
                <td><?php echo $item["price"];?></td>
                <td><?php echo $item["qty"];?></td>
                <td><a style="text-decoration: none" href="Addtocart.php?id=<?php echo $item["id"];?>">Thêm vào giỏ hàng</a></td>
            </tr>
        <?php endforeach;  ?>
        </tbody>
    </table>
    <button type="button" class="btn btn-danger">
        <a style="color: #fff; text-decoration: none" href="Checkout.php">Thanh toán</a>
    </button>

</div>
</body>
</html>