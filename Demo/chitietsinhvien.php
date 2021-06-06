<?php include_once "database.php" ?>
<!doctype html>
<html lang="en">
<?php include "html/head.php" ;?>
<body>
<?php
// thay tham so tren URL
$id = $_GET["id"];// $_GET la 1 array voi cac key la key cua param tren url
//  $name = $_GET["name"];// ko co se la null
$ds = queryDB("select * from sinhviens where od=$id");
if (count($ds)==0){
    header("Location: list.php");
}
$sv = $ds[0];
?>
<h1>id sinh viên: <?php echo $id["id"];?></h1>
<h2>Tên Sinh Viên:<?php echo $sv["name"]; ?></h2>
</body>
</html>