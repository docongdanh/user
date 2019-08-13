<?php
//lay cac bien truyen qua form
$user=$_GET["user"];
//tạo kết nối
$link=mysqli_connect("localhost","root","","dtl18") or die("Ket noi khong thanh cong");
//Tạo lệnh truy vấn kết nối
$sql="Delete from user where username='$user'";
mysqli_query($link, $sql);
header("location: index.php");
?>