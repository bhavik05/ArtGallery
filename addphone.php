<?php
$bid=$_POST["bid"];
$phone= $_POST["phone"];

$conn=mysqli_connect("localhost", "root", "", "test");
$sql="insert into buyer_phone values($bid,$phone)";
mysqli_query($conn,$sql);
echo $sql;
echo "...... success";
mysqli_close($conn);
?>