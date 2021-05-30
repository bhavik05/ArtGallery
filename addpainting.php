<?php
$aid=$_POST["aid"];
$artid=$_POST["artid"];
$name= $_POST["name"];
$doc=$_POST["doc"];
$val=$_POST["val"];
$paint=$_POST["paint"];
$pstyle=$_POST["pstyle"];
$ptype=$_POST["ptype"];

$conn=mysqli_connect("localhost", "root", "", "test");
$sql="insert into painting values($aid,$artid,'$name','$doc',$val,1,'$paint','$pstyle','$ptype')";
mysqli_query($conn,$sql);
echo $sql;
echo $doc;
echo "...... success";
mysqli_close($conn);
?>