<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
</head>
<body>

<?php
$dssanpham = [];
$dssanpham[] = [
    "name" => "Đồng hồ Led",
    "price" => 1990000,
    "describe" => "Công nghệ màn hình: TFT-LCD
                       Kích thước màn hình (inch): 1,4 inch
                       Độ phân giải: 360 x 360
                       Chất liệu mặt kính: Kính cường lực Gorilla Class 3
                       Đường kính mặt (mm): 3.3cm",
    "supplier_name"=> "Aplle"
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
    <h1 style="text-align: center">Danh sách sản phẩm</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Name</th>
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