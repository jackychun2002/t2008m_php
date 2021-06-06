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

<?php
$dssanpham = [];
$dssanpham[] = [
    "name" => "Vòng đeo tay thể thao Realme Watch S",
    "price" => 1990000,
    "describe" => "Công nghệ màn hình: TFT-LCD
                       Kích thước màn hình (inch): 1,3 inch
                       Độ phân giải: 360 x 360
                       Chất liệu mặt kính: Kính cường lực Gorilla Class 3
                       Đường kính mặt (mm): 3.3cm",
    "supplier_name"=> "Realme"
];
$dssanpham[] = [
    "name" => "Tivi Philips Led HD 32 Inch",
    "price" => 3190000,
    "describe" => "Tivi Philips Led HD 32 Inch- 32PHT5583/74
                        Hình ảnh/Hiển thị TV màn hình LED HD độ phân giải bảng 1366 x 768
                        Tỉ lệ kích thước: 16:9
                        Nâng cao hình ảnh: Pixel Plus HD, 200 PPI",
    "supplier_name"=> "PHILIPS"
];
$dssanpham[] = [
    "name" => "Loa Karaoke Bluetooth Daile S8 Âm Thanh Cực Khủng",
    "price" => 780000,
    "describe" => "Loa Karaoke Bluetooth Daile S8 Âm Thanh Cực Khủng",
    "supplier_name"=> "No Brand"
];
?>
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
                <a class="nav-link" href="Editproduct.php">Sửa 1 sản phẩm</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Listcategory.php">Danh sách các thể loại</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Thêm mới 1 thể loại</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Sửa thể loại</a>
            </li>
        </ul>
    </div>
    <h1 class="p-2" style="text-align: center">Danh sách sản phẩm</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Tewe</th>
            <th>Price</th>
            <th>Describe</th>
            <th>Supplier_name</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach($dssanpham as $sp){?>
            <tr>
                <td><?php echo $sp["name"]?></td>
                <td><?php echo $sp["price"]?></td>
                <td><?php echo $sp["describe"]?></td>
                <td><?php echo $sp["supplier_name"]?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
</body>
</html>