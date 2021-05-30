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
$sql="update sculpture set aid=$aid,aname='$name',doc='$doc',voa=$val,material='$mat',height=$ht,weight=$wt WHERE artid=$artid ";
mysqli_query($conn,$sql);
echo $sql;
echo "...... success";
mysqli_close($conn);
?>