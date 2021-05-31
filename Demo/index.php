<?php
$x =  10; //khoi tao bien x
$y = "hello "; // giong javascrip
$x = "xin chao ";
$z = $x.$y; // noi chuoi "xin chao hello "
echo $z."<br/>";
echo (4+5)."<br/>";
echo " anh"." yêu";
$n = 10;
if($n >=10 ){
    echo "gia tri qua lon <br/>";
}else{
    echo "gia tri qua nho <br/>";
}
for ($i=0; $i <10 ;$i++){
    echo "i= ".$i."<br/>";
}
$arr = []; // khoi tao array
$arr [0] = 12;
$arr [1] = "xin chao";
$arr [] = 101; // tu dong them vao cuoi mang phan tu ay
for ($i = 0; $i <3 ;$i++){
    echo "arr[".$i."] = ".$arr[$i]."<br/>";
}
// array php thuc chat chia phan tu thanh key => value
$arr["name"] = "Nguyen van A"; // key = name va value = nguyen van A
$arr ["age"] = "18";
$arr ["telephone"] = "0965599548";
//$arr ["ds_monhoc"] = ["LBEEP,BNGW"];
echo "Name :" .$arr["name"]."<br/>";
foreach ($arr as $item) { // $item la bien doi dien cho tung phan tu cua arr -> $arr[i]
    echo $item."<br/>";
}
foreach ($arr as $key => $value){
    echo $key."=".$value."<br/>";
}