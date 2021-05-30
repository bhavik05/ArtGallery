<?php

$artid= $_POST["artid"];
$bid= $_POST["bid"];
$cost= $_POST["cost"];
$dop=$_POST["dop"];

$conn=mysqli_connect("localhost", "root", "", "test");
$sql="insert into bought_painting values($artid,$bid,$cost,'$dop')";
$sql1="update painting set avail=0 WHERE artid=$artid ";
mysqli_query($conn,$sql);
echo $sql;
echo "...... success";
mysqli_query($conn,$sql1);
echo $sql1;
echo "...... success";
mysqli_close($conn);
?>