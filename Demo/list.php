<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sinh viên</title>
</head>
<body>
    <h1>Danh Sách Sinh viên</h1>
    <?php
    $dshocsinh = [];
    $dshocsinh[] = [
            "name"=> "Nguyen Van An",
            "age"=> 18
    ];
    $dshocsinh[]  = [
        "name"=> "Do Duy Anh",
        "age"=> 19
    ];
    $dshocsinh[] = [
        "name"=> "Do Thanh Chien",
        "age"=> 19
    ];
    ?>
    <ul>
        <?php foreach ($dshocsinh as $hs){ ?>
        <li><?php echo $hs["name"]."-".$hs["age"] ?></li>
        <?php }
        ?>
    </ul>
    <a href="index.php"> Quay về trang chủ</a>
</body>
</html>