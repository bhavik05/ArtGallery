<?php
$bid=$_POST["bid"];
$fname= $_POST["fname"];
$mname= $_POST["mname"];
$lname= $_POST["lname"];

$conn=mysqli_connect("localhost", "root", "", "test");
$sql="insert into buyer values($bid,'$fname','$mname','$lname')";
mysqli_query($conn,$sql);
echo $sql;
echo "...... success";
mysqli_close($conn);
?>