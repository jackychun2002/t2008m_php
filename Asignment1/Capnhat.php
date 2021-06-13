<?php
$name = $_POST["name"];
$price = $_POST["price"];
$mota = $_POST["mota"];
$tencc = $_POST["tencc"];
$id = $_POST["id"];
$servername = "localhost";
$username = "root";
$password = "";
$db = "t2008m_php";
$conn = new mysqli($servername,$username,$password,$db);

if ($conn->connect_error){
    die("Connect error...");
}
$sql_txt = "update product set name='$name',price='$price',mota = '$mota',tencc='$tencc' where id=$id";
if ($conn->query($sql_txt) === true){
    header("location: ListProduct.php");
}else{
    echo "ERROR:".$conn->error;
}