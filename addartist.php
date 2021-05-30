<?php

$fname= $_POST["fname"];
$mname= $_POST["mname"];
$lname= $_POST["lname"];
$pob=$_POST["pob"];
$aid=$_POST["aid"];
$dob=$_POST["dob"];

$conn=mysqli_connect("localhost", "root", "", "test");
$sql="insert into artist values('$fname','$mname','$lname','$pob',$aid,'$dob')";
mysqli_query($conn,$sql);
echo $sql;
echo "...... success";
mysqli_close($conn);
?>