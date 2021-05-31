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
    "name" => "Redmi Note 10 5G",
    "price" => 19900000,
    "describe" => "smartphone được trang bị 5G tốc độ cao có mức khá cạnh tranh hiện nay, 
    bên cạnh đó Redmi Note 10 5G còn sở hữu cho mình hiệu suất vượt trội từ con  chip MediaTek Dimensity .",
    "supplier_name"=> "Aplle"
];
$dssanpham[] = [
    "name" => "Redmi Note 10S",
    "price" => 3190000,
    "describe" => " hỗ trợ sạc nhanh 33W và vi xử lý Helio G95 cũng mạnh mẽ không
     3kém thì Redmi Note 10S còn có cho mình khả năng chống thấm IP53I",
    "supplier_name"=> "PHILIPS"
];
$dssanpham[] = [
    "name" => "OPPO Reno2 cũ",
    "price" => 780000,
    "describe" => "kích thước lớn lên đến 6.55 inch Sunlight AMOLED mới cho chất lượng hiển thị xuất sắc cùng màu sắc sinh động.
    với cấu hình RAM lên đến 6 GB, cùng Chip Snapdragon 710, ",
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