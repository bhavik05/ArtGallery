<?php
$aid=$_POST["aid"];
$artid=$_POST["artid"];
$name= $_POST["name"];
$doc=$_POST["doc"];
$val=$_POST["val"];
$mat=$_POST["mat"];
$ht=$_POST["ht"];
$wt=$_POST["wt"];

$conn=mysqli_connect("localhost", "root", "", "test");
$sql="insert into sculpture values($aid,$artid,'$name','$doc',$val,1,'$mat',$ht,$wt)";
mysqli_query($conn,$sql);
echo $sql;
echo "...... success";
mysqli_close($conn);
?>