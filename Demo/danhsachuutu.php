<?php include_once "session.php"; ?>
<<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh Sách Sinh Viên Ưu Tú</title>
</head>
<body>
    <h1>Danh Sách Sinh Viên Ưu Tú</h1>
    <?php $ds = $_SESSION["sv_uu_tu"]; ?>
    <ul>
        <?php foreach ($ds as $sv){ ?>
            <li><?php echo $sv["name"]; ?></li>
        <?php } ?>
    </ul>
</body>
</html>
