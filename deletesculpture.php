<?php
$artid=$_POST["artid"];

$conn=mysqli_connect("localhost", "root", "", "test");
$sql="delete from sculpture WHERE artid=$artid ";
mysqli_query($conn,$sql);
echo $sql;
echo "...... success";
mysqli_close($conn);
?>