<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thêm Mới Sản Phẩm</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="border-bottom p-2">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
                <a class="nav-link " aria-current="page" href="listproduct.php">Danh sách sản phẩm</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="newproduct.php">Thêm mới 1 sản phẩm</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="editproduct.php">Sửa 1 sản phẩm</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="listcategory.php">Danh sách các thể loại</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Thêm mới 1 thể loại</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Sửa thể loại</a>
            </li>
        </ul>
    </div>
    <h1 class="p-2" style="text-align: center">Thêm mới sản phẩm</h1>
    <form>
        <div class="form-group" >
            <input class="form-control input-lg m-3" id="inputlg" type="text" placeholder="Nhập tên sản phẩm...">
            <input class="form-control input-lg m-3" id="inputlg" type="text"  placeholder="Nhập giá sản phẩm...">
            <input class="form-control input-lg m-3" id="inputlg" type="text" placeholder="Mô tả sản phẩm ...">
            <input class="form-control input-lg m-3" id="inputlg" type="text" placeholder="Nhập tên nhà cung cấp ...">
        </div>
        <button type="button" class="btn btn-success float-end">Thêm sản phẩm</button>
    </form>
</body>
</html>