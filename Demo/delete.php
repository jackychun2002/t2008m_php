<?php
include_once "database.php";
$id = $_GET['id'];

$sql_txt = "delete from sinhviens where id = $id";
if (insertOrUpdateDB($sql_txt)){
    header("location: list.php");
}else{
    echo "error";
}