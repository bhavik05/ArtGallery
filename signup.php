<?php

$pass=$_POST["pass"];
$usr= $_POST["usr"];

$conn=mysqli_connect("localhost", "root", "", "test");
$sql="insert into login values('$pass','$usr')";
mysqli_query($conn,$sql);
echo $sql;
echo "...... success";
mysqli_close($conn);
?>