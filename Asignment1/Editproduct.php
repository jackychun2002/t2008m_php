<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <title>Sửa sản phẩm</title>
</head>
<body>
<div class="container">
    <div class="border-bottom p-2">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
                <a href="ListProduct.php" class="nav-link" aria-current="page">
                    Danh sách sản phẩm
                </a>
            </li>
            <li class="nav-item">
                <a href="Newproduct.php" class="nav-link" aria-current="page">
                    Thêm mới sản phẩm
                </a>
            </li>
            <li class="nav-item">
                <a href="Editproduct.php" class="nav-link" aria-current="page">
                    Sửa sản phẩm
                </a>
            </li>
            <li class="nav-item">
                <a href="Listcategory.php" class="nav-link" aria-current="page">
                    Danh sách các thể loại
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" aria-current="page">
                    Thêm mới 1 thể loại
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" aria-current="page">
                    Sửa thể loại
                </a>
            </li>
        </ul>
    </div>
    <h1 class="p-2" style="text-align: center">Sửa sản phẩm </h1>
    <form>
        <div class="form-group">
            <input type="text" class="form-control input-lg m-3" id="inputlg" placeholder="Nhập tên sản phẩm">
            <input type="text" class="form-control input-lg m-3" id="inputlg" placeholder="Nhập Giá sản phẩm">
            <input type="text" class="form-control input-lg m-3" id="inputlg" placeholder="Mô Tả sản phẩm">
            <input type="text" class="form-control input-lg m-3" id="inputlg" placeholder="Nhập tên nhà cung cấp SP">
        </div>
    </form>
</div>
</body>
</html>