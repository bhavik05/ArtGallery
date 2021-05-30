<?php

$artid= $_POST["artid"];
$eid= $_POST["eid"];
$place= $_POST["place"];
$doe=$_POST["doe"];

$conn=mysqli_connect("localhost", "root", "", "test");
$sql="insert into exhibitionp values($artid,$eid,'$place','$doe')";
mysqli_query($conn,$sql);
echo $sql;
echo "...... success";
mysqli_close($conn);
?>